<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//importing the model
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::all();
        return view('product', compact('data'));
    }
    public function detail($id)
    {
        $detail = Product::findOrFail($id);
        return view('detail',compact('detail'));
    }
}
