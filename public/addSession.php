<?php 
session_start();

$data = json_decode(file_get_contents('php://input'));

$_SESSION['listaCarrito'] = array(
    array(
        $data->ob[0]->id, 
        $data->ob[0]->cant, 
        $data->ob[0]->price
    )
);

//echo floatval($data->ob[0]->price) * $data->ob[0]->cant;


/*

session_start();
$id = $_POST['id'];
$price = $_POST['price'];
$cant = $_POST['cant'];
$_SESSION['listaCarrito'] = array(array('id' => $id, 'cant' => $cant));
echo $price*$cant;
*/
?>