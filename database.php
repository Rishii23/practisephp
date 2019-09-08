<? function mysqli() ?>

<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
// ***********
$name= $_POST["name"];
$pwd= $_POST["password"];
$email= $_POST["email"];

// ********************
// Create connection

$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO newtable (username, password, email) VALUES ('$name' , '$pwd' , '$email')";


$sql = "UPDATE newtable SET username ='Doe' WHERE id= 4 ";

//function takes 2 parameter connection and sql variable

if (mysqli_query($conn, $sql)) {
    
//   matching with last ID
    // $last_id = mysqli_insert_id($conn);
    
    echo "New record created successfully. Last inserted ID is: " ;
    // . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();
?>