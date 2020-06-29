<?php
include_once("header.php");
require 'vendor/autoload.php';
session_start();
$total=$_POST['total'];
if ($total=='0' or $total==''){
echo "<h2>COMPRA RECHAZADA</h2>";
}else{
    $uri="mongodb://localhost";
    $client=new MongoDB\Client($uri);
    $ordenes = $client->rosse->ordenes;
    //se inserta una orden en la base de datos
    $ordenes->insertOne(array('total'=>$total,'productos'=>$_SESSION['carrito']));
    echo "<h2>COMPRA REALIZADA CON EXITO</h2>";
    unset($_SESSION['carrito']);
    include_once("footer.php");
}
?>