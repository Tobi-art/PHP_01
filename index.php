<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>概要</title>
</head>
<body>
<header>
</header>
    <div id="mostRecent">
        <?PHP include('header.php')?>
        <?PHP include('early5.php')?>
    </div>
    <div id="searchbar">
        <form action="search.php" method="post"></form>
        <label for="search">捜索</label><input type="text" id="search" name="search">
    </div>
    <div id="byCategory">
        缶詰
        カップ麺
        カレー
        米
        パスタ。。。
    </div>

    <div id="randomChoice">
    </div>
    
</body>
</html>