<!-- 
  Name: Ultimate Life Form
  ID: 2002-02-22
  Date: ????-??-??
-->
<!-- HTML5 doctype declaration -->

<?php
require_once '../db_connect.php';
session_start();

//Secure Design

if (!isset($_SESSION["user_id"])) {
    header("Location: /final_project/pages/register.php");
    return;
}


if(isset($_POST['submit_form'])){
    //check if the session has a registered user 
   // if (!empty($_SESSION["user_id"])) {
      $user_id = $_SESSION["user_id"];

     $username = $_POST['username'];
     $fname    = $_POST['fname'];
     $lname    = $_POST['lname'];
     $email    = $_POST['email'];
     $phone    = $_POST['phone'];
    

    $status   = $_POST['status'];
    $gname    = $_POST['gname'];
    $quantity = $_POST['quantity'];
    $price    = $_POST['Price'];
    $condition= $_POST['Condition'];
    $feedback = $_POST['Feedback'];

    $A_term     = $_POST['agree-to-term'];
    $A_data     = $_POST['agree-to-use-of-data'];
      //php vaildaition
      $errors = [];
      //username
      if(empty($username)){
        $errors [] = "Username must be filled";
      }
      if (strlen($username) < 3 || strlen($username) > 20){
         $errors [] = "Invalid username must at least be 3 charecters";
      }

      //Firstname
      if(empty($fname)){
        $errors [] = "First name must be filled";
      }
      if (strlen($fname) < 3 || strlen($fname) > 20){
         $errors [] = "Invalid First name at least be 3 charecters";
      }

      //Lastname
      if(empty($lname)){
        $errors [] = "Last name must be filled";
      }
      if (strlen($lname) < 5 || strlen($lname) > 20){
         $errors [] = "Invalid Last name at least be 5 charecters";
      }

      //Email
      if(empty($email)){
        $errors [] = "Email must be filled";
      }
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
         $errors [] = "Invalid Email";
      }

      //Phone
      if(empty($phone)){
         $errors [] = "Phone Number must be filled";
      }
      if (!ctype_digit($phone) || strlen($phone) != 10) {
         $errors[] = "Invalid phone number, Phone Number must be 10 digits";
      }
      
      //Status
      if (empty($status)){
         $errors [] = "You must select either sell or buy";
      }

      //Gamename
      if(empty($gname)){
        $errors [] = "Game Name must be filled";
      }
      if (strlen($gname) < 4 || strlen($gname) > 30){
         $errors [] = "Game Name must be at least 4 charecters";
      }

      //Quantity
      if(empty($quantity)){
        $errors [] = "Quantity must be filled";
      }
      if(!is_numeric($quantity)){
        $errors [] = "Quantity must be Number";
      }
      if ($quantity < 1 || $quantity > 100){
         $errors [] = "Quantity must be at between 1 and 100";
      }

      //Price
      if(empty($price)){
        $errors [] = "Price must be filled";
      }
      if(!is_numeric($price)){
        $errors [] = "Price must be Number";
      }
      if ($price < 5 || $price > 1000){
         $errors [] = "Price must be at between 5 and 1000";
      }

      //Condition
      $validCondition = ["new","good","Loose","newCIB","goodCIB","LooseCIB"];
      if(!in_array($condition,$validCondition)){
        $errors [] = "Invalid Game Condition";
      }

      //FeedBack
      if(empty($feedback)){
        $errors [] = "FeedBack must be filled";
      }
      if (strlen($feedback) < 3 || strlen($feedback) > 100){
         $errors [] = "Invalid FeedBack must at least be 3 charecters";
      }

      //Terms of Service
      if(empty($A_term)){
        $errors [] = "You must Agree to the Terms of Service";
      }
      //Use of Data
      if(empty($A_data)){
         $errors [] = "You must Agree to the Use of Data";
      }

      //Stop If there is an Error
      if(!empty($errors)){
        foreach ($errors as $e){
          echo "<script>alert('$e');</script>";
        }
        return;
      }

       //XSS Protection
       
    $username = htmlspecialchars($username, ENT_QUOTES,'UTF-8');
    $fname = htmlspecialchars($fname, ENT_QUOTES,'UTF-8');
    $lname = htmlspecialchars($lname, ENT_QUOTES,'UTF-8');
    $email = htmlspecialchars($email, ENT_QUOTES,'UTF-8');
    $phone = htmlspecialchars($phone, ENT_QUOTES,'UTF-8');
    $status = htmlspecialchars($status, ENT_QUOTES,'UTF-8');
    $gname = htmlspecialchars($gname, ENT_QUOTES,'UTF-8');
    $quantity = htmlspecialchars($quantity, ENT_QUOTES,'UTF-8');
    $price = htmlspecialchars($price, ENT_QUOTES,'UTF-8');
    $condition = htmlspecialchars($condition, ENT_QUOTES,'UTF-8');
    $feedback = htmlspecialchars($feedback, ENT_QUOTES,'UTF-8');
    
    $A_term = isset($_POST['agree-to-term']) ? 1 : 0; //convert from boolean to intgar
    $A_data = isset($_POST['agree-to-use-of-data']) ? 1 : 0;//convert from boolean to intgar

   
    //SQL Injection 
    $stmt = mysqli_prepare($conn, "INSERT INTO form (user_id,user_name,first_name,last_name,email,phone, sell_or_buy, game_name,quantity, price, game_condition, feedback,terms_of_Service,use_of_Data) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    mysqli_stmt_bind_param($stmt,"isssssssidssii",$user_id,$username,$fname,$lname,$email,$phone,$status,$gname,$quantity,$price,$condition,$feedback,$A_term,$A_data);
    $success = mysqli_stmt_execute($stmt);
    if ($success) {
    echo "<script>alert('form submitted successfully');</script>";
    } else {
    echo "<script>alert('Something went wrong. please try again later');</script>";
    }
}


