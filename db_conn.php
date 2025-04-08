<?php
$sname = "localhost";
// Replace the following with your own information
$unmae = "M00819427Sulta";
$password = "M00819427";
$db_name = "M00819427Sulta";

// Create connection
$conn = mysqli_connect($sname, $unmae, $password, $db_name);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";


?>
