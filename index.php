<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
 
    </div>

</body>
</html>