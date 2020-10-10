<?php

if(!empty($_POST['name'])||!empty($_POST['desc'])||!empty($_POST['price'])){
    include('connection_database.php');

    $insertBook = $bdd->prepare('INSERT INTO addbook(nameBook,descBook,price,author) VALUES(:nameBook, :descBook, :price, :author)');
    $insertBook->bindParam(':nameBook', $_POST['name']);
    $insertBook->bindParam(':descBook', $_POST['desc']);
    $insertBook->bindParam(':price', $_POST['price']);
    $insertBook->bindParam(':author', $_POST['author']);
    $insertBook->execute();
    header('Location: ../Admin/addBooks.php');
}
else{
    header('Location: ../Admin/addBooks.php');
}
?>