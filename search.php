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
    include('header.php');

    $search = $_POST['search'];

    try{
        $pdo = new PDO('mysql:dbname=storage_db;charset=utf8;host=localhost','root','');
    }    catch (PDOException $e) {
        exit('DbConnectError:'.$e->getMessage());
    }

    $search = $_POST['search'];
    $stmt = $pdo->prepare('SELECT * FROM em_stock_table WHERE category LIKE :search OR item LIKE :search OR location LIKE :search OR expire LIKE :search');
    $stmt -> bindValue(':search', $search, PDO::PARAM_STR);
    
    $status = $stmt->execute();

    $view = '';
    if($status==false){
        exit('error!');
    }else{
        while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
            $view .= '<p>';
            $view .= '<a href="update.php?id='.$result["id"].'">';
            $view .= $result['category'].'-'.$result['item'].'-'.$result['expire'].'-'.$result["location"];
            $view .= '</a>';
            $view .= '</p>';
        }
    }
    ?>
    <main>
        <div id="searchresults">
            <div class="view"><?= $view?></div>
            <div id="controls">
                <a href="index.php"><button class="btnr">ホーム画面へ戻る</button></a>
                <div id="searchbar">
                <form action="search.php" method="post" class='inputForm'>
                    <label for="search">別の表現で捜索</label>
                    <input type="text" id="search" name="search"><br>
                    <button type="submit">スタート</button>
                </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>