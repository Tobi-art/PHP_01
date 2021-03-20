<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>概要</title>
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <header>
        <!-- headerを読み込みます。 -->
        <?PHP
        include('fx.php');
        ident();
        include('header.php') ?>
    </header>
    <main>
        <!-- 一番賞味期限の短い品物五つを表示します。 -->
        <div id='display'>
            <h5 class='view'>賞味期限が迫っている!</h5>
            <table>
                <?PHP include('early5.php') ?>
            </table>
        </div>
        <!-- 検索機能はどうしても作ってみたかったです。もう少し時間がありましたら、LIKEと％を用いて、商品名の一部を入力しても表示される様にしたいと思います。 -->
        <div id="searchbar">
            <form action="search.php" method="post" class='inputForm'>
                <label for="search">何か探していますか？</label>
                <input type="text" id="search" name="search"><br>
                <button type="submit">検索</button>
            </form>
            <br>
            <!-- カテゴリー別の残存を表示します。 -->
            <div id="byCategory">
                <table id='rest'>
                    <?php include('counts.php') ?>
                </table>
            </div>
        </div>
    </main>
    <footer></footer>
</body>

</html>