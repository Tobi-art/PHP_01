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

    include('fx.php');
    $pdo = conx_db();

    $search = $_POST['search'];
    // どのキーワードでも使えるようにしたかったので、category,又はitem,又はlocation,又はexpireに入っているもの全て表示します。
    $stmt = $pdo->prepare('SELECT * FROM em_stock_table WHERE category LIKE :search OR item LIKE :search OR location LIKE :search OR expire LIKE :search');
    // ％を付けているので、キーワードの一部だけでも反応します。
    $stmt -> bindValue(':search', '%'.$search.'%', PDO::PARAM_STR);
    
    $status = $stmt->execute();

    // 見やすくする為テーブルに入れます。
    $view = '<tr><th>賞味期限</th><th>種類</th><th>品名</th><th>保存場所</th></tr>';
    if($status==false){
        exit('error!');
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
        $view .= '<tr><td><br></td><td></td></tr>';
    }
    ?>
    <main>
        <div id="searchresults">

        <?php
        if($view === '<tr><th>賞味期限</th><th>種類</th><th>品名</th><th>保存場所</th></tr><tr><td><br></td><td></td></tr>'){
            // table headerと最後の空欄は事前用意しているので、何も見つからなくても文字列に入ってきます。その場合はthを表示しない。
            $view = "何も見つかりませんでした";
        }   else {
            $view = $view;
        }
        ?>
            <table>
                <div class="view"><?= $view?></div>
            </table>
            <div id="controls">
                <div id="searchbar">
                <form action="search.php" method="post" class='inputForm'>
                    <label for="search">別の物を検索</label>
                    <input type="text" id="search" name="search"><br>
                    <button type="submit">検索</button>
                </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>