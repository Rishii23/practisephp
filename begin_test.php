<?php 

session_start();

include 'connect_db.php' ;
// Start the session
include 'header.php';

$UserName= $_POST['fname'];
$Category= $_POST['subject_select'];

// Set session variables
$_SESSION["user"] = $UserName;
$_SESSION["subject"] = $Category;

// echo "Session variables are set.";

if ($_SESSION["user"] != NULL && $_SESSION["subject"] != NULL ){

  header("Location:   /practisephp/start_test.php"); 
}
?>

<body>
    <div class="container">
        <div class="col-md-12">
            <div class="start_form">
                <form action="" class="was-validated" method="POST">
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