<!-- 
  Name: Ultimate Life Form
  ID: 2002-02-22
  Date: ????-??-??
-->
<!-- HTML5 doctype declaration -->
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

  <!-- Page heading -->
  <h1>Please fill this form</h1>

  <!-- Form for selling or buying games -->
  <form method="POST" name="SB-Form" id="SB-Form" onsubmit="return validateForm()">

    <!-- Personal Info Section -->
    <fieldset>
      <legend>Personal Info</legend>
      
      <label for="fname">First name:<span>*</span></label>
      <input type="text" id="fname" name="fname" placeholder="Ultimate Life Form" >

      <label for="fname">Last name: <span>*</span></label>
      <input type="text" id="lname" name="lname" placeholder="Alsafry" >

      <label for="email">Email: <span>*</span></label>
      <input type="text" id="email" name="email" placeholder="example@gmail.com" >

      <label for="phone">Phone#:<span>*</span></label>
      <input type="tel" id="phone" name="phone" placeholder="(123)-456-7890" >

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
         <input type="checkbox" id="agree-to-term" name="agree-to-term" value="Agree-to-term-of-service">
         <span>*</span> I Agree to the term of Services.
         </label>

         <label>
         <input type="checkbox" id="agree-to-use-of-data" name="agree-to-use-of-data" value="Agree-to-use-of-data">
         <span>*</span> I Agree to the use of my data.
         </label>
         </div>
        </fieldset>
      <!-- Form Buttons -->
    
      <div class="buttoncontainer">
        <input type="reset" class="ResetB">
        <input type="submit" class="SubmitB">
      </div>
    
  </form>

  <!--javascript-->
  <script src="/final_project/script/validation.js"></script>

  <!-- Footer with contact info and quick links -->
  <?php include '../includes/footer.php'; ?>
</body>

</html>