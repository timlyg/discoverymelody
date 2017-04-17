<?php session_start(); ?>

<?php
  include 'config.php';
  if($_SERVER["REQUEST_METHOD"] == "POST") {
     // username and password sent from form
     $myfirstname = $_POST['firstname'];
     $mylastname = $_POST['lastname'];
     $myemail = $_POST['email'];
     $myhash = crypt($_POST['password'],'melodydiscover');

     $sql = "INSERT INTO Students (LastName, FirstName, Email, Hash) VALUES ($myfirstname, $mylastname, $myemail, $myhash)";
     $result = mysqli_query($conn,$sql);
     if( $result === false ) {
       die( print_r( sqlsrv_errors(), true));
     }
     else echo "User Registered";
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discover Melody</title>
    <?php
      include 'header.php';
    ?>
  </head>

  <body>

    <h1>Registration</h1>
    <form action="" method="post">
      FIRST NAME: <input type="text" name="firstname"><br>
      LAST NAME: <input type="text" name="lastname"><br>
      E-MAIL: <input type="email" name="email"><br>
      password: <input type="password" name="password"><br>
      <input type="submit" name="submit" value="Register"><br>
    </form>




  </body>
</html>
