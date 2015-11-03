<?php
$servername = "db151c.pair.com";
$username = "kilgorei";
$password = "tso2pixr";
$dbname = "kilgorei_dev";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Laptops (
laptopID VARCHAR(128),
problems VARCHAR(128),
tested VARCHAR(128),
OS VARCHAR(128)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Laptops created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
