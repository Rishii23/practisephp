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

$Chat = $_POST["ChatReply"];
$ChatReply = NULL;
// ********************


$sql = "INSERT INTO newtable (message) VALUE ('$Chat')";

$sql = "SELECT message FROM newtable";


$result = mysqli_query($conn, $sql);

 // page after submition
if ($result) {
    echo "New record created successfully";
}
else {
    echo "Error creating database: " . $conn->error;
}

header("Location: http://localhost/practisephp/chatBox.php");
$conn->close();
?>