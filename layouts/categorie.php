<?php
session_start();
include('../login_database.php');
include('../database/connection_database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style_components/header.css">
    <link rel="stylesheet" href="../css/style_categorie.css">
    <title>categorie</title>
</head>
<body>
    <?php
        include('../components/header.php');
    
            $select_categorie = $bdd->prepare('SELECT * FROM books WHERE categorie = :categorie');
            $select_categorie->bindParam(':categorie', $_GET['categorie']);
            $select_categorie->execute();

            while($fetch_categorie = $select_categorie->fetch()){
                 echo '<div class="containerLastBook">' . 
                      '<h3>' .$fetch_categorie['nameBook'] . '</h3>' 
                             .$fetch_categorie['author'] . "</br>"
                             .$fetch_categorie['descBook'] . "</br>" 
                             .$fetch_categorie['price'] . '€' . '<p>' . '<a href="#">' . "Add to cart" .'</a>' . '</p>' . '</div>';
            }
    ?>
</body>
</html>