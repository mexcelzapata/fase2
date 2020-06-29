<?php 
require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);
$ordenes = $client->rosse->ordenes->find();
?>
<table class='diseño'>
<tr>
<th> CODIGO </th>
<th> TOTAL</th>
<th> PRODUCTOS</th>
<th> CANTIDAD</th>
<th> </th>
</tr>

<?php 
foreach($ordenes as $entry){
    $total=$entry['total'];
    $id=$entry['_id'];
    $productos=$entry['productos'];
    echo "<tr>";
?>
    <td><?php echo $id;?></td>
    <td><?php echo $total;?></td>

<td>   
<?php
    foreach($productos as $value=>$cantidad){
        $producto=$client->rosse->productos->findOne(['_id'=>new MongoDB\BSON\ObjectID($value)]);
        $nombre=$producto['name'];
        //echo "<td>";
?>
    <li><?php echo $nombre;?>=><?php echo $cantidad;?></li>
        
<?php
}
?>
</td>

<?php
}
?>
</table>
