<?php
if (isset($_POST['logout_btn'])) {
    if (!empty($_SESSION['user_id'])) {
    $_SESSION = [];
    session_destroy();
    echo "<script>window.alert('Logged out successfully');</script>";
    } else {
    echo "<script>window.alert('no user signed in yet');</script>";
    }
}

if (isset($_POST["login_btn"])) {
    if (empty($_SESSION["user_id"])) {
    header("Location: register.php");
    exit;
    }
    else{
        echo '<script>window.alert("user already logged in")</script>';
    }
}
?>