<?php
  $hostname = "b146smpdtamjslherjjc-mysql.services.clever-cloud.com";
  $username = "uk2jayktlouzlzw8";
  $password = "g36gL7ZFQNokp3nwXq2w";
  $dbname = "b146smpdtamjslherjjc";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
