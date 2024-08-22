<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="stylesheet" href="/../BMH Website/style.css">
    <?php

        if($_SESSION["login-status"] == 0){
            echo "<title>BHM Food Delivery</title>";
        }
        elseif($_SESSION["login-status"] == 1){
            echo "<title>Home | BHM Food Delivery</title>";
        }
    ?>
</head>
<body>
    <div id="top-header">
        <div id="logo">
            <?php
            if($_SESSION["login-status"] == 0){
                echo "<a href='/../BMH Website/index.php'>
                    <img src='/../BMH Website/img/BMH Food Delivery LOGO.png' alt='logo' >
                    <h2>BMH Food Delivery</h2>
                    </a>";
            }
            elseif($_SESSION["login-status"] == 1){
                echo "<a href='/../BMH Website/pages/home.php'>
                    <img src='/../BMH Website/img/BMH Food Delivery LOGO.png' alt='logo' >
                    <h2>BMH Food Delivery</h2>
                    </a>";
            }
            ?>
        </div>
        <div id="login">
            <?php 
                if($_SESSION["login-status"] == 0){
                    echo "<a href='/../BMH Website/login/login.php'>LOGIN</a>";
                }
                elseif($_SESSION["login-status"] == 1){
                    echo "<a href='/../BMH Website/index.php'>LOGOUT</a>";
                }
            ?>
        </div>
    </div>