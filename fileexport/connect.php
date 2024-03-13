<?php
$servername = "localhost";
$username = "u584943559_sepikuser";
$password = "6;7Ra;PiM";

// Create connection
$con = mysqli_connect($servername, $username, $password,"u584943559_sepikweb");

// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

session_start();
?>