<?php 
require 'vendor/autoload.php';
session_start();
$name=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
if ($name=='NULL' or $name=='' and $contraseña=='NULL' or $contraseña==''){
    echo "no hay nada";
    header('location:/login.php');
}else{
    $uri="mongodb://localhost";
    $client=new MongoDB\Client($uri);
    $usuario = $client->rosse->usuarios;
    $usuario->insertOne(array('usuario'=>$name,'contraseña'=>$contraseña));
    //print_r($_SESSION['usuario']);
    $_SESSION['usuario']=$_POST['usuario'];
    header('location:/');
}
?>

