<?php

require_once '../db_connect.php';
$message = "";
if (isset($_POST['submit_button'])) {
    $username = $_POST['username'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['userpassword'];

    $errors = [];
    //username
      if(empty($username)){
        $errors [] = "Username must be filled";
      }
      if (strlen($username) < 3 || strlen($username) > 100){
         $errors [] = "Invalid username must at least be 3 charecters";
      }

      //Firstname
      if(empty($fname)){
        $errors [] = "First name must be filled";
      }
      if (strlen($fname) < 3 || strlen($fname) > 100){
         $errors [] = "Invalid First name at least be 3 charecters";
      }

      //Lastname
      if(empty($lname)){
        $errors [] = "Last name must be filled";
      }
      if (strlen($lname) < 5 || strlen($lname) > 100){
         $errors [] = "Invalid Last name at least be 5 charecters";
      }

      //Email
      if(empty($email)){
        $errors [] = "Email must be filled";
      }
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
         $errors [] = "Invalid Email";
      }

      //Password
    if(empty($password)){
        $errors [] = "Password must be filled";
      }
      if (strlen($password) < 8 || strlen($password) > 25){
         $errors [] = "Invalid password that is at least 8 charecter and less than 25";
      }

      //Stop If there is an Error
      if(!empty($errors)){
        foreach ($errors as $e){
          echo "<script>alert('$e');</script>";
        }
        return;
      }
/*
    $sql = "INSERT INTO login
            (email, first_name, last_name, user_name, user_password) 
            VALUES 
            ('$email', '$fname', '$lname', '$username', '$password')";



    try {
        $value = mysqli_query($conn, $sql);

        if ($value == true) {
            $message = "<div style='color: green; padding: 10px; border: 1px solid green; margin-bottom: 20px;'> Form submitted successfully!</div>";

        }


    } catch (Exception $e) {

        $message = "<div style='color: red; padding: 10px; border: 1px solid red; margin-bottom: 20px;'> Error: " . mysqli_error($conn) . "</div>";
    }
    */
    //Check if the username already exists
    $checkU_stmt = mysqli_prepare($conn, "SELECT user_name FROM login WHERE user_name = ?");
    mysqli_stmt_bind_param($checkU_stmt,"s",$username);
    mysqli_stmt_execute($checkU_stmt);
    $checkU_result = mysqli_stmt_get_result($checkU_stmt);
    if(mysqli_num_rows($checkU_result) > 0){
         echo "<script>alert('This user name already exists'); 
         window.location.href='Sign-up.php';</script>";//Redircte to the sign-up page so it does not cause a fetal error
        return;
    }

    
    //Check if the email already exists
    $check_stmt = mysqli_prepare($conn, "SELECT email FROM login WHERE email = ?");
    mysqli_stmt_bind_param($check_stmt,"s",$email);
    mysqli_stmt_execute($check_stmt);
    $check_result = mysqli_stmt_get_result($check_stmt);
    if(mysqli_num_rows($check_result) > 0){
         echo "<script>alert('This email already exists'); 
         window.location.href='Sign-up.php';</script>";//Redircte to the sign-up page so it does not cause a fetal error
        return;
    }

    
    //XSS Protection
    
    $username = htmlspecialchars($username, ENT_QUOTES,'UTF-8');
    $fname = htmlspecialchars($fname, ENT_QUOTES,'UTF-8');
    $lname = htmlspecialchars($lname, ENT_QUOTES,'UTF-8');
    $email = htmlspecialchars($email, ENT_QUOTES,'UTF-8');
    
    //SQL Injection
    $stmt = mysqli_prepare($conn, "INSERT INTO login (email, first_name, last_name, user_name, user_password) VALUES (?,?,?,?,?)");
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "sssss",$email,$fname,$lname,$username,$hashedPassword);
    $success = mysqli_stmt_execute($stmt);
    
    if($success){
         $message = "<div style='color: green; padding: 10px; border: 1px solid green; margin-bottom: 20px;'> Form submitted successfully!</div>";
          echo "<script>window.location.href='/final_project/pages/register.php';</script>";
    }
    else{
         $message = "<div style='color: red; padding: 10px; border: 1px solid red; margin-bottom: 20px;'> Error: " . mysqli_error($conn) . "</div>";

    }

}

include "../includes/logging.php";


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Ultimate Life Form">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Navigation bar -->

    <?php include '../includes/navbar.php'; ?>
    <?php include '../includes/log_btn.php'; ?>
    <h1>Sign-up Page</h1>
    <?php echo $message; ?>

    <div class="form_div">
        <form method="POST" name="registerform" id="registerform" onsubmit="return validateSign_Up()">

            <div class="form_container">
                <h3>Sign up</h3>
                <label class="block_label">
                    username<span class="required">*</span>
                    <input type="text" name="username" id="username">
                </label>

                <label class="block_label">
                    first name<span class="required">*</span>
                    <input type="text" name="fname" id="fname">
                </label>

                <label class="block_label">
                    last name<span class="required">*</span>
                    <input type="text" name="lname" id="lname">
                </label>

                <label class="block_label">
                    Email: <span>*</span>
                    <input type="text" id="email" name="email" placeholder="example@gmail.com">
                </label>
                <label class="block_label">
                    password<span class="required">*</span>
                    <input type="password" name="userpassword" id="userpassword">
                </label>
                <input type="submit" id="submit_button" name="submit_button" value="Sign Up">


            </div>

        </form>
    </div>
    <!--javascript-->
    <script src="/final_project/script/validation.js"></script>
    <?php include '../includes/footer.php'; ?>
</body>

</html>