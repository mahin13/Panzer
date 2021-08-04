<?php

namespace App\Http\Controllers\Frontend;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend;

use App\Models\Product;



class ProductsController extends Controller
{
    
         public function products()
    {
        $products = Product::orderBy('id', 'desc')->simplePaginate(3);
        return view('pages.product.index')->with('products',$products);
    }
         public function show($slug)
    {
       $product = Product::where('slug',$slug)->first();
       if(!is_null($product)){
        return view('pages.product.show',compact('product'));
       }else{
        session()->flash('errors','Sorry!There is  no product by this URL..');
        return redirect()->route('products');
       }
    }

}