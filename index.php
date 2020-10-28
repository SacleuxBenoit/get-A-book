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
            <input type="text" id="">
            <input type="submit" value="Submit">
        </form>

        <ul>
            <a href="./layouts/login_register.php"><li>Login | Register</li></a>
            <a href="#"><li>Orders</a></li>
        </ul>

        <ul>
            <li><a href="#">BD</a></li>
            <li><a href="#">Développement personnel</a></li>
            <li><a href="#">Droit & économie</a></li>
            <li><a href="#">Histoire</a></li>
            <li><a href="#">Jeunesse</a></li>
            <li><a href="#">Littérature</a></li>
            <li><a href="#">Policier, suspense, thrillers</a></li>
            <li><a href="#">Religion et spiritualité</a></li>
            <li><a href="#">SF, fantasy</a></li>
            <li><a href="#">Scolairey</a></li>
            
        </ul>

    </header>

    <h2>lastest additions</h2>
        <?php
            include('./database/connection_database.php');
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