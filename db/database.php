

<? function mysqli  ()  ?>
<?php
$servername = "localhost";
$username = "Rishh";
$password = "code@123";
$db="test";

//test db

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


$sql = "INSERT INTO mytable(id, lastname, email)
VALUES ('1234', 'Doe', 'john@example.com')";


//Create Database
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

