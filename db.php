<?php

ini_set('default_charset', 'utf-8');

  $hostname = "127.0.0.1";
  $username = "root";
  $password = "root";
  $dbname = "onlineshope";

  $con= mysqli_connect($hostname, $username, $password, $dbname);

  if(!$con){
    echo "Database connection error".mysqli_connect_error();
  }

mysqli_set_charset($con,"utf8");
mysqli_query($con,"SET NAMES 'utf8'");
mysqli_query($con,'SET CHARACTER SET utf8'); 

?>