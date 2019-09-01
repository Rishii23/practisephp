<? include "header.php" ?> 

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
        <a class="navba r-brand" href="/index.php">Welcome Page</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/AdvPHP.php">Advance PHP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/form.php">Form</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/test.php">test</a>
                </li>
            </ul>
        </div>
    </nav>
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
    
                for ($col=0; $col<3;$col++)
                {
                    echo "<li>".$friends[$row][$col]."</li>";
                }

    echo"</ul>";
}  
?>
    </div>

    <?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
?>
</body>

<? include "footer.php" ?> 

