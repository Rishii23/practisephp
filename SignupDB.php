<? function mysqli() ?>

<?php
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
// For Sign up Variables

$UsrName = $_POST["username"];
$pwd= $_POST["Createpassword"];
$email= $_POST["emailaddr"];
// ********************


$sql = "INSERT INTO newtable (username,password,email) VALUES ('$UsrName','$pwd', '$email')";
$result = mysqli_query($conn, $sql);

 // page after submition
if ($result) {
    echo "New record created successfully";
}
else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>