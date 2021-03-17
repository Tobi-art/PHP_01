<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>概要</title>
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<header>
    <?PHP include('header.php')?>
</header>
<main>
    <div id='display'>
        <h4 class='view'>賞味期限が迫っている:</h4>
        <?PHP include('early5.php')?>
    </div>
    <div id="searchbar">
        <form action="search.php" method="post" class='inputForm'>
            <label for="search">捜索</label>
            <input type="text" id="search" name="search"><br>
            <button type="submit">スタート</button>
        </form>
        <br>
        <div id="byCategory">
            <h4 class='counts'>残存:</h4>
            <?php include('counts.php')?>
        </div>
    </div>
</main>
<footer>


    <div id="randomChoice">
</footer>
    </div>
    
</body>
</html>