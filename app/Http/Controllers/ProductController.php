<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//importing the model
use App\Models\Product;
use App\Models\Cart;


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
    public function search(Request $request)
    {
         $searched = $request->input('query');
        $data = Product::
        where('name','like','%'.$request->input('query').'%')
        ->get();

        return view('search',compact('data', 'searched'));
    }
    public function add_to_cart(Request $request){
        if($request->session()->has('user')){
            $cart = new Cart();
             $cart->user_id=$request->session()->get('user')['id'];
             $cart->product_id=$request->product_id;
             $cart->save();
             return redirect('/home'); 
        }else
        {
            return redirect('/');
        }
    }
}
