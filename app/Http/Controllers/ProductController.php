<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::orderby('id','DESC')->get();
        return view('products',compact('products'));
    }

    public function addProducts(Request $request) {
        $products = new Product();
        $products->product_name = $request->product_name;
        $products->product_price = $request->product_price;
        $products->product_size = $request->product_size;
        $products->product_color = $request->product_color;
        $products->save();
        return response()->json($products);

    }
}
