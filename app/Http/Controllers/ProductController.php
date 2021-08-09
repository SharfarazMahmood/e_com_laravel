<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

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

    function cart(){
        $user_id = Session::get('user')['id'];
        $items = DB::table('cart')->join('products', 'cart.product_id', '=', 'products.id' )
                                    ->where("cart.user_id", $user_id)
                                    ->select('products.*', "cart.id as item_id")
                                    ->get();
        
        return view('cart', ['cartItems'=>$items]);
    }

    function addToCart(Request $request){

        if ($request->session()->has('user')) {
            // return "done";
            $cart = new Cart;
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->product_id;
            $cart->ammount = $request->ammount;
            
            $cart->save();

            $data = Product::find($request->product_id);
            return view('productDetails', ['item'=>$data]);
        }
        else{
            return redirect('/login');
        }
    }

    function removeItemFromCart($id){
        Cart::destroy($id);
        return redirect('/cart');
    }

    static function cartItems(){
        $user_id = Session::get('user')['id'];
        return Cart::where('user_id', $user_id)->count();
    }


    static function totalCost(){
        $user_id = Session::get('user')['id'];
        return $items = DB::table('cart')
                            ->join('products', 'cart.product_id', '=', 'products.id' )
                            ->where("cart.user_id", $user_id)
                            ->sum('products.price');
    }
    function orderNow(){
        $user_id = Session::get('user')['id'];
        $totalCost = DB::table('cart')
                        ->join('products', 'cart.product_id', '=', 'products.id' )
                        ->where("cart.user_id", $user_id)
                        ->sum('products.price');
        
        return view('orderNow', ['totalCost'=>$totalCost]);
    }
    function orderPlaced(Request $request){
        $request->validate([
            'address'=>'required',
        ]);
        $user_id = Session::get('user')['id'];

        $fullCart = Cart::where("user_id", $user_id)->get();
        
        foreach ($fullCart as $item) {
            $order = new Order;
            $order->product_id = $item['product_id'];
            $order->user_id = $item['user_id'];;
            $order->status = "Pending";
            $order->payment_method = $request->payment;
            $order->payment_status= "Pending";
            $order->address = $request->address;
            $order->save();
            Cart::where("user_id", $user_id)->delete();
        }

        return redirect('/');
    }

}
