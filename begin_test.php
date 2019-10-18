<?php include 'connect_db.php' ?>

<?php
// $id = $_GET['id'];
// if ($id == '') {
//     $id = 163;
// };
$UserName= $_POST['fname'];
$Category= $_POST['subject_select'];

$sql_enter = "INSERT INTO newtable (name,category) VALUES ('$UserName','$Category')";
$result = mysqli_query($conn, $sql_enter);+

$row = mysqli_fetch_assoc($result);

 // page after submition
 if ($result) {
    echo "New record created successfully";
}
else {
    echo "Error creating database: " . $conn->error;
}
$conn->close();

?>   

?>

<?php include 'header.php' ?>

<?php
// Start the session
session_start();
?>

<?php
// Set session variables
// $_SESSION["favcolor"] = "green";
// $_SESSION["favanimal"] = "cat";
// echo "Session variables are set.";
// 
?>

<body>
    <div class="container">
        <div class="col-md-12">
            <div class="start_form">
                <form action="start_test.php" class="was-validated" method="post">
                    <div class="form-group">
                        <label for="uname">User Name:</label>
                        <input type="text" class="form-control" name="fname" placeholder="Enter Full name" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="uname">Select Subject Category:</label>
                        <select name="subject_select">
                            <option value="English">English </option>
                            <option value="Science">Science </option>
                            <option value="Geography">Geography </option>
                            <option value="Foriegn Language">Foriegn Language </option>
                        </select>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary" type="submit"> Submit </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>



<?php include 'footer.php' ?>