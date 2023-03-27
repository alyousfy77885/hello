<?php
  $hostname = "localhost";
  $username = "id19188524_localhost";
  $password = "f?1JRTE-hFU2)DU9";
  $dbname = "id19188524_chat";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
