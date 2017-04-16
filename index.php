<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Discover Melody</title>
  </head>

  <body>
    <?php
      include 'header.php'
    ?>

  PHP Page ddd Login

  <?php  echo "starting color is " . $_SESSION["favcolor"] . ".<br>";
      $_SESSION["favcolor"] = "green";
      echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
  ?>
  </body>
</html>
