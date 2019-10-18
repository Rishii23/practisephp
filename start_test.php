<?php include 'connect_db.php' ?>

<?php
$id = $_GET['id'];
if ($id == '') {
    $id = 1;
};
$sql_fetch = "SELECT id,question, option_a , option_b , option_c , option_d  FROM question_bank where id= $id limit 1";
$result = mysqli_query($conn, $sql_fetch);
$row = mysqli_fetch_assoc($result);
mysqli_close($conn);
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

<?php

while ($counter >= 1) {
    $counter--;
    echo ($counter . "value decreased");
}

?>


<body>
    <div class="container">
        <form>
            <div class="row">
                <div class="col-md-8">
                    <div class="box">
                        <div class="container">
                            <div class="paper_name">
                                <h2> Science Exam </h2>


                            </div>
                        </div>


                        <div class="box question">
                            <h3><span> Q: </span> <?php echo $row['question'] ?> </h3>
                        </div>


                        <form action="#">
                            <div class="box option">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked><span><?php echo $row['option_a'] ?> </span>
                                    </label>
                                </div>
                            </div>
                            <div class="box option">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked><span>
                                            <?php echo $row['option_b'] ?> </span>
                                    </label>
                                </div>
                            </div>
                            <div class="box option">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked><span><?php echo $row['option_c'] ?> </span>
                                    </label>
                                </div>
                            </div>
                            <div class="box option">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked><span><?php echo $row['option_d'] ?> </span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="correct_answer">
                                        <p> Correct answer </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">

                                    <div class="wrong_answer">
                                        <p> Wrong answer </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mt-3 pull-left">
                                    <div class="Previous ">
                                        <a class="btn btn-primary" href="http://localhost/practisephp/start_test.php?id=<?php echo $row['id'] - 1; ?>"> previous </a>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3 ">
                                    <div class="Submit  pull-right">
                                        <a class="btn btn-primary " href="http://localhost/practisephp/start_test.php?id=<?php echo ($row['id'] + 1); ?>"> next </a>
                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <h4> <?php echo  date("d/m/y") ?> </h4>
                        <h5 id="counter"></h5>
                        <hr>
                        <div class="select_question">
                            <?php
                            $a = 1;
                            while ($a <= 20) {
                                echo '<h3 class=" green_bck">' . $a . '</h3>';
                                $a++;
                            }
                            ?>
    
                        </div>
                    </div>
                </div>
            </div>
</body>
<script>
    $.noConflict();
    // $(document).ready(function() {
    //     var min = 12;
    //     var sec = 30;

    //     // while (min > 0) {
    //     //     min--;
    //     //     while (sec > 0) {
    //     //         sec--;
    //     //     }
    //     // }
    //     document.getElementById("counter").innerHTML = min + sec;
    // )


    // });
</script>
<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Oct 18, 2019 14:37:25").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds

        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("counter").innerHTML = hours + "h " +
            minutes + "m " + seconds + "s ";

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("counter").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>

<?php include 'footer.php' ?>