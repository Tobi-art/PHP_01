<?php
$id = $_GET['id'];

try{
    $pdo = new PDO('mysql:dbname=storage_db;charset=utf8;host=localhost','root','');
}    catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
}

$delete = $pdo->prepare('DELETE FROM em_stock_table WHERE id=:id');
$delete->bindValue(':id', $id, PDO::PARAM_INT);
$status = $delete->execute();

if($status==false){
    exit ('Error');
} else{
// 削除した場所に戻りたいので、deleteページ三つもあります。Location以外は全く同じです。
    header('Location: index.php');
}

?>