<?php
namespace App\Http\Controllers;
session_start();
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
class CarritoController extends Controller
{
    public function __construct(){
        if(!isset($_SESSION['carrito'])){
            $_SESSION['carrito'] = array();
        }
    }
    public function getCarrito(){
        return view('product.carrito', array('productos' => $_SESSION['carrito']));
    }
    public function addCarrito($id){
        $producto = Product::find($id);
        if(!empty($_SESSION['carrito'])){
            foreach($_SESSION['carrito'] as $key => $valor){
                if($valor->id != $id){
                    array_push($_SESSION['carrito'], $producto);
                    return redirect('product/'. $id);
                } else {
                    return redirect('product/'. $id);
                }
            }
        } else {
            array_push($_SESSION['carrito'], $producto);
            return redirect('product/'. $id);
        }
        
    }
    public function delCarrito($id){
        foreach($_SESSION['carrito'] as $key => $valor){
            if($valor->id == $id){
                unset($_SESSION['carrito'][$key]);
                return redirect('/carrito');
            }
        }
        exit();
        return redirect('/carrito');
    }
}
