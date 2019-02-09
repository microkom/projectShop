<?php 
session_start();

$id = $_POST['id'];
$price = $_POST['price'];
$cant = $_POST['cant'];

$_SESSION['listaCarrito'] = array(array('id' => $id, 'cant' => $cant));
echo $price*$cant;
?>