<?php
require '../../vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);
$collection = $client->rosse->categorias->find();
$cat= Array();

foreach($collection as $entry){
	$cat[$entry['_id']->__toString()] = $entry['name'];


}
echo "hola";
echo json_encode($cat);
?>

