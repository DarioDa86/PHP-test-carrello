<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "next_ecommerce";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf-8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM product";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        var_dump($row);
    }
} else {
    echo "0 results";
}
$conn->close();
