<?php include_once('header.php')?>
<?php 
require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);
$collection = $client->rosse->categorias->find();
?>
<h1 class='primery'> Categorias </h1>
<?php
foreach ($collection as $entry){
?>
        <h3 class= 'bordes colorr'><a class='none' href="cat.php?key=<?php echo $entry['_id']?>"><?php echo $entry['name']?></a></h3>
<?php
}
?>
<?php include_once('footer.php')?>