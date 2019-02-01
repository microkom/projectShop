<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;

class CategoryController extends Controller
{
    public function getCategory($category)
    {
        $categoryId = Category::where('name', $category)->first()->id;

        $arrayProductos = Product::where('categoryid', $categoryId)->get();

        return view('category.index', array('arrayProductos' => $arrayProductos, 'category' => $category));
    }

    public function getSubCategory($category, $subCategory)
    {
        return view('category.index', array('category' => $category, 'subCategory' => $subCategory));
    }
}
