<?php
$id = $_GET['id'];

try{
    $pdo = new PDO('mysql:dbname=storage_db;charset=utf8;host=localhost','root','');
}    catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
}

// var_dump($pdo);

$delete = $pdo->prepare('DELETE FROM em_stock_table WHERE id=:id');
$delete->bindValue(':id', $id, PDO::PARAM_INT);
$status = $delete->execute();

if($status==false){
    exit ('Error');
} else{
    header('Location: overview.php');
}

?>