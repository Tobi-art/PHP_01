<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規登録</title>
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <header>
<?PHP include('header.php')?>
</header>
<main>
<form action="PHPregisterNew.php" method="post" id="registerNew" class='inputForm'>
    <label for="category">種類</label><input type="text" name="category"><br>
    <label for="item">品名</label><input type="text" name="item"><br>
    <label for="location">保存場所</label><input type="text" name="location"><br>
    <label for="expire">賞味期限</label><input type="date" name="expire"><br>
    
    <div class="buttons">
        <button type="submit" form="registerNew">登録する</button>
    </div>
    </main>
    <footer></footer>
</form>   
</body>
</html>