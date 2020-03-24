

<?php
$servername = "webdev.cs.umt.edu";
$username = "ml120499";
$password = "pohthaimooShohnai0chaisah5Aexo";
$dbname = "ml120499";

// Create connection
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_errno) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
/*
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql)
    or die('Query Failed');
echo "Query Successful";

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    foreach($row as $val){
        echo $val."<br>";
    }
    echo "<br><br>";
}
*/

?>