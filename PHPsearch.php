<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>一覧</title>
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

    $search = $_POST['search'];
    $stmt = $pdo->prepare('SELECT $search FROM em_stock_table');
    $status = $stmt->execute();

    $view = '';
    if($status==false){
        exit('error!');
    }else{
        while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
            $view .= '<p>';
            $view .= '<a href="update.php?id='.$result["ID"].'">';
            $view .= $result['category'].'-'.$result['item'].'-'.date('Y-m-d', strtotime($result['expire']).'-'.$result["location"]);
            $view .= '</a>';
            $view .= '</p>';
        }
    }
    ?>
    <div class="view"><?= $view?></div>
</body>
</html>