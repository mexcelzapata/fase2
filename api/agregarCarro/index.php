<?php 
#carrito solo va a hacer una variable de sesion que se instancia gracias a session_start ade$
session_start();
if ($POST['canridad']<0){
echo json_encode(false);
}
if (!isset($_SESSION['carrito'])){
    $_SESSION['carrito']=Array();
}
if (isset($_SESSION['carrito'][$_POST['producto']])){
    $_SESSION['carrito'][$_POST['producto']]+=$_POST['cantidad'];
}else{
    $_SESSION['carrito'][$_POST['producto']]=$_POST['cantidad'];
}

echo json_encode(true);

?>

