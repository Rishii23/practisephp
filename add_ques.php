
<? function mysqli() ?>
<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "online_test";

// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$ques = $_POST["ques"];
// $ans = $_POST["answer"];

$sql_insert = "INSERT INTO question_bank question VALUE $ques";

if($sql_insert){
    echo "Sucessful";
    $row = mysqli_fetch_assoc($sql_insert);
    }
;