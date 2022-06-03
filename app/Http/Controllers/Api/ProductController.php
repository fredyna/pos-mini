<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
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

        return ResponseFormatter::success($products, 'Data produk');
    }
}
