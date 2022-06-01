<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProductCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $data['categories'] = ProductCategory::orderBy('name', 'asc')->get();
        return view('pages.product-category.index')->with($data);
    }

    public function create()
    {
        return view('pages.product-category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:10'
        ], $this->messages());

        $data = $request->all();
        ProductCategory::create($data);

        Alert::success('Sukses', 'Berhasil simpan data');
        return redirect()->route('kategori-produk.index');
    }

    public function edit($id)
    {
        $data['category'] = ProductCategory::findOrFail($id);
        return view('pages.product-category.edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:10'
        ], $this->messages());

        $category = ProductCategory::findOrFail($id);
        $category->name = $request->name;
        $category->save();

        Alert::success('Sukses', 'Berhasil perbarui data');
        return redirect()->route('kategori-produk.index');
    }

    public function destroy($id)
    {
        $category = ProductCategory::findOrFail($id);
        $category->delete();

        Alert::success('Sukses', 'Berhasil hapus data');
        return redirect()->route('kategori-produk.index');
    }

    public function messages()
    {
        return [
            'required' => ':attribute harus diisi',
            'max'   => 'panjang :attribute tidak boleh lebih dari :max karakter'
        ];
    }
}
