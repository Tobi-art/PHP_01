<?php
session_start();

function ident(){
if(!isset($_SESSION['chk_ssid']) || $_SESSION['chk_ssid'] != session_id()){
    header('Location: login.php');
} else {
    session_regenerate_id(true);
    $_SESSION['chk_ssid'] = session_id();
}
}

function conx_db(){
    try{
        $pdo = new PDO('mysql:dbname=storage_db;charset=utf8;host=localhost','root','');
    }    catch (PDOException $e) {
        exit('DbConnectError:'.$e->getMessage());
    }
    return $pdo;
}


?>