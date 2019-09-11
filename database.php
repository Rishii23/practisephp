<? function mysqli() ?>

<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
// ***********
$UsrName= $_POST["username"];
$pwd= $_POST["Createpassword"];
$email= $_POST["emailaddr"];

$LoginName= $_POST["LoginName"];
$LoginPwd= $_POST["LoginPassword"];

// ********************

// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// **** Signup

$sql = "INSERT INTO newtable (username,password,email) VALUES ('$UsrName' , '$pwd', '$email')";

// sign-in

$sql = "SELECT username FROM newtable";

$result = mysqli_query($conn, $sql);

// echo $LoginName. "<br>";
// echo $LoginPwd. "<br>";

// if ($LoginName = $row["username"])
// {
//     echo "Login Accepted <br>";
// }
// else {
//     echo "Login Declined <br>";
//     }
echo mysqli_num_rows($result);

print_r( mysqli_fetch_assoc($result));

die();
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Name: ". $row["username"]."<br>";
    }
} else {
    echo "0 results";
}



// -- function takes 2 parameter connection and sql variable



// if (mysqli_query($conn, $sql)) {
//     echo "New record created successfully";
// } else {
//     echo "Error creating database: " . $conn->error;
// }

$conn->close();
?>