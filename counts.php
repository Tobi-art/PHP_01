<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>捜索</title>
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<?php
    try{
        $pdo = new PDO('mysql:dbname=storage_db;charset=utf8;host=localhost','root','');
    }    catch (PDOException $e) {
        exit('DbConnectError:'.$e->getMessage());
    }

    $stmt = $pdo->prepare('SELECT category, count(category) AS CountOf FROM em_stock_table GROUP BY category');
    $status = $stmt->execute();

    $count = '';
    if($status==false){
        exit('Error!');
    }else{
        while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
            $count .= '<p class="counts"> ';
            $count .= $result['category'];
            $count .= ' : ';
            $count .= $result['CountOf'];
            $count .= '</p>';
        }
    }




    ?>
<div class="counts"><?= $count?></div>
</body>
</html>