<?php

    if (isset($_POST["signup-submit"])) {

        $email = $_POST["mail"];
        $uid = $_POST["uid"];
        $pwd = $_POST["pwd"];
        $repeatPwd = $_POST["repeat-pwd"];

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        if (emptyInputSignup($email, $uid, $pwd, $repeatPwd) !== false) {
            header("location: ../signup.php?error=emptyinput");
            exit();
        }

        if (invalidUid($uid) !== false) {
            header("location: ../signup.php?error=invaliduid");
            exit();
        }

        if (invalidEmail($email) !== false) {
            header("location: ../signup.php?error=invalidemail");
            exit();
        }

        if (pwdMatch($pwd, $repeatPwd) !== false) {
            header("location: ../signup.php?error=pwddontmatch");
            exit();
        }

        if (uidExists($conn, $uid, $email) !== false) {
            header("location: ../signup.php?error=uidtaken");
            exit();
        }

        createUser($conn, $email, $uid, $pwd);

    }   else    {
        header("location: https://youtu.be/dQw4w9WgXcQ");
        exit();
    }