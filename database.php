<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$name= $_POST["name"];
$pwd= $_POST["password"];
$email= $_POST["email"];

// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO newtable (username,password,email) VALUES ('$name' , '$pwd', '$email')";

//function takes 2 parameter connection and sql variable



if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>