<?php
session_start();
include('../../login_database.php');
include('../connection_database.php');

$user_login = $bdd->prepare('SELECT id_user,username,pass FROM user WHERE username = :username');
$user_login->bindParam(':username', $_POST['LoginUsername']);
$user_login->execute();
$donnees = $user_login->fetch();

if($_POST['LoginUsername'] == $donnees['username'] && password_verify($_POST['LoginPass'],$donnees['pass'])){
    $_SESSION['username'] = $_POST['LoginUsername'];
    header('Location: ../../index.php');
}else{
    header('Location: ../../layouts/login_register.php');
}
?>