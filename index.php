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
        <div class="heading">
<h2> Hello world! </h2>


<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

<?php
$a =30.5; // variable declaration
$b=20;
$a+=$b; 
echo "<br> Value would be:";

echo $a;
echo "<br> Value would be:";
echo strlen("hello"); // function to count word count.
echo "<br> word Count would be:";
echo str_word_count("hello world"); // function to count word count.
echo "<br> word Count would be:";
echo strrev("hello world"); // function to reverse String.
echo "<br> search word  would be:";
echo strpos("hello world","world"); // String position.
echo "<br> replace word  would be:";
echo str_replace("World","Hey","hello World"); // String position.
define("rishabh",23,true); // Declaration of Constant , Case Sensetive True.!! 
echo rishabh;

?>
</div>

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
    $favcolor = "white"; // can be changed 
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

<div class="row">
    <div class="loop_concept col-lg-4">
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
        echo "<br> for loop <br>";
        //for (init counter; test counter; increment counter) { code to be executed }
        for ($x = 0; $x <= 5; $x++) {
            echo "$x <br>";
        }
        //The foreach loop works only on arrays, and is used to loop through each key/value pair in an array. 
        echo "<br> foreach loop <br>";
        
        $colors = array ("red","blue","yellow","green");
        foreach($colors as $value){
            echo "$value <br>";
        }
      
     ?>
     </div>
     <div class="col-lg-4">
     <h6> Functions Basic </h6>
     <?php   echo "<br> Functions Addition, Sub Mul,Div <br>";
     $a =10
     ;
     $b=10;
  echo "$a + $b = " . sum($a,$b) . "<br>";
  echo "$a - $b = " . sub($a,$b) . "<br>";
  echo "$a * $b = " . mul($a,$b) . "<br>";
  echo "$a / $b = " . div($a,$b) . "<br>";

        function sum($x, $y) {
            $z = $x + $y;
            return $z;
        }      
        
       
        function sub($x, $y) {
               $z = $x - $y;
            return $z;
        }        
      
      
        function mul($x, $y) {
            $z = $x * $y;
            return $z;
        }
        
      
     

        function div($x, $y) {
            $z = $x / $y;
            return $z;
        }
        
      
     
        ?>
         </div>
     <div class="col-lg-4">
<!-- If you have a list of items (a list of car names, for example), storing the cars in single variables could look like this:
array() function is used to create array.    -->
<h5>  Indexed Array </h5>
     <?php
$cars = array("Volvo", "BMW", "Toyota"); 
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
// Count Elements in array

echo ("<p> <br> count Array elements <br> </p>");  
echo count($cars);
?>
<p> Printing Values from loop </p>
<?php

$arrlength =count($cars);
for ($x=0; $x < $arrlength; $x++)
{
    echo $cars[$x];
    echo "<br> ";
}

?>


<h5>  Associative Array </h5>
<p>are arrays that use named keys that you assign to them. </p>
<br>
<?php

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old <br>.";
echo " <br> by ForEach Loop using Key=>Value; <br> Key-Value Pairs in foreach loop. <br>       ";

//using Key=>Value; Key-Value Pairs in foreach loop.
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
   ?>
 
         </div>
         <div class="col-lg-12">
         <h5> Sorting array elements </h5>
         <?php 
         $a=array('red','orange','purple');
         ?>
         </div>

</div>
<div class="col-lg-12">
<h5> Sorting of array </h5>
<div class="start">

<?php
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
?>
<section class="superGlobals">
<div class="container">

<div class="col-lg-12"> 
<h3> Super Global's </h3>
<p> 
<?php
echo ("Several predefined variables in PHP are superglobals, which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.");
echo "<br>";

echo $_SERVER['PHP_SELF' ];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
// echo $_ SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";

?>
 </p>
</div>
</div>
</section>



</div>
</div>

</body>
</html>