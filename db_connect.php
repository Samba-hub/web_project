<?php
    $dbhost = "sql100.infinityfree.com";
    $dbusername = "if0_40508584";
    $dbpassword = "nTruo1zbgb";
    $db = "if0_40508584_retro_store";

    $conn = mysqli_connect($dbhost, $dbusername, $dbpassword, $db);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

?>