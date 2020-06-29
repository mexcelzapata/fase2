<?php 
require '../../vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);
$cat = $_GET['cat'];
$collection = $client->rosse->productos->find(['categoria'=>$cat]);
$categoria= $client->rosse->categorias->findOne(['_id'=>new MongoDB\BSON\ObjectID($cat)]);
$nombre=$categoria['name'];
$prods= array();
foreach($collection as $entry){
	$prods[$entry['_id']->__toString()]=$entry['name'];
}
echo json_encode($prods);


?>

