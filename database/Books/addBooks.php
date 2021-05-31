<?php
include('../../login_database.php');
include('../connection_database.php');


if(!empty($_POST['name'])||!empty($_POST['desc'])||!empty($_POST['price'])){
    $insertBook = $bdd->prepare('INSERT INTO books(nameBook,descBook,price,author,categorie) VALUES(:nameBook, :descBook, :price, :author, :categorie)');
    $insertBook->bindParam(':nameBook', $_POST['name']);
    $insertBook->bindParam(':descBook', $_POST['desc']);
    $insertBook->bindParam(':price', $_POST['price']);
    $insertBook->bindParam(':author', $_POST['author']);
    $insertBook->bindParam(':categorie', $_POST['categorie']);
    $insertBook->execute();
    header('Location: ../../layouts/Admin/addBooks.php');
}
else{
    header('Location: ../../layouts/Admin/addBooks.php');
}
?>