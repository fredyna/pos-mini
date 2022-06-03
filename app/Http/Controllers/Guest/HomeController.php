<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\BukuTamu;
use App\Models\Product;
use App\Models\Project;
use App\Models\TemplateUndangan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['products'] = Product::orderBy('price', 'asc')->get();
        return view('guest-pages.index')->with($data);
    }
}
