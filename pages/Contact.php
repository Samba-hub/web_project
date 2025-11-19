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
    <title>Contact</title>
    <link rel ="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navigation bar -->
     <?php include '../includes/navbar.php'; ?>
       
        <!-- Contact Section -->
    <h1>We value your feedback please Write your here Complane or Use the link to send me an Email</h1>
    <br>

    <div class="box2">

    <span>At Ultimate Life Form Retro Store, your experience is our top priority. We are committed to providing the best possible service.</span>
    <span> If you encounter any issue or believe we've fallen short, please let us know immediately.</span>
    <span>You can reach us using the provided contact information or by leaving your feedback in the text box below. We value your input and appreciate your business.</span>
    </div>

    <!-- Email hyperlink -->
    <p><a href="mailto:Ultimate Life Forma8372@gmail.com" target="_self" title="email me">
        Email
    </a></p>
    <!--Contact Info-->
    <p>Phone:+996 54 1234 567</p>
    <p>Address: King Abdulaziz University, Jeddah, Saudi Arabia</p>
   
    <!-- Complaint form with textarea input -->
    <form method="post">
    <textarea id="Complane" name="Complane" placeholder="Here Please"></textarea>
    <input type ="submit" class="SubmitB">
    </div>
    </form>

    <!-- Footer Section with contact and quick links -->
    <?php include '../includes/footer.php'; ?>
</body>
</html>