<?php include_once('header.php')?>
<?php 
require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);
$prod = $_GET['key'];
$producto = $client->rosse->productos->findOne(['_id'=>new MongoDB\BSON\ObjectID($prod)]);
$nombre = $producto['name'];
$desc = $producto['desc'];
$imagen=$producto['image'];
$precio= $producto['precio'];
?>
	<h1 class='producto'><?php echo $nombre;?></h1>
    <img class="image" src="<?php echo $imagen;?>">
    <p><?php echo $desc;?></p>
    <h4 class='precio'>CLP $ <?php echo $precio;?></h4>

<form action="agregar.php" method="POST">
<input type="hidden" name="producto" value="<?php echo $prod;?>"/>
cantidad:
<input type="number" name="cantidad" value="1" min=1 />
<input type="submit" value="Agregar al carrito"/>
</form>
    
<?php include_once("footer.php"); ?>

