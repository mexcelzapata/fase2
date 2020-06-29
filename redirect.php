<?php 
session_start();
require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);
$username=$_POST['usuario'];
$password=$_POST['contraseña'];
$user= $client->rosse->usuarios->findOne(['usuario'=>$username],['contraseña'=>$password]);
$nombre=$user['usuario'];
$clave=$user['contraseña'];
//aca mismo se esta tomando tanto el nombre como la contraseña y se verifica en la db si existe, si no f (se tiene que ingresar nuevamente)

if ($nombre != '' or $nombre!=NULL){
    if ($clave ==$password){
        //echo $nombre;
        //echo $clave;
        $_SESSION['usuario']=$_POST['usuario'];
        header('location:/');

    }else{
        header('location:/login.php');
        //echo "f";
    }
}else{
    header('location:/login.php');
    //echo "f";
}

