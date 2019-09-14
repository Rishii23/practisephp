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

// $sql = "INSERT INTO newtable (message) VALUES ('$Chat')";
$sql = "SELECT message FROM newtable";
$result = mysqli_query($conn, $sql);

 if (mysqli_num_rows($result) > 0) {

   while ($row = mysqli_fetch_assoc($result))
   {
       if ($row[message] != NULL) 
       {
           echo $row[message];
       }
       else{
           echo "DND";
       }
   }
   }
   else {
       echo "NOT WORKING";
   }
 


// header("Location: http://localhost/practisephp/chatBox.php");
$conn->close();
?>