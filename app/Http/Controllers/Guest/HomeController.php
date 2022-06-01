<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\BukuTamu;
use App\Models\Project;
use App\Models\TemplateUndangan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('guest-pages.index');
    }
}
