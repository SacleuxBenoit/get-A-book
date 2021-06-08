<?php
session_start();
include('./login_database.php');
include('./database/connection_database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style_components/header.css">
    <link rel="stylesheet" href="css/style_index.css">
    <title>Document</title>
</head>
<body>
    <?php
        include('./components/header.php');
    ?>
    <h2>lastest additions</h2>
        <?php
            $getLastBooks = $bdd->query('SELECT * FROM books ORDER BY id DESC LIMIT 5');

            while($displayLastBook = $getLastBooks->fetch()){
                 echo '<div class="containerLastBook">' . 
                      '<h3>' .$displayLastBook['nameBook'] . '</h3>' 
                             .$displayLastBook['author'] . "</br>"
                             .$displayLastBook['descBook'] . "</br>" 
                             .$displayLastBook['price'] . '€' . '<p>' . '<a href="#">' . "Add to cart" .'</a>' . '</p>' . '</div>';
            }
        ?>

</body>
</html>