<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
</head>

<body>
    <?php
    include('header.php');
    ?>
    <main>
        <form action="login_act.php" method="post">
            <label for="user">User:</label><input type="text" name="user"><br>
            <label for="pwd">Password:</label><input type="text" name="pwd"><br>
            <button type="submit">Login</button>
        </form>
    </main>
    <footer></footer>
</body>

</html>