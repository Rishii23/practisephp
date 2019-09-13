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


// For Sign in Variables
$LoginName = $_POST["LoginName"];
$LoginPwd= $_POST["LoginPassword"];
// ********************

   $sql ="SELECT username FROM newtable WHERE username='$LoginName' AND password='$LoginPwd'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "login accepted";
     } 
     else {
            echo "login Rejected";
        }
    
 
$conn->close();
?>