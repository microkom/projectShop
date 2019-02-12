<?php 
session_start();

$bool = true;
if(!isset($_SESSION['listaCarrito'])){
    $_SESSION['listaCarrito']=array();
} else {
    foreach($_SESSION['listaCarrito'] as $key => $valor){
        if($valor['id'] == $_POST['id']){
            $bool = false;
        }
    }
    if($bool){
//$id = $_POST['id'];
//$price = $_POST['price'];
$cant = $_POST['uds'. $id];
echo $cant;
//$data = array('id' => $id, 'cant' => $cant);

//array_push($_SESSION['listaCarrito'], $data);
//echo $price*$cant;
    }
}
?>