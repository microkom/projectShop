<?php

namespace App\Http\Controllers;

class CategoryController extends Controller
{
    public function getCategory($id)
    {
        return view('category.index', array('id' => $id));
    }
}
