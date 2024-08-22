<footer>
    <div id="top-footer">
        <h3>Quick Links</h3>
        <p>
            <ul>
                <?php
                    if($_SESSION["login-status"] == 0){
                        echo "<li><a href='/../BMH Website/index.php'>Home</a></li>";
                    }
                    elseif($_SESSION["login-status"] == 1){
                        echo "<li><a href='/../BMH Website/pages/home.php'>Home</a></li>";
                        echo "<li><a href='/../BMH Website/pages/market.php'>Market</a></li>";
                    }
                ?>
                <li>
                    <a href="/../BMH Website/pages/contact.php">Contact</a>
                </li>
                <li>
                    <a href="/../BMH Website/pages/about.php">About</a>
                </li>
            </ul>
        </p>
    </div>
    
    <div id="bottom-footer">
        <p>&copy; Copyright 2024 BMH Food Delivery</p>
        <p>Developed by Brandon Jr Mark, MCS3</p>
    </div>
</footer>
</body>
</html>