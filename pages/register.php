<!DOCTYPE html>
<html>

    <head>
    <meta name="author" content="Ultimate Life Form">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
    <title>Items</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    </head>

    <body>
        <!-- Navigation bar -->
         
        <?php include '../includes/navbar.php'; ?>
        <h1>Register Page</h1>
        
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
            
            <p>Don't have an account? <a style="display: inline; color:blueviolet;">Sign In</a></p>
            </div>

        </form>
        </div>
         <!--javascript-->
  <script src="/final_project/script/formJS.js"></script>
        <?php include '../includes/footer.php'; ?>
    </body>

</html>