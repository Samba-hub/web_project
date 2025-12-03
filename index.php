<!-- 
  Name: Ultimate Life Form
  ID: 2002-02-22
  Date: ????-??-??
-->

<!-- HTML5 doctype declaration -->

<?php 
session_start();
include "includes/logging.php" ?>;
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head section includes metadata, title, and stylesheet links -->
    <meta charset="UTF-8">
    <meta name="author" content="Ultimate Life Form">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ultimate Life Form Retro Store</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Navigation Bar -->
    <?php include 'includes/navbar.php'; ?>
    <?php include 'includes/log_btn.php'; ?>
    
    <!-- Page Heading -->
    <h1>Ultimate Life Form Retro Store</h1>

    <!-- Introduction Section -->
    <div>

        <p>Welcome to <cite>Ultimate Life Form Retro Store</cite>, your destination for nostalgic gaming experiences from the golden
            days of consoles.
            We specialize in providing authentic games from PlayStation, Nintendo, and Sega systems.</p>


        <p>Travel back in time to the old days of gaming! <cite>Ultimate Life Form Retro Store</cite> offers nostalgia to your screen
            through pixelated adventures and vintage systems.
            <br>
            <br>
            Discover timeless favorites, uncommon finds, and the magic of retro gaming all over again.
        </p>




        <!-- Blockquote -->
        <blockquote cite="https://retro-gaming-world.com">
            "Retro games aren't just games they're memories."
        </blockquote>
    </div>

  
    
        <div id="box1">
            <h2>Products/Items</h2>
            <p>Browse through our hand-picked collection of classic consoles, original game cartridges, and retro
                accessories.
                From legendary RPGs to unforgettable platformers, our store is packed with gaming treasures waiting to
                be rediscovered.
            </p>
        
        <!-- Image -->
        <a href="pages/Items.php" target="_self" title="Click here to go to the Products/Itmes page">
            <img src="images/GOAT.jpeg" alt="THE GOAT">
        </a>
   </div>

   <?php include './includes/footer.php' ?>
</body>

</html>