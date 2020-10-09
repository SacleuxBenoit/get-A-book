<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Admin/style_addBooks.css">
    <title>Document</title>
</head>
<body>

    <h1>Add your book : </h1>
    <form action="../database/addBooks.php" method="POST">
        <p>
            <label for="name">Name of the book</label>
            <input type="text" id="name" name="name">
        </p>

        <p>
            <label for="desc">Description of the book</label>
            <input type="text" id="desc" name="desc">
        </p>

        <p>
            <label for="price">Price for the book</label>
            <input type="text" id="price" name="price">
        </p>

        <input type="submit" value="Submit">
    </form>
</body>
</html>