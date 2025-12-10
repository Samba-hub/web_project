<?php
//This will create  a session if one doesn't already exist.
session_start();

require_once '../db_connect.php';
$message = "";
if (isset($_POST["submit_button"])) {

    $username = $_POST["username"];
    $password = $_POST["userpassword"];

    $errors = [];
    //username
      if(empty($username)){
        $errors [] = "Username must be filled";
      }
      if (strlen($username) < 3 || strlen($username) > 20){
         $errors [] = "Invalid username must be between 3 and 20 charecters";
      }

    //Password
    if(empty($password)){
        $errors [] = "Password must be filled";
      }
      if (strlen($password) < 8 || strlen($password) > 25){
         $errors [] = "Invalid password must be between 8 and 25 charecters";
      }

      //Stop If there is an Error
      if(!empty($errors)){
        foreach ($errors as $e){
          echo "<script>alert('$e');</script>";
        }

      }

 

     //XSS Protection
     $username = htmlspecialchars($username, ENT_QUOTES,'UTF-8');


    //After Hashing
    //SQL Injection
    $stmt = mysqli_prepare($conn, "SELECT user_id, user_password FROM login WHERE user_name = ?");
    mysqli_stmt_bind_param($stmt, "s",$username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);


        if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);


        //Verify the password
        $hashedPassword = $row['user_password'];
        if (password_verify($password, $hashedPassword)) {

            $_SESSION["user_id"] = $row["user_id"];
            echo "<script>alert('Logged in successfully');</script>";
            echo "<script>window.location.href='/index.php';</script>";
            return;

        } else {

            $message = "<div style='color:red; padding:10px; border:1px solid red;'>password is wrong</div>";

        }

    } else {
            $message = "<div style='color:red; padding:10px; border:1px solid red;'>The username or password is wrong</div>";
    }
}

include "../includes/logging.php";




?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Retro Store">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Navigation bar -->

    <?php include '../includes/navbar.php'; ?>
    <?php include '../includes/log_btn.php'; ?>

    <h1>Register Page</h1>
    <?php echo $message; ?>
    <div class="form_div">
        <form method="POST" name="registerform" id="registerform" onsubmit="return validateAccount()">

            <div class="form_container">
                <h3>Log In</h3>
                <label class="block_label">
                    username<span class="required">*</span>
                    <input type="text" name="username" id="username">
                </label>

                <label class="block_label">
                    password<span class="required">*</span>
                    <input type="password" name="userpassword" id="userpassword">
                </label>
                <input type="submit" id="submit_button" name="submit_button" value="Log In">

                <p>Don't have an account? <a href="/pages/Sign-up.php">Sign In</a></p>
            </div>

        </form>
    </div>
    <!--javascript-->
    <script src="/script/validation.js"></script>
    <?php include '../includes/footer.php'; ?>
</body>

</html>