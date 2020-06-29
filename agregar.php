<?php 
#carrito solo va a hacer una variable de sesion que se instancia gracias a session_start ademas de trabajar con un tipo de llave-valor
session_start();
if (!isset($_SESSION['carrito'])){
    $_SESSION['carrito']=Array();
}
if (isset($_SESSION['carrito'][$_POST['producto']])){
    $_SESSION['carrito'][$_POST['producto']]+=$_POST['cantidad'];
}else{
    $_SESSION['carrito'][$_POST['producto']]=$_POST['cantidad'];
}

print_r($_SESSION['carrito']);

header("location: /carrito.php");
?>