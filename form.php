
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
<script src="index.js"> </script>
</head>

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

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
<a class="navbar-brand" href="/index.php">Welcome Page</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" href="/AdvPHP.php">Advance PHP</a>
</li>
<li class="nav-item">
<a class="nav-link active" href="/form.php">Form</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/test.php">test</a>
</li>    
</ul>
</div>  
</nav>

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