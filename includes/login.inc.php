<?php

    if (isset($_POST["login-submit"])) {
        $uid = $_POST["uid"];
        $pwd = $_POST["pwd"];

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        if (emptyInputLogin($uid, $pwd) !== false) {
            header("location: ../login.php?error=emptyinput");
            exit();
        }

        loginUser($conn, $uid, $pwd);
        
    }   else {
        header("location: https://youtu.be/dQw4w9WgXcQ");
        exit();
    }