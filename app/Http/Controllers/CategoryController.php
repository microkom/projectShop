<?php

namespace App\Http\Controllers;

class CategoryController extends Controller
{
    public function getCategory($category)
    {
        return view('category.index', array('category' => $category));
    }

    public function getSubCategory($category, $subCategory)
    {
        return view('category.index', array('category' => $category, 'subcategory' => $subCategory));
    }
}
