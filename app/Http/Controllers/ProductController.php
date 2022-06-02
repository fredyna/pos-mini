<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseFormatter;
use App\Models\Product;
use App\Models\ProductCategory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(Request $request)
    {
        $data['category'] = $request->category ? $request->category : 'semua';
        $data['categories'] = ProductCategory::orderBy('name', 'asc')->get();

        return view('pages.product.index')->with($data);
    }

    public function product_json(Request $request)
    {
        $category = $request->category ? $request->category : 'semua';

        $products = Product::select('products.*', 'product_categories.name as category_name')
            ->join('product_categories', 'product_categories.id', 'products.product_category_id')
            ->where(function ($query) use ($category) {
                if ($category != 'semua')
                    $query->where('products.product_category_id', $category);
            })
            ->orderBy('products.name', 'asc')
            ->get();

        return DataTables::of($products)
            ->addIndexColumn()
            ->editColumn('price', function ($query) {
                return number_format($query->price, 0, '.', ',');
            })
            ->editColumn('thumbnail', function ($query) {
                $img = asset('uploads/products/' . $query->thumbnail);
                return '<img class="mx-auto d-block" src="' . $img . '" width="50" />';
            })
            ->addColumn('action', function ($query) {
                $url_edit = route('produk.edit', $query->id);
                $url_delete = route('produk.destroy', $query->id);
                $input_csrf = csrf_field();
                $input_delete = method_field('delete');

                $show = '<a href="' . $url_edit . '" class="text-info p-0 me-2">
                    <i class="fas fa-edit font-medium-3 mr-0"></i>
                </a>';

                $delete = '<a href="javascript:void(0)" onclick="hapusData(\'' . $query->id . '\')" class="text-danger p-0" data-original-title="" title="">
                        <i class="fas fa-trash font-medium-3 mr-0"></i>
                    </a>';

                $form_delete = '<form id="data-' . $query->id . '" action="' . $url_delete . '" method="post" style="display:none;">
                    ' . $input_csrf . ' ' . $input_delete . '
                </form>';

                return $show . ' ' . $delete . ' ' . $form_delete;
            })
            ->escapeColumns([])
            ->make(true);
    }

    public function create()
    {
        $data['categories'] = ProductCategory::orderBy('name', 'asc')->get();
        return view('pages.product.create')->with($data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:200',
            'product_category_id' => 'required|exists:product_categories,id',
            'price' => 'required|numeric',
            'description' => 'required|max:3000',
            'thumbnail' => 'required|mimes:jpg,bmp,png|max:2048',
        ]);

        if ($validator->fails()) {
            return ResponseFormatter::error($validator->errors(), 'validasi error', 200);
        }

        $image = $request->file('thumbnail');
        $nameImage = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/products');

        $data = [
            'name' => $request->name,
            'product_category_id' => $request->product_category_id,
            'price' => $request->price,
            'description' => $request->description,
            'thumbnail' => $nameImage,
        ];

        try {
            $image->move($destinationPath, $nameImage);
            Product::create($data);

            return ResponseFormatter::success(null, 'Berhasil simpan data produk');
        } catch (Exception $e) {
            return ResponseFormatter::error(null, 'Gagal simpan data produk', 200);
        }
    }

    public function edit($id)
    {
        $data['product'] = Product::findOrFail($id);
        $data['categories'] = ProductCategory::orderBy('name', 'asc')->get();
        return view('pages.product.edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:200',
            'product_category_id' => 'required|exists:product_categories,id',
            'price' => 'required|numeric',
            'description' => 'required|max:3000',
            'thumbnail' => 'nullable|mimes:jpg,bmp,png|max:2048',
        ]);

        if ($validator->fails()) {
            return ResponseFormatter::error($validator->errors(), 'validasi error', 200);
        }

        $product = Product::findOrFail($id);
        $image = $request->file('thumbnail');

        try {
            if ($image) {
                $nameImage = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/products');
                $image->move($destinationPath, $nameImage);

                File::delete($destinationPath . '/' . $product->thumbnail);
                $product->thumbnail = $nameImage;
            }

            $product->name = $request->name;
            $product->product_category_id = $request->product_category_id;
            $product->price = $request->price;
            $product->description = $request->description;
            $product->save();

            return ResponseFormatter::success(null, 'Berhasil perbarui data produk');
        } catch (Exception $e) {
            return ResponseFormatter::error(null, 'Gagal perbarui data produk ' . $e->getMessage(), 200);
        }
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $file = public_path('/uploads/products') . '/' . $product->thumbnail;

        try {
            File::delete($file);
            $product->delete();

            Alert::success('Sukses', 'Berhasil hapus data');
        } catch (Exception $e) {
            Alert::error('Error', 'Gagal hapus data');
        }

        return redirect()->back();
    }
}
