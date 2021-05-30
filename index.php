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
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

    <header>
        <h1>Get-A-Book</h1>
        
        <form action="#" method="POST">
            <input type="text" id="InputSearchBar" placeholder="Search...">
            <input type="submit" value="Submit">
        </form>

        <ul>
            <a href="./layouts/login_register.php"><li>Login | Register</li></a>
            <a href="#"><li>Orders</a></li>
        </ul>

        <ul class="navTop">
            <li class="bd"><a href="#">BD</a></li>
            <li class="devPerso"><a href="#">Développement personnel</a></li>
            <li class="droitEconomie"><a href="#">Droit & économie</a></li>
            <li class="histoire"><a href="#">Histoire</a></li>
            <li class=jeunesse><a href="#">Jeunesse</a></li>
            <li class="Litterature"><a href="#">Littérature</a></li>
            <li class="policierSuspensThrillers"><a href="#">Policier, suspense, thrillers</a></li>
            <li class="religion"><a href="#">Religion et spiritualité</a></li>
            <li class="sfFantasy"><a href="#">SF, fantasy</a></li>
            <li class="scolaire"><a href="#">Scolaire</a></li>
            
        </ul>

    </header>

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