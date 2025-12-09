<?php 
session_start();
include "../includes/logging.php" ;?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="UTF-8" >
    <meta name="author" content="Retro Store" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>Video Reviews</title>
    <link rel="stylesheet" href="../css/style.css" >
    <link
      href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap"
      rel="stylesheet"
     >
  </head>

  <body>
    <?php include '../includes/navbar.php'; ?>
    <?php include '../includes/log_btn.php'; ?>
    <h1>Retro Games videos</h1>
    <!-- Navigation bar -->
    <div class="v_body">
      <div class="center_div">
        <!-- first video block -->
        <div class="video_div" id="first_vblock">
          <div class="v_container_p">
            <p class="video_p">
              A Walkthrough of Sonic Heroes - Ocean Palace - Team Sonic this vedio was realsed around 12 years ago will help
              any new players that are strugling in completing this level to finally do it.
            </p>
          </div>

          <iframe
            class="video_embed"
            src="https://www.youtube.com/embed/zCVF3gmu5sI"
            title="Sonic Heroes - Ocean Palace - Team Sonic [REAL Full HD, Widescreen]"
            
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin"
            allowfullscreen
          >
          </iframe>
        </div>

        <!-- second video block -->
        <div class="video_div" id="second_vblock">
          <div class="v_container_p">
            <p class="video_p">
              Crash Tag Team Racing - Walkthrough (Road To CTR Nitro-Fueled)
              this is a game play of someone playing Crash Tag Team Racing Road to CTR Nitro-Fueled.
            </p>
          </div>

          <iframe
            class="video_embed"
            src="https://www.youtube.com/embed/AaSrBO9EjpY?list=PLb1wtf8AbJvQqUPEhLxIuS7nN_bozahtU"
            title="Crash Tag Team Racing - Walkthrough Part 1 (Road To CTR Nitro-Fueled)"
            
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin"
            allowfullscreen
          >
          </iframe>
        </div>

        <!-- third video block -->
        <div class="video_div" id="third_vblock">
          <div class="v_container_p">
            <p class="video_p">
              Jackie Chan Adventures 100% - Prologue: Mexico - Walkthrough
              A vedio on how to achive 100% in the game these type of vedio is very usefull if a player trys to get 100% this might
              unlock a secret ending or even a custom skin.
            </p>
          </div>

          <iframe
            class="video_embed"
            src="https://www.youtube.com/embed/WdA-vK3-F6Q?list=PLHPstxTlW0TbWF4IEa2AhOkBcD-2het2N"
            title="Jackie Chan Adventures 100% - Prologue: Mexico - Walkthrough"
            
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin"
            allowfullscreen
            >
            </iframe>
        </div>

        
      </div>
    </div>

    <?php include '../includes/footer.php'; ?>
  </body>
</html>
