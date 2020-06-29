<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="stylee.css" >
<link rel="stylesheet" href="style.css" >


</head>
<body>

<nav class="header">
    <h1 class='primery'>GialleRose</h1>
    <a href= '/'>principal</a>
    <a href='informacion.php'>información</a>
    <a href='/carrito.php'>carrito</a>
    <?php 
    if (isset($_SESSION['usuario'])){
        echo "<a href='ventas.php'>Ventas</a>";

        echo "<h1> bienvenid@ ".$_SESSION['usuario']. "</h1>";
    }else{
        echo "<a href='login.php'>Login</a>";
    }
    ?>
    

</nav>