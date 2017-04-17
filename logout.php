<?php session_start();
  include 'header.php';
  // remove all session variables
  session_unset();
  // destroy the session
  session_destroy();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Discover Melody</title>
    <?php
      include 'header.php'
    ?>
  </head>

  <body>

    You are logged out.
  </body>
</html>
