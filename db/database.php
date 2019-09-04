
<?php
$servername = "localhost";
$username = "Rishh";
$password = "code@123";
$dbname = "myDB";


// Create connection
$conn = new mysqli($servername, $username, $password);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

//Create Database
$sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )"; 

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')";
    
    
if ($conn->quey($sql)=== TRUE;{
echo" Database Creating sucessful";
}
else {
    echo "Error in creating Database:" . $conn ->error;
    }
    // sql create table
   
$conn->close();

?>

