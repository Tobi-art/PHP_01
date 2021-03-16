<?php
try{
    $pdo = new PDO('mysql:dbname=storage_db;charset=utf8;host=localhost','root','');
    } catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
    }

    $stmt = $pdo->prepare('SELECT * FROM em_stock_table ORDER BY expire asc LIMIT 5');
    $status = $stmt->execute();

    $view = '';
    if($status==false){
        exit('Error!');
    }else{
        while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
            $view .= '<p>';
            $view .= '<a href="update.php?id='.$result["id"].'">';
            $view .= $result['expire'].'-'.$result['category'].'-'.$result['item'].'-'.$result["location"];
            $view .= '</a> ';
            $view .= '<a href="delete5.php?id='.$result["id"].'">';
            $view .= '<button type="submit" class="dlt">削除</button>';
            $view .= '</a>';
            $view .= '</p>';
        }
    }
    ?>
    <div class="view"><?= $view?></div>