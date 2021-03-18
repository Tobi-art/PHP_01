<?php
try{
    $pdo = new PDO('mysql:dbname=storage_db;charset=utf8;host=localhost','root','');
    } catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
    }

    // 一番賞味期限が短い品物五つ表示します。
    $stmt = $pdo->prepare('SELECT * FROM em_stock_table ORDER BY expire asc LIMIT 5');
    $status = $stmt->execute();

    // テーブルの方が見やすいので、全てテーブルに入れておきます。
    $view = '<tr><th>賞味期限</th><th>品名</th></tr>';
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
            $view .= $result['item'];
            $view .= '</a> ';
            $view .= '</td>';
            $view .= '<td>';
            $view .= '<a href="delete5.php?id='.$result["id"].'">';
            $view .= '<button type="submit" class="dlt">削除</button>';
            $view .= '</a>';
            $view .= '</td>';       
            $view .= '</tr>';
        }
        // テーブルにpaddingを付ける方法が見つからなかったので、一番下に空の行を入れました…
        $view .= '<tr><td><br></td></tr>';
    }
    ?>
    <div class="view"><?= $view?></div>