<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getShow($id){

        $producto = Product::where('id', $id)->first();
        return view('product.index',  array('product' => $producto));
    }

}
