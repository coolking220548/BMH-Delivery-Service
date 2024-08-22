<?php

session_start();

$_SESSION["login-status"] = 0;

?>

<?php include "mod/header.php"?>
<?php include "mod/navigation.php"?>
<div id="banner">
    <h2>Delivery at your doorstep</h2>
</div>
<?php include "mod/home-body.php"?>
<?php include "mod/footer.php"?>