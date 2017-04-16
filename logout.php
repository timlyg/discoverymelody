<?php session_start();
  include 'header.php';
  // remove all session variables
  session_unset();
  // destroy the session
  session_destroy();
?>
You are logged out.
