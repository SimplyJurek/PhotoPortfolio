<?php

    $serverName = "localhost";
    $dBUsername = "phpbaldy";
    $dBPassword = "Ljsno1309";
    $dBName = "phpbaldy";

    $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

    if(!$conn)  {
        die("Connection failed: ".mysqli_connect_error());
    }