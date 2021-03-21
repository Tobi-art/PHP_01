<?php


$user = $_POST['user'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];


if ($pass1 != $pass2) {
    exit('パスワードは一致しません。<a href="newuser.php"><button>戻る</button><a>');
} elseif ($user == "") {
    exit('ユーザー名を入力して下さい。<a href="newuser.php"><button>戻る</button><a>');
};

try {
    $pdo = new PDO('mysql:dbname=storage_db;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
    exit('DbConnectError:' . $e->getMessage());
}

$sql = 'INSERT INTO user_id (id, user_nm, user_id, user_pw, life_flag, indate) VALUES (null, :user, null, :pass, "0", sysdate())';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':user', $user);
$stmt->bindValue(':pass', $pass1);
$res = $stmt->execute();

if ($res != true) {
    header('Location: newuser.php');
} else {
    header('Location: newlogin.php');
}
