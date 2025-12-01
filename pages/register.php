
<?php 

require_once '../db_connect.php';
$message = "";
if(isset($_POST["submit_button"])){

    $username = $_POST["username"];
    $password = $_POST["userpassword"];
    
    $sql = "SELECT * FROM login WHERE user_name = '$username' and user_password = '$password' ";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){

        $message = "<div style='color: green; padding: 10px; border: 1px solid green; margin-bottom: 20px;'> Login successful!</div>";
    }
    else{

$message =  "<div style='color: red; padding: 10px; border: 1px solid red; margin-bottom: 20px;'> The username or the password is wrong! </div>";

    }

    






}




?>





<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="UTF-8">
    <meta name="author" content="Ultimate Life Form">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    </head>

    <body>
        <!-- Navigation bar -->
         
        <?php include '../includes/navbar.php'; ?>
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
            
            <p>Don't have an account? <a href="/final_project/pages/Sign-up.php">Sign In</a></p>
            </div>

        </form>
        </div>
         <!--javascript-->
  <script src="/final_project/script/validation.js"></script>
        <?php include '../includes/footer.php'; ?>
    </body>

</html>