
<?php
$servername = "localhost";
$username = "Rishh";
$password = "code@123";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

//Create Database
$sql = "CREATE DATABASE myDB";
if ($conn->quey($sql)=== TRUE;{
echo" Database Creating sucessful";
}
else {
    echo "Error in creating Database:" . $conn ->error;
    }
$conn->close();

?>

