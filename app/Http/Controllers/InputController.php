<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InputController extends Controller
{
     public function get(){
		 return $_GET['q'];
	 }
}