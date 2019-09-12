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

$UsrName = $_POST["username"];
$pwd= $_POST["Createpassword"];
$email= $_POST["emailaddr"];
// ********************

// For Sign in Variables
$LoginName = $_POST["LoginName"];
$LoginPwd= $_POST["LoginPassword"];
// ********************


// Condition wether Signup or Sign In !!

if($UsrName != NULL && $pwd != NULL){


// **** Signup (inserting values into DB)

$sql = "INSERT INTO newtable (username,password,email) VALUES ('$UsrName','$pwd', '$email')";
$result = mysqli_query($conn, $sql);

 // page after submition
if ($result) {
    echo "New record created successfully";
}
else {
    echo "Error creating database: " . $conn->error;
}
die();
}

else
// Sign In Queries..
{ 
    $sql ="SELECT username FROM newtable WHERE username='$LoginName' AND password='$LoginPwd'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "login accepted";
        die();

        // output data of each row
    //  $row = mysqli_fetch_assoc($result);
    //  echo "<pre>";
    //  print_r($row);
    //  die();
           
            if($row["username"] == $LoginName){
                echo "login accepted";
            }
                else{
                    echo "login Rejected";
                }
        } else {
            echo "login Rejected";
        }
    }
    //  else {
    //     echo "0 results";
    // }
// }





// if ($LoginName = $row["username"])
// {
//     echo "Login Accepted <br>";
// }
// else {
//     echo "Login Declined <br>";
// }


// print_r( mysqli_fetch_assoc($result));

// die();




// -- function takes 2 parameter connection and sql variable





$conn->close();
?>