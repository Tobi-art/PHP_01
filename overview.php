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
        <?PHP include('header.php')?>
    </header>
        <div class="m-left25px">
            <div class="buttons">
                <a href="byCategory.php"><button type="submit" class="btnr">種類別表示</button></a>
            </div>
        
    <?php
    try{
        $pdo = new PDO('mysql:dbname=storage_db;charset=utf8;host=localhost','root','');
    }    catch (PDOException $e) {
        exit('DbConnectError:'.$e->getMessage());
    }

    $stmt = $pdo->prepare('SELECT * FROM em_stock_table ORDER BY expire asc');
    $status = $stmt->execute();

    $view = '';
    if($status==false){
        exit('Error!');
    }else{
        while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
            $view .= '<p>';
            $view .= '<a href="update.php?id='.$result["id"].'">';
            $view .= $result['expire'].'　'.$result['category'].'　'.$result['item'].'　'.$result["location"];
            $view .= '</a> ';
            $view .= '<a href="delete.php?id='.$result["id"].'">';
            $view .= '<button type="submit" class="dlt">削除</button>';
            $view .= '</a>';
            $view .= '</p>';
        }
    }
    ?>
        
            <div class="view"><?= $view?></div>
        </div>
    <footer></footer>
</body>
</html>