<?php
require '../../vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);
$collection = $client->rosse->categorias->find();
$cat= Array();
echo "hola";
echo json_encode($cat);

?>
