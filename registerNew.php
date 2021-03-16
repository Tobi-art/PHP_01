<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規登録</title>
</head>
<body>
<form action="PHPregisterNew.php" method="post">
    <label for="category">種類</label><input type="text" name="category"><br>
    <label for="item">名前</label><input type="text" name="item"><br>
    <label for="location">保存場所</label><input type="text" name="location"><br>
    <label for="expire">賞味期限</label><input type="date" name="expire"><br>
    <input type="submit" value="Submit">
    </form>
</body>
</html>