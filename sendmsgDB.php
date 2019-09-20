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

$sql_insert = "INSERT INTO newtable (message) VALUE ('$Chat')";

$sql_select = "SELECT message FROM newtable where message = $Chat";

$if_Sent = mysqli_query($conn,$sql_insert);

$if_Select = mysqli_query($conn,$sql_select);


if ($if_Sent) {
    echo "Sucessful add";  
}
else {
   echo "un-Sucessful";
}
 
echo   " <br> $Chat";


// header("Location: http://localhost/practisephp/chatBox.php");
$conn->close();
?>