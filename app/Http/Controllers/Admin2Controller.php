<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class Admin2Controller extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.index', compact('productts'));
    }
}
