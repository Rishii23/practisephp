<?php include"header.php" ?>

    <!-- Object & Classes -->
    <!-- Getter Setter Functions  -->
    <!-- Class Variables  -->
    <!-- Static Variables -->
    <!-- Exception Handling -->
    <!-- Access Class Members,(Variables/functions) -->
    <!--Private Public access Modifiers-->
    <!--Class Functions Declaration, Defination-->
    <!--  -->
    <!-- OOPS Concept. w.r.t PHP & Implement on Xampp -->
    <!--  -->
    <!-- SQL -phpmyadmin -->
    <!-- Read(sql Select,sql Function,sql Join Subqueries,%like) /implement/delete/update -->
    <!--  -->
    <!-- Impliment PHp Concept. with DB -->

    <!--  -->
    
    <!-- Model View Controller -->

    <hr class="generic">
    <div class="multiArray">

        <?php


    $cars = array
    (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
    );
      
    echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
    echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
    echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
    echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
    ?>
        <?php 
$friends = array(
    array("rishabh",23,1995),
    array("Yogesh",24,1996),
    array("sahitya",26,1996),
);

for ($row =0; $row < 3 ; $row++)  {
    echo "<p> <b> Row Number $row </b> </p>";
    echo "<ul>";
    
for ($col=0; $col<3; $col++)
{
    echo "<li>".$friends[$row][$col]."</li>";
}

    echo"</ul>";
}  
?>
    

    <?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
?>
</div>
</body>

<?php include"header.php" ?>


