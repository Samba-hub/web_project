<?php

require_once '../db_connect.php';
$message = ""; 
if(isset($_POST['submit_button'])){
    $username = $_POST['username'];
    $fname    = $_POST['fname'];
    $lname    = $_POST['lname'];
    $email    = $_POST['email'];
    $password    = $_POST['userpassword'];

    $sql = "INSERT INTO login
            (email, first_name, last_name, user_name, user_password) 
            VALUES 
            ('$email', '$fname', '$lname', '$username', '$password')";



    try{
      $value =  mysqli_query($conn, $sql);

    if($value == true){
    $message = "<div style='color: green; padding: 10px; border: 1px solid green; margin-bottom: 20px;'> Form submitted successfully!</div>";

}


    }

catch(Exception $e){

     $message = "<div style='color: red; padding: 10px; border: 1px solid red; margin-bottom: 20px;'> Error: " . mysqli_error($conn) . "</div>";
}

}


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
            <input type="text" id="email" name="email" placeholder="example@gmail.com" >
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