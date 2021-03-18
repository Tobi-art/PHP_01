<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>一覧</title>
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <header>
    <?php include('header.php')?>
</header>
    <div class="m-left25px">
        <div class="buttons">
            <a href="overview.php"><button type="submit" class="btnr">日付順表示</button></a>
        </div>
<?php
    try{
        $pdo = new PDO('mysql:dbname=storage_db;charset=utf8;host=localhost','root','');
    }    catch (PDOException $e) {
        exit('DbConnectError:'.$e->getMessage());
    }

    $stmt = $pdo->prepare('SELECT * FROM em_stock_table ORDER BY category asc');
    $status = $stmt->execute();

    $view = '<tr><th>賞味期限</th><th>種類</th><th>品名</th><th>保存場所</th></tr>';
    if($status==false){
        exit('Error!');
    }else{
        while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
            $view .= '<tr>';
            $view .= '<td>';
            $view .= '<a href="update.php?id='.$result["id"].'">';
            $view .= $result['expire'];
            $view .= '</a> ';
            $view .= '</td>';
            $view .= '<td>';
            $view .= '<a href="update.php?id='.$result["id"].'">';
            $view .= $result['category'];
            $view .= '</a> ';
            $view .= '</td>';
            $view .= '<td>';
            $view .= '<a href="update.php?id='.$result["id"].'">';
            $view .= $result['item'];
            $view .= '</a> ';
            $view .= '</td>';
            $view .= '<td>';
            $view .= '<a href="update.php?id='.$result["id"].'">';
            $view .= $result['location'];
            $view .= '</a> ';
            $view .= '</td>';
            $view .= '<td>';
            $view .= '<a href="delete.php?id='.$result["id"].'">';
            $view .= '<button type="submit" class="dlt">削除</button>';
            $view .= '</a>';
            $view .= '</td>';       
            $view .= '</tr>';
        }
        $view .= '<tr><td><br></td></tr>';
    }
    ?>
        <table>
            <div class="view"><?= $view?></div>
        </table>
    </div>
    <footer></footer>
</body>
</html>