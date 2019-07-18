<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="header">
    <h1> Test </h1>
    <?php 
    $a=20;
    $b=30;
    $txt= "Hello World!";
    echo ($txt); // Calling via Variable.
    echo "<br>";
    echo $a; 
    echo "<br>";
    echo $b; 
    echo "<br>";
    echo ($a + $b);
    echo "<br>";

    echo strlen("Rishabh");
    echo "<br>";
    if ($a <"20"){
        echo "Value is greater 20";
    }
    else 
    echo "less";
    
    echo "<br>";
    $favcolor = "white"; // can be dynamically changed
    switch ($favcolor)
    {
        case "red": echo ("color is red");
        break;
        case "blue": echo ("color is blue");
        break;
        case "green": echo ("color is green");
        break;
default : echo ("no color selected");
    }
?>
<div class="loop_concept     ">
<?php 
    //While Loop: The while loop executes a block of code as long as the specified condition is true.
    echo "<br> While Loop <br>";
    $x = 1;
 
while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
} 
echo "<br> Do While loop <br>";
//The do...while loop will always execute the block of code once, it will then check the condition, and repeat the loop while the specified condition is true.
$x = 1;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);
 
 
 
 ?>
     </div>

</body>
</html>