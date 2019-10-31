<?php function mysqli() {}?>
<?php
error_reporting(0);

$host = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
// Create connection

$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// ***********
?>