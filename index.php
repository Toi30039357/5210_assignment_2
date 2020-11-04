<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

  <title>Assignment 2 - SCP</title>
</head>

<body>

<div><img class="imageHeader" src="images/selfmade/header.png" alt="header"></div>
<hr style='border: 5px solid rgb(75,175,75); width: 100%; margin: auto;'>

        <br>
        <br>

        <div class='db-container'>
        <div class='db'>
        <a href='index.php'><img src='images/selfmade/json_logo.png' style='width: 8em; margin:6px 0 6px 0; padding-bottom: 5px;' /></a>
        </div>
        </div>
        <br>
        <h1 class='greenText'>#SCP JSON PROTOTYPE CLASSIFIED#</h1>
        <br>
        <img class="playButton" src="images/selfmade/play_button.png" alt= "Play Button" style="border-style: none; height: auto; width: 15em;"
            onclick="TextToSpeechPara()">
        <br>
        <hr style='border: 5px solid rgb(75,175,75); width: 100%; margin: auto;'>
        <br>
        

        
    <?php
        $scpobjects = json_decode(file_get_contents('json/scpobjects.json'));
    ?>
    
    <div class="siteContainer" id="readMe">

    <?php foreach ($scpobjects as $display): ?>   
        <!-- HEADER TEXT -->
        <h1>Item #: <?php echo $display->item; ?></h1>
        <h2>Object Class: <?php echo $display->class; ?></h2>

        <!-- BREAK -->
        <br>
        <div><img class="imageBreak" src="images/selfmade/breaker.png" alt="Breaker" alt="Breaker"></div>
        <br>
        
        <!-- SCP IMAGE -->
        <div class="click-zoom">
            <label>
                <input type="checkbox">
                <img class="imageContain" src="<?php echo $display->image; ?>" alt="SCP IMAGE">
            </label>
        </div>

        <!-- BREAK -->
        <br>
        <div><img class="imageBreak" src="images/selfmade/breaker.png" alt="Breaker" alt="Breaker"></div>
        <br>

        <!-- Special Containment Text + Audio Button -->
        <h3>Special Containment Procedures:</h3>
        
        <p><?php echo $display->containment; ?></p>

        <!-- BREAK -->
        <br>
        <div><img class="imageBreak" src="images/selfmade/breaker.png" alt="Breaker" alt="Breaker"></div>
        <br>

        <!-- Description Text -->
        <h3>Description:</h3>
        <p><?php echo $display->description; ?></p>

        <!-- BREAK -->
        <br>
        <div><img class="imageBreak" src="images/selfmade/breaker.png" alt="Breaker" alt="Breaker"></div>
        <br>

        <!-- Reference Text -->
        <h3>Extra Information:</h3>
        <p><?php echo $display->extra; ?></p>
        <br>
        <hr style='border: 3px solid rgb(75,175,75); width: 100%; margin: auto;'>
        <br><br>
        <?php endforeach; ?>

    </div>

  </div>
    </div>
  <br>
  <footer>
        <a href="index.php">
            <img class="imageFooter" src="images/scp_foundation_emblem.png" alt="SCP Emblem"></a>
        <h6>© 2020 M. FRANKEN. ALL RIGHTS RESERVED. SCP FOUNDATION. </h6>
  </footer>


<script src="js/functions.js">
</script>
</body>

</html>