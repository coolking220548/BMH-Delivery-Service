<nav>
    <ul>
        <?php
            if($_SESSION["login-status"] == 0){
                echo "<li><a href='/../BMH Website/index.php'>Home</a></li>";
            }
            elseif($_SESSION["login-status"] == 1){
                echo "<li><a href='/../BMH Website/pages/home.php'>Home</a></li>";
            }
        ?>
        <li>
            <a href="/../BMH Website/pages/contact.php">Contact</a>
        </li>
        <li>
            <a href="/../BMH Website/pages/about.php">About</a>
        </li>
    </ul>
    <div id="search-icon">
        <i class="fas fa-search"></i>
    </div>
</nav>