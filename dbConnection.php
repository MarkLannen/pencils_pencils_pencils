

<?php
$servername = "webdev.cs.umt.edu";
$username = "ml120499";
$password = "pohthaimooShohnai0chaisah5Aexo";
$dbname = "ml120499";

// Create connection
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>