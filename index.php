<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discover Melody</title>
    <?php
      include 'header.php'
    ?>
  </head>

  <body>

    <h1>Welcome</h1>

    <?php echo "Crypt status: ".crypt('genesis','melodydiscover'); ?>


  </body>
</html>
