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
$ChatReply = 'Rishabh';
// ********************

$sql = "INSERT INTO newtable (message) VALUE ('$Chat')";

$result = mysqli_query($conn,$sql);

if ($result) {
    echo "Sucessfully";  
}
else {
    $sql = "SELECT message FROM newtable where message= $Chat";
    $ChatReply = $Chat;
}
 


// header("Location: http://localhost/practisephp/chatBox.php");
$conn->close();
?>