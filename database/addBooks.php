<?php
include('connection_database.php');

$insertBook = $bdd->prepare('INSERT INTO addbook(nameBook,descBook,price) VALUES(:nameBook, :descBook, :price)');
$insertBook->bindParam(':nameBook', $_POST['name']);
$insertBook->bindParam(':descBook', $_POST['desc']);
$insertBook->bindParam(':price', $_POST['price']);
$insertBook->execute();
?>