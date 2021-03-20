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
            <!-- カテゴリー別表示したいことがあるかもしれないので、こちらのボタンで表示を切り替えることができます。 -->
            <div class="buttons">
                <a href="byCategory.php"><button type="submit" class="btnr">種類別表示</button></a>
            </div>
        
    <?php
  include('fx.php');
  ident();
  $pdo = conx_db();

    // 賞味期限でソートし、在庫の一覧を作ります。
    $stmt = $pdo->prepare('SELECT * FROM em_stock_table ORDER BY expire asc');
    $status = $stmt->execute();

    // テーブルの方が見やすいので、全てテーブルに入れておきます。
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
    // テーブルにpaddingを付ける方法が見つからなかったので、一番下に空の行を入れました…
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