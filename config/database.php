<?php

$domain = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'];


$hostname     = "localhost"; // Enter Your Host Name
$username     = "root";      // Enter Your Table username
$password     = "";          // Enter Your Table Password
$databasename = "ecom-teleconsult"; // Enter Your database Name

$conn = new mysqli($hostname, $username, $password, $databasename);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>