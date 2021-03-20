<?php
session_start();
$user = $_POST['user'];
$pwd = $_POST['pwd'];

try {
    $pdo = new PDO('mysql:dbname=storage_db;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
    exit('DbConnectError:' . $e->getMessage());
}

$sql = 'SELECT * FROM user_id WHERE user_nm=:user AND user_pw=:pwd';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':user', $user);
$stmt->bindValue(':pwd', $pwd);
$res = $stmt->execute();

if ($res == false) {
    exit('Something went wrong. Please try again');
}

$val = $stmt->fetch();

if ($val != '') {
    $_SESSION['chk_ssid'] = session_id();
    $_SESSION['kanri_flag'] = $val['kanri_flag'];
    $_SESSION['name'] = $val['name'];
    header('Location: index.php');
} else {
    header('Location: login.php');
}
