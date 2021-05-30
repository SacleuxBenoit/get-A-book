<?php
include('connection_database.php');

$verifyEmailDatabase = $bdd->prepare('SELECT email FROM user WHERE email = :email');
$verifyEmailDatabase->bindParam(':email', $_POST['RegisterEmail']);
$verifyEmailDatabase->execute();

$verifyEmail = $verifyEmailDatabase->fetch();

if($verifyEmail['email'] == $_POST['RegisterEmail'] || empty($_POST['RegisterEmail']) || empty($_POST['RegisterPass'])){
    header('Location: ../layouts/login_register.php');
}
else{
    $pass_hash = password_hash($_POST['RegisterPass'], PASSWORD_DEFAULT);
    $user_info = $bdd->prepare('INSERT INTO user(email,pass) VALUES(:email, :pass)');
    $user_info->bindParam(':email', $_POST['RegisterEmail']);
    $user_info->bindParam(':pass', $pass_hash);
    $user_info->execute();
}
?>
