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
  <form method="POST">

    <!-- Personal Info Section -->
    <fieldset name="SB-Form" id="SB-Form">
      <legend>Personal Info</legend>
      
      <label for="fname">First name:</label>
      <input type="text" id="fname" name="fname" placeholder="Ultimate Life Form" required>

      <label for="fname">Last name: </label>
      <input type="text" id="lname" name="lname" placeholder="Alsafry" required>

      <label for="email">Email: </label>
      <input type="email" id="email" name="email" placeholder="example@gmail.com" required>

      <label for="phone">Phone#:</label>
      <input type="tel" id="phone" name="phone" placeholder="(123)-456-7890" required>

    </fieldset>

    <!-- Game Info Section -->
    <fieldset>
      <legend>Game Info</legend>


      <label for="gname">Game name:</label>
      <input type="text" id="gname" name="gname" placeholder="your-game-name" required>

      <label for="status">status:</label>

      <label for="want-to-sell">want-to-sell</label>
      <input type="radio" id="want-to-sell" name="status" required>

      <label for="want-to-buy">want-to-buy</label>
      <input type="radio" id="want-to-buy" name="status" required>
      <label for="quantity">Quantity:</label>
      <input type="number" id="quantity" name="quantity" min="0" max="100" value="1" required>

      <label for="Price">Price:</label>
      <input type="number" id="Price" name="Price" min="5" max="1000" placeholder="30$" required>
      </div>

      <!-- Form Buttons -->
      <br>
      <div>
        <input type="reset" class="SubmitB">
      </div>
      <br>
      <div>
        <input type="submit" class="SubmitB">
      </div>
    </fieldset>
  </form>

  <!-- Footer with contact info and quick links -->
  <?php include '../includes/footer.php'; ?>
</body>

</html>