<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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
}
