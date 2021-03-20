<?php

include('fx.php');
$pdo = conx_db();

$id = $_POST['id'];
$category = $_POST['category'];
$item = $_POST['item'];
$location = $_POST['location'];
$expire = $_POST['expire'];

// idを取得し、その部分のみ上書きします。
$update = $pdo->prepare('UPDATE em_stock_table SET category=:category, item=:item, location=:location, expire=:expire WHERE id=:id');

$update->bindValue(':category', $category, PDO::PARAM_STR);
$update->bindValue(':item', $item, PDO::PARAM_STR);
$update->bindValue(':location', $location, PDO::PARAM_STR);
$update->bindValue(':expire', $expire, PDO::PARAM_STR);
$update->bindValue(':id', $id, PDO::PARAM_STR);

$status = $update->execute();

if($status==false){
    exit ('Error');
} else{
    header('Location: overview.php');
}



?>