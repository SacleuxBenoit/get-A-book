<?php
include('../../login_database.php');
include('../connection_database.php');

$verifyUsernameDatabase = $bdd->prepare('SELECT username FROM user WHERE username = :username');
$verifyUsernameDatabase->bindParam(':username', $_POST['RegisterUsername']);
$verifyUsernameDatabase->execute();

$verifyUsername = $verifyUsernameDatabase->fetch();

if($verifyUsername['username'] == $_POST['RegisterUsername'] || empty($_POST['RegisterUsername']) || empty($_POST['RegisterPass'])){
    header('Location: ../../layouts/login_register.php');
}
else{
    $pass_hash = password_hash($_POST['RegisterPass'], PASSWORD_DEFAULT);
    $user_info = $bdd->prepare('INSERT INTO user(username,pass) VALUES(:username, :pass)');
    $user_info->bindParam(':username', $_POST['RegisterUsername']);
    $user_info->bindParam(':pass', $pass_hash);
    $user_info->execute();

    $_SESSION['username'] = $_POST['RegisterUsername'];
    header('Location: ../../index.php');
}
?>
