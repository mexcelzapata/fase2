<?php 
require '../../vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);
$prod = $_GET['prod'];
$producto = $client->rosse->productos->findOne(['_id'=>new MongoDB\BSON\ObjectID($prod)]);
$nombre = $producto['name'];
$desc = $producto['desc'];
$imagen=$producto['image'];
$precio= $producto['precio'];
$arr= ["nombre"=>$nombre, "id"=>$prod, "desc"=>$desc, "precio"=>$precio, "imagen"=>$imagen];

echo json_encode($arr);
?>

