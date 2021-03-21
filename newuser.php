<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録</title>
</head>

<body>
    <header>
        <?php include('header.php') ?>
    </header>
    <main>
        <form action="newuser_act.php" method="post" id="new_u" class='inputForm'>
            <label for="user">名前</label><input type="text" name="user"><br>
            <label for="pass1">パスワード</label><input type="password" name="pass1"><br>
            <label for="pass2">パスワード再確認</label><input type="password" name="pass2"><br>
            <div class="buttons">
                <button type="submit" form="new_u">登録する</button>
            </div>
    </main>
    <footer></footer>
</body>

</html>