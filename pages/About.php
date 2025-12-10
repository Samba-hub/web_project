<!-- 
  Name: Ultimate Life Form
  ID: 2002-02-22
  Date: ????-??-??
-->
<!-- HTML5 doctype declaration -->  
<?php 
session_start();
include "../includes/logging.php" ;?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head section includes metadata, title, and stylesheet links -->
    <meta charset="UTF-8">
    <meta name="author" content="Retro Store">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Navigation bar -->
    <?php include '../includes/navbar.php'; ?>
    <?php include '../includes/log_btn.php'; ?>

    <!-- Page Heading -->
    <h1>About Our Retro Game Store</h1>

    <!-- Store Introduction Paragraph -->
    <p class="box2">
        <cite>Retro Store</cite>: is a way deliver a nostalgic experience for retro gamers. It allows users to browse, buy, and even sell classic games from beloved systems such as the PS1, PS2, SNES, Sega Genesis, and more.
    </p>

    <!-- Unordered List of Store Features -->
    <div class="box2">
        <h2>Why Choose Us?</h2>
        <ul>
            <li>Original Japanese & US imports.</li>
            <li>High-quality game cases and manuals.</li>
            <li>Tested and working retro hardware.</li>
            <li>Customer support with real game enthusiasts.</li>
        </ul>
    </div>

    <!-- Blockquote Section with a span tag -->
    <div class="box2">
        <h2>What People Say</h2>
        <blockquote>
            "Retro Store is a treasure chest for retro gamers. It brings back memories in the most authentic way
            possible!"
            <span>Thank you for chosing us.</span>
            <span>Retro Store.</span>
        </blockquote>
        
    </div>

    <!-- Footer Section with Contact Info and Quick Links -->
    <?php include '../includes/footer.php'; ?>
</body>

</html>