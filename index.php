<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>概要</title>
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<!-- <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@700&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<header>
    <?PHP include('header.php')?>
</header>
<main>
    <div id='display'>
        <h5 class='view'>賞味期限が迫っている!</h5>
        <table>
            <?PHP include('early5.php')?>
        </table>    
    </div>
    <div id="searchbar">
        <form action="search.php" method="post" class='inputForm'>
            <label for="search">何か探していますか？</label>
            <input type="text" id="search" name="search"><br>
            <button type="submit">検索</button>
        </form>
        <br>
        <div id="byCategory">
            <table id='rest'>
                <?php include('counts.php')?>
            </table>
        </div>
    </div>
</main>
<footer>


    <div id="randomChoice">
</footer>
    </div>
    
</body>
</html>
