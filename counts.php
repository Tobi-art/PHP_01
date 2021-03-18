<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>捜索</title>
    <link rel="stylesheet" href="CSS/reset.css">
    
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<?php
    try{
        $pdo = new PDO('mysql:dbname=storage_db;charset=utf8;host=localhost','root','');
    }    catch (PDOException $e) {
        exit('DbConnectError:'.$e->getMessage());
    }

    // 一つのカテゴリーに何個が入っているか数えます。
    $stmt = $pdo->prepare('SELECT category, count(category) AS CountOf FROM em_stock_table GROUP BY category');
    $status = $stmt->execute();

    // テーブルの方が見やすいので、全てテーブルに入れておきます。
    $count = '<tr><th colspan="2">残存</th></tr>';
    if($status==false){
        exit('Error!');
    }else{
        while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
            $count .= '<tr>';
            $count .= '<td>';
            $count .= $result['category'];
            $count .= '</a> ';
            $count .= '</td>';
            $count .= '<td>';
            $count .= $result['CountOf'];
            $count .= '</a> ';
            $count .= '</td>';
            $count .= '</tr>';
        }
    // テーブルにpaddingを付ける方法が見つからなかったので、一番下に空の行を入れました…
        $count .= '<tr><td><br></td><td></td></tr>';
    }

    ?>
<div class="counts"><?= $count?></div>
</body>
</html>