include "../includes/logging.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Head section includes metadata, title, and stylesheet links -->
  <meta charset="UTF-8">
  <meta name="author" content="Ultimate Life Form">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <link rel="stylesheet" href="../css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>

<body>
  <!-- Navigation bar -->
  <?php include '../includes/navbar.php'; ?>
  <?php include '../includes/log_btn.php'; ?>


  <!-- Page heading -->
  <h1>Please fill this form</h1>

  <!-- Form for selling or buying games -->
  <form method="POST" name="SB-Form" id="SB-Form" onsubmit="return validateForm()">
    
    <!-- Personal Info Section -->
    <fieldset>
      <legend>Personal Info</legend>
      
      <label for="username">User name:<span>*</span></label>
      <input type="text" id="username" name="username" placeholder="Ultimate Life Form" >

      <label for="fname">First name:<span>*</span></label>
      <input type="text" id="fname" name="fname" placeholder="Ultimate Life Form" >

      <label for="lname">Last name: <span>*</span></label>
      <input type="text" id="lname" name="lname" placeholder="Alsafry" >

      <label for="email">Email: <span>*</span></label>
      <input type="text" id="email" name="email" placeholder="example@gmail.com" >

      <label for="phone">Phone#:<span>*</span></label>
      <input type="text" id="phone" name="phone" placeholder="(123)-456-7890" >

    </fieldset>


    <fieldset>
      <legend>Status:</legend>
      
        <div class="status-option">
        <label for="want-to-sell">want-to-sell</label>
        <input type="radio" id="want-to-sell" name="status" value="sell">
        
        <label for="want-to-buy">want-to-buy</label>
        <input type="radio" id="want-to-buy" name="status" value="buy">
        </div>
    </fieldset>
    <!-- Game Info Section -->
    <fieldset>
      <legend>Game Info</legend>


      <label for="gname">Game name:<span>*</span></label>
      <input type="text" id="gname" name="gname" placeholder="your-game-name" >

      <label for="quantity">Quantity:<span>*</span></label>
      <input type="text" id="quantity" name="quantity" value="1">
      
      <label for="Price">Price:<span>*</span></label>
      <input type="text" id="Price" name="Price" placeholder="5$" >
      
      <label for="Condition">Condition:<span>*</span></label>
      <select id="Condition" name="Condition">
      <optgroup label="Game Only">
      <option value="new">New</option>
      <option value="good">Good</option>
      <option value="Loose">Loose</option>
      </optgroup>
       
      <optgroup label="Complete in Box">
      <option value="newCIB">New CIB</option>
      <option value="goodCIB">Good CIB</option>
      <option value="LooseCIB">Loose CIB</option>
      </optgroup>
      </select>
      
      <label for="Feedback">Feedback:<span>*</span></label>
      <textarea id="Feedback" name="Feedback" placeholder="This is a section for to write your feedback about your game" ></textarea>
      </fieldset>

      <fieldset>
      <legend>Term of Services & Use of Data:</legend>
         <div>
         <label>
         <input type="checkbox" id="agree-to-term" name="agree-to-term" value="On">
         <span>*</span> I Agree to the term of Services.
         </label>

         <label>
         <input type="checkbox" id="agree-to-use-of-data" name="agree-to-use-of-data" value="On">
         <span>*</span> I Agree to the use of my data.
         </label>
         </div>
        </fieldset>
      <!-- Form Buttons -->
    
      <div class="buttoncontainer">
        <input type="reset" class="ResetB">
        <input type="submit" class="SubmitB" name= "submit_form" value="Submit">
      </div>
    
  </form>


  <!--javascript-->
  <script src="/final_project/script/validation.js"></script>

  <!-- Footer with contact info and quick links -->
  <?php include '../includes/footer.php'; ?>
</body>

</html>