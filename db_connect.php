<?php
    $dbhost = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $db = "web_project";

    $conn = mysqli_connect($dbhost, $dbusername, $dbpassword, $db);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

?>