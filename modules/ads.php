<?php
require("settings.php");
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if($conn->query('SELECT 1 FROM `ads` LIMIT 1') !== FALSE)
{
   //DO SOMETHING! IT EXISTS!
}
else
{
  // Create table
}
echo 'Sponsored by <a href = "{$addr}">';

$conn->close();
?>
