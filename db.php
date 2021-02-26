<?php
$servername1 = "139.99.26.127";
$username1 = "uccbdcom_product";
$password1 = "";
$dbname1 = "uccbdcom_test1";
// Create connection
$conn = new mysqli($servername1, $username1, $password1,$dbname1);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
?>
