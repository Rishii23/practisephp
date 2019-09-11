<? function mysqli() ?>

<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
// ***********
$UsrName= $_POST["username"];
$pwd= $_POST["Createpassword"];
$email= $_POST["emailaddr"];

$UsrName= $_POST["username"];
// ********************

// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// **** Signup

$sql = "INSERT INTO newtable (username,password,email) VALUES ('$UsrName' , '$pwd', '$email')";

// $sql = "SELECT username FROM newtable;
// if(username ==$_POST[])

//function takes 2 parameter connection and sql variable



if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>