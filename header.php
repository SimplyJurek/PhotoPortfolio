<?php 
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="style.css">


    <title>Jerzy Baldy</title>
</head>
<body>

    <div class="loader-wrapper">
        <div class="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>

<nav class="nav-bar">
        <div class="logo-container">
            <h3 class="logo-text">Jerzy Baldy</h3>
        </div>
        <ul class="nav-list">

            <?php 
                if (isset($_SESSION["useruid"])) {
                    echo "<li><a href=\"index.php\" class=\"nav-links\">Home</a></li>";
                    echo "<li><a href=\"aboutme.php\" class=\"nav-links\">About Me</a></li>";
                    echo "<li><a href=\"contact.php\" class=\"nav-links\">Contact</a></li>";
                    echo "<li><a href=\"gallery.php\" class=\"nav-links\">Gallery</a></li>";
                    echo "<li><a href=\"profile.php\" class=\"nav-links\">Profile</a></li>";
                    echo "<li><a href=\"includes/logout.inc.php\" class=\"nav-links\">Log Out</a></li>";
                }   else {
                    echo "<li><a href=\"index.php\" class=\"nav-links\">Home</a></li>";
                    echo "<li><a href=\"aboutme.php\" class=\"nav-links\">About Me</a></li>";
                    echo "<li><a href=\"contact.php\" class=\"nav-links\">Contact</a></li>";
                    echo "<li><a href=\"gallery.php\" class=\"nav-links\">Gallery</a></li>";
                    echo "<li><a href=\"login.php\" class=\"nav-links\">Log In</a></li>";
                }
            ?>

        </ul>
        <div class="drop-down">
            <div class="line-one"></div>
            <div class="line-two"></div>
            <div class="line-three"></div>
        </div>
    </nav>