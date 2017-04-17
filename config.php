<?php
  $connectionInfo = array("UID" => "discovermelody@discovermelody", "pwd" => "Animal123!", "Database" => "dm", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
  $serverName = "tcp:discovermelody.database.windows.net,1433";
  $conn = sqlsrv_connect($serverName, $connectionInfo);

  if( !$conn ) {
     echo "Connection could not be established.<br>";
     die( print_r( sqlsrv_errors(), true));
  }
  else echo "Yatta!<br>";
?>
