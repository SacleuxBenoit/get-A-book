<?php
session_start();
include('../../login_database.php');
include('../connection_database.php');

$user_login = $bdd->prepare('SELECT id_user,username,pass FROM user WHERE email = :email');
$user_login->bindParam(':email', $_POST['LoginEmail']);
$user_login->execute();
$donnees = $user_login->fetch();

if($_POST['LoginEmail'] == $donnees['email'] && password_verify($_POST['LoginPass'],$donnees['pass'])){
    $_SESSION['id_user'] = $donnees['id_user'];
    header('Location: ../../index.php');
}else{
    header('Location: ../../layouts/login_register.php');
}
?>