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

$sql = "SELECT laptopID,problems,tested,OS FROM Laptops";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Laptop ID: " . $row["laptopID"]. " - Problems: " . $row["problems"]. " - Tested:" . $row["tested"]. " - OS:" . $row["OS"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>