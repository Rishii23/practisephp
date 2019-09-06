
<?php
session_start();
?>
<?php include "header.php"?>

<body>

    	<!-- Object & Classes -->
    	<!-- Getter Setter Functions  -->
    	<!-- Class Variables  -->
    	<!-- Static Variables -->
    	<!-- Exception Handling -->
    	<!-- Access Class Members,(Variables/functions) -->
    	<!--Private Public access Modifiers-->
    	<!--Class Functions Declaration, Defination-->
        <!--  -->
        <!-- OOPS Concept. W.r.t PHP & Implement on Xampp -->
        <!--  -->
        <!-- SQL -phpmyadmin -->
    	<!-- Read(sql Select,sql Function,sql Join Subqueries,%like) /implement/delete/update -->
        <!--  -->
        <!-- Impliment PHp Concept. with DB -->
        <!--  -->
        <!-- Model View Controller -->




<div class="form_area">
    <form action="form.php" method="post">
    Name: <input type="text" name="name" ><br>
    E-mail: <input type="text" name="email"><br>
    Contact <input type="number" name ="contact">
    <input type="submit">
    </form>
    contact number is: <?php echo $_POST['contact']; ?> <br>

    Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>


<?php
// Echo session variables that were set on previous page
echo " <br>Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
?>
</div>

</body>


</html>