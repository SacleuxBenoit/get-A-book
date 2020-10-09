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
            <a href="#"><li>Connexion</li></a>
            <a href="#"><li>Inscription</li></a>
        </ul>

    <p>
    <!-- Display last books in the database here -->
    </p>
    
    </header>
    <?php
        include('./database/connection_database.php');
    ?>
</body>
</html>