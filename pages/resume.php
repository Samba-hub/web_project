<?php 
session_start();
include "../includes/logging.php" ?>;

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="UTF-8" >
    <meta name="author" content="Ultimate Life Form" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>Resume</title>
    <link rel="stylesheet" href="../css/style.css" >
    <link
      href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap"
      rel="stylesheet"
    >
  </head>

  <body>
    <?php include '../includes/navbar.php'; ?>
    <?php include '../includes/log_btn.php'; ?>
    <h1>Resume Page</h1>
    
    <object class="pdf" 
            data="../docs/resume_sample.pdf"
            width="800"
            height="500">
    </object>

    <?php include '../includes/footer.php'; ?>
</body>
</html>
