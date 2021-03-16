<?php
$id = $_GET['id'];

try{
    $pdo = new PDO('mysql:dbname=storage_db;charset=utf8;host=localhost','root','');
}    catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
}

$sql = 'SELECT * FROM em_stock_table WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt -> bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

$view ='';
if($status==false){
    exit ('Error');
} else {
    $row = $stmt->fetch();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>更新</title>
</head>
<body>
<?PHP include('header.php')?>
<form action="overview.php" method="post">
    <label for="category">種類</label><input type="text" name="category" value='<?= $row['category']?>'><br>
    <label for="item">名前</label><input type="text" name="item" value='<?= $row['item']?>'><br>
    <label for="location">保存場所</label><input type="text" name="location" value='<?= $row['location']?>'><br>
    <label for="expire">賞味期限</label><input type="date" name="expire" value='<?= $row['expire']?>'><br>
    <input type="hidden" name="id" value='<?= $row['id']?>'>
        <div class="buttons">
            <input type="submit" value="Submit">
            <a href="delete.php?id=<?= $row['id']?>"><button type="submit" class="dlt">削除</button></a>
        </div>
    </form>
    
</body>
</html>