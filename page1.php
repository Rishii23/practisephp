<?php session_start(); ?>

<?php include "header.php"?>
<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>


</body>


</html>