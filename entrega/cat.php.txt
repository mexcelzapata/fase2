<?php include_once('header.php')?>
<?php 
require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);
$cat = $_GET['key'];
$collection = $client->rosse->productos->find(['categoria'=>$cat]);
$categoria= $client->rosse->categorias->findOne(['_id'=>new MongoDB\BSON\ObjectID($cat)]);
$nombre=$categoria['name'];
?>

<h1 class='primery'><?php echo $nombre?></h1>

<?php
foreach ($collection as $entry){
?>
        <img class="image" src="<?php echo $entry['image'];?>">
        <h2><a class='none' style="color: brown;" href="prod.php?key=<?php echo $entry['_id'];?>"><?php echo $entry['name']?></a></h2>
        <p> <?php echo $entry['desc'];?> </p>
        <h4 class='precio'>CLP$ <?php echo $entry['precio']?></h4>
<?php
}
?>


<?php include_once('footer.php')?>
