<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "db-auth";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = file_get_contents('assets/db/Migrations.sql');

if ($conn->multi_query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

?>