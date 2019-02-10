<?php

namespace App\Http\Controllers;
session_start();
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddToCartController extends Controller {

    public function addToSession() {
        $data = json_decode(file_get_contents('php://input'));

        $_SESSION['listaCarrito'] = array(
            array(
                $data->ob[0]->id,
                $data->ob[0]->cant,
                $data->ob[0]->price
            )
        );
        $_SESSION['listas'][] = $_SESSION['listaCarrito'];
        
        //echo floatval($data->ob[0]->price) * $data->ob[0]->cant;

        /* Lo mismo pero sin JSON */

        /*
          session_start();
          $id = $_POST['id'];
          $price = $_POST['price'];
          $cant = $_POST['cant'];
          $_SESSION['listaCarrito'] = array(array('id' => $id, 'cant' => $cant));
          echo $price*$cant;
         */
    }
     public function  viewSession() {
        //unset($_SESSION['listas']);
        return var_dump($_SESSION['listas']);
    }
   

}
