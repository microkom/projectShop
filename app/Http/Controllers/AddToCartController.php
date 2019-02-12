<?php

namespace App\Http\Controllers;

session_start();

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class AddToCartController extends Controller {

    public function __construct() {
        if (!isset($_SESSION['producto'])) {
            $_SESSION['producto'] = array();
            $_SESSION['cantidad'] = 0;
        }

        if (!isset($_SESSION['carrito'])) {
            $_SESSION['carrito'] = array();
        }
    }

    public function getCarrito() {
        $this->eachProductCart();
        return view('product.carrito', array('productos' => $_SESSION['carrito']));
    }

    public function addCarrito($id) {
        $producto = Product::find($id);
        if ($producto == null)
            return 1;

        if (!empty($_SESSION['carrito'])) {
            foreach ($_SESSION['carrito'] as $key => $valor) {
                if ($valor->id == $id) {
                    $_SESSION['carrito'][$key]->cant++;
                    return 0;
                }
            }
            $producto->cant = 1;
            array_push($_SESSION['carrito'], $producto);
            return 0;
        } else {
            $producto->cant = 1;
            array_push($_SESSION['carrito'], $producto);
            return 0;
        }
    }

    /**
     * Resta una unidad del producto seleccionado
     * @param type $id Id del producto
     * @return int
     */
    public function unoMenosCarrito($id) {
        /**
         * Comprobación en base de datos de existencia
         */
        $producto = Product::find($id);
        if ($producto == null)
            return 1;

        if (!empty($_SESSION['carrito'])) {
            
            /**
             * Recorre todos el carrito comprobando si el producto ya está agregado
             */
            foreach ($_SESSION['carrito'] as $key => $valor) {
                if ($valor->id == $id) {
                    
                    /**
                     * Resta una unidad al producto seleccionado
                     */
                    $_SESSION['carrito'][$key]->cant--;
                    if ($_SESSION['carrito'][$key]->cant == 0) {
                        return 2;
                    }
                    return 0;
                }
            }
            return 1;
        } else {
            return 1;
        }
    }

    /**
     * Borra el producto sin importar la cantidad
     * @param type $id Id del producto
     * @return int Resultado de la operación
     */
    public function delCarrito($id) {
        foreach ($_SESSION['carrito'] as $key => $valor) {
            if ($valor->id == $id) {
                
                /**
                 * Elimiina del array un producto
                 */
                unset($_SESSION['carrito'][$key]);
                return 0;
            }
        }
        return 1;
    }

    /**
     * Calcula el total de los items en el carrito
     * @return float
     */
    public function totalItemsCart() {
        $total = 0;
        foreach ($_SESSION['carrito'] as $key => $valor) {
            $total += $valor->cant;
        }
        return $total;
    }

    /**
     * Calcula el precio de cada producto en relación con la cantidad dentro 
     * del carrito
     */
    public function eachProductCart() {
        $total = 0;
        foreach ($_SESSION['carrito'] as $key => $valor) {
            $total = ($valor->cant * $valor->price);
            
            /**
             * Guarda en el array el calculo del valor del producto 
             */
            $_SESSION['carrito'][$key]->totalProducto = $total;
        }
    }

}
