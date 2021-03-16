<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>更新</title>
</head>
<body>
<form action="PHPRegisterNew.php" method="post">
    <label for="category">Title</label><input type="text" name="category" value='<?= $row['category']?>'><br>
    <label for="item">URL</label><input type="text" name="item" value='<?= $row['item']?>'><br>
    <label for="location">Comment</label><input type="text" name="location" value='<?= $row['location']?>'><br>
    <label for="expire">Comment</label><input type="text" name="expire" value='<?= $row['expire']?>'><br>
    <input type="submit" value="Submit">
    </form>
</body>
</html>