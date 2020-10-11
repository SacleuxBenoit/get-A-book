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
        </ul>

    </header>

    <h2>lastest additions</h2>
        <?php
            include('./database/connection_database.php');
            $getLastBooks = $bdd->query('SELECT * FROM addbook ORDER BY id DESC LIMIT 5');

            while($displayLastBook = $getLastBooks->fetch()){
                 echo '<div class="containerLastBook">' . 
                      '<h3>' .$displayLastBook['nameBook'] . '</h3>' 
                             .$displayLastBook['author'] . "</br>"
                             .$displayLastBook['descBook'] . "</br>" 
                             .$displayLastBook['price'] . '€' . '</div>' ;
            }
        ?>



</body>
</html>