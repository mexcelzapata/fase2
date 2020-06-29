<?php include_once('header.php')?>
<?php 
require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);

if (isset($_GET['remover'])){
    $r=$_GET['remover'];
    unset($_SESSION['carrito'][$r]);
}



?>

<table class='diseño'>
<tr>
<th> Producto</th>
<th> Cantidad</th>
<th> Precio</th>
<th> Total</th>
<th> </th>

</tr>
<?php
$total=0;
//tr-> fila td->celdas de la fila
foreach($_SESSION['carrito'] as $prod=>$cantidad){
    echo "<tr>";
        $producto = $client->rosse->productos->findOne(['_id'=>new MongoDB\BSON\ObjectID($prod)]);
?>
        <td><?php echo $producto['name'];?></td>
        <td><?php echo $cantidad;?></td>
        <td>$<?php echo $producto['precio'];?></td>
        <td>$<?php echo $producto['precio']*$cantidad;?></td>
        <td>
            <a href="carrito.php?remover=<?php echo $prod;?>"> X </a>
        </td>




<?php
$total+=$producto['precio']*$cantidad;
    echo "</tr>";
}
?>
</table>
<form action="pagar.php" method="POST">
<input type="hidden" name="total" value="<?php echo $total;?>"/>
<center><b>Total a pagar: $<?php echo $total;?> <br><input type="submit"value="Pagar" /></b></center>
</form>



<?php include_once("footer.php");?>