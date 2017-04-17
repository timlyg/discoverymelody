<?php session_start();
  // remove all session variables
  session_unset();
  // destroy the session
  session_destroy();
?>
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

    You are logged out. Back to <a href="/">home</a>
  </body>
</html>
