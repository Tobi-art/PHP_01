<?php

if(
    !isset($_POST['category'])||$_POST['category']==''||
    !isset($_POST['item'])||$_POST['item']==''||
    !isset($_POST['location'])||$_POST['location']==''||
    !isset($_POST['expire'])||$_POST['expire']==''
){
    exit('Not enough data');
    // 全ての項目を入力して初めて実行されます。
}

// フォームから受け取った値を変数に入れます。
$category=$_POST['category'];
$item=$_POST['item'];
$location=$_POST['location'];
$expire=$_POST['expire'];

// dbを繋げます。
try{
    $pdo = new PDO('mysql:dbname=storage_db;charset=utf8;host=localhost','root','');
}    catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
}

// 書き込みのSQLコマンドを用意します。
$sql = 'INSERT INTO em_stock_table(id,category,item,location,expire,indate) VALUES(null, :a1, :a2, :a3, :a4, sysdate())';
$stmt = $pdo->prepare($sql);

// 先ほど用意したコマンドにフォームから受け取った値を渡し、実行します。
$stmt->bindValue(':a1', $category, PDO::PARAM_STR);
$stmt->bindValue(':a2', $item, PDO::PARAM_STR);
$stmt->bindValue(':a3', $location, PDO::PARAM_STR);
$stmt->bindValue(':a4', $expire, PDO::PARAM_STR);
$status = $stmt->execute();

if (status==false){
    // もしも実行できなかったらエラーメッセージが表示されます。
    $error = $stmt->errorInfo();
    exit('Query Error:'.$error[2]);
} else {
    // 問題なく実行出来たなら、登録フォームに戻ります。
    header('Location: registerNew.php');
    exit;
}
?>