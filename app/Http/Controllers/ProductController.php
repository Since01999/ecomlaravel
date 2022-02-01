<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//importing the model
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
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
            ->join('products', 'cart_tabel.product_id', 'products.id')
            ->select('products.*')
            ->where('cart_tabel.user_id', $user_id)
            ->get();
        return view('cart', compact('cartData'));
    }

    public function removeCart($id)
    {

        $data = Cart::where('product_id', $id)->delete();
        return Redirect::to('/cartlists');
    }
    public function confirmOrders()
    {
        $user_id = Session::get('user')['id'];
        $total = DB::table('cart_tabel')
            ->join('products', 'cart_tabel.product_id', 'products.id')
            ->select('products.*')
            ->where('cart_tabel.user_id', $user_id)
            ->sum('products.price');
        return view('order', compact('total'));
    }
    public function orderConfirmation(Request $request)
    {
        $user_id = Session::get('user')['id'];
        $all_cart = Cart::where('user_id', $user_id)->get();
        foreach ($all_cart as $cartItem) {
            $order = new Order();
            $order->product_id = $cartItem->product_id;
            $order->user_id = $cartItem->user_id;
            $order->address = $request->address;
            $order->email = $request->email;
            $order->amount = $request->price;
            $order->payment_method = $request->payment_method;
            $order->phone = $request->phone;
            $order->payment_status = "pending";
            $order->save();
        }
        Cart::where('user_id', $user_id)->delete();
        return redirect()->back();
    }
    public function orderList(){
        $user_id = Session::get('user')['id'];
        $orders = DB::table('orders')
            ->join('products', 'orders.product_id', 'products.id')
            ->where('orders.user_id', $user_id)
            ->get();
        return view('myorder', compact('orders'));
        
    }
}
