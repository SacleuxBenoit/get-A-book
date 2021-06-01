<header>
        <h1>Get-A-Book</h1>
        
        <form action="#" method="POST">
            <input type="text" id="InputSearchBar" placeholder="Search...">
            <input type="submit" value="Submit">
        </form>

        <ul>
            <a href="./layouts/login_register.php"><li>Login | Register</li></a>
            <a href="#"><li>Orders</a></li>
            <a href="./layouts/Admin/addBooks.php"><li>Add books</a></li>
        </ul>

        <ul class="navTop">
            <?php
                $select_categories = $bdd->query('SELECT DISTINCT categorie FROM books');
                $select_categories->execute();
                
                while($fetch_categories = $select_categories->fetch()){
                ?>
                    <li><a href="http://localhost:8888/test/get-A-book/layouts/categorie.php"><?php echo $fetch_categories['categorie']?></a></li>
                <?php
                }
            ?>        
        </ul>

    </header>