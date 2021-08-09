<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Product;
use App\Models\Cart;

class ProductController extends Controller
{
    //
    function allProducts(){
        $data =  Product::all();
        return view('product', ['products'=>$data]);
    }

    function productDetails($id){
        $data = Product::find($id);
        return view('productDetails', ['item'=>$data]);
    }

    function search(Request $request){
        $searchedFor = $request->input('searchQuery');
        $data = Product::where('name','like', '%'.$request->input('searchQuery').'%')->get();
        return view('search', ['products'=>$data, 'searchedFor'=>$searchedFor]);
    }

    function addToCart(Request $request){

        if ($request->session()->has('user')) {
            // return "done";
            $cart = new Cart;
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->product_id;
            $cart->ammount = $request->ammount;
            
            $cart->save();
            return "added to cart";
        }
        else{
            return redirect('/login');
        }
    }

    static function cartItems(){
        $user_id = Session::get('user')['id'];
        return Cart::where('user_id', $user_id)->count();
    }
}
