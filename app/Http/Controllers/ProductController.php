<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//importing the model
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Expr\FuncCall;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

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
        return view('detail', compact('detail'));
    }
    public function search(Request $request)
    {
        $searched = $request->input('query');
        $data = Product::where('name', 'like', '%' . $request->input('query') . '%')
            ->get();

        return view('search', compact('data', 'searched'));
    }
    public function add_to_cart(Request $request)
    {
        if ($request->session()->has('user')) {
            $cart = new Cart();
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect('/home');
        } else {
            return redirect('/');
        }
    }
    public function cartitem()
    {
        $user_id = Session::get('user')['id'];
        return Cart::where('user_id', $user_id)->count();
    }
    public function cartList()
    {
        $user_id = Session::get('user')['id'];
       $cartData = DB::table('cart_tabel')
        ->join('products','cart_tabel.product_id','products.id' )
        ->select('products.*')
        ->where('cart_tabel.user_id',$user_id)
        ->get();
        return view('cart',compact('cartData'));
    }

    public function removeCart($id){

        $data = Cart::where('product_id',$id)->delete();
        return Redirect::to('/cartlists');

    }
}
