<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規登録</title>
</head>
<body>
<body>
<form action="PHPRegisterNew.php" method="post">
    <label for="category">Title</label><input type="text" name="category"><br>
    <label for="item">URL</label><input type="text" name="item"><br>
    <label for="location">Comment</label><input type="text" name="location"><br>
    <label for="expire">Comment</label><input type="text" name="expire"><br>
    <input type="submit" value="Submit">
    </form>

    <br>
    <div class="view"><?= $view?></div>

</body>
</body>
</html>