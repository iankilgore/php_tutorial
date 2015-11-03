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
$sql ="INSERT INTO Laptops (laptopID, problems, tested, OS) VALUES ('" . $_POST["laptopID"] . "','" . $_POST["problems"] . "','" . $_POST["tested"] . "','" . $_POST["OS"] ."')"; 

echo "<br>";
echo $sql;

echo "<br>";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . $conn->error;
    echo "<br>";
    echo $sql;
}

$conn->close();
?>