<?php
session_start();
include 'connect_db.php';
include 'header.php';

$id = $_GET['id'];
$subject = $_GET['subject_name'];
// $sub_name = $_GET['subject_name'];

if ($id == '') {
    $id = 1;
};

$Category = $_SESSION["subject"];
$_SESSION["score"] = $score;

$sql_fetch = "SELECT * FROM question_bank WHERE id = '$id' AND subject_name = '$Category' LIMIT 1";

// echo $sql_fetch;
$result = mysqli_query($conn, $sql_fetch);
$row = mysqli_fetch_assoc($result);

// mysqli_close($conn);

?>
 <?php
$my_answer = $_POST['opt'];
$correct_answer =  $row['correct_answer'];


if ($my_answer ==  $correct_answer) {
echo 'Correct Answer';
$score++;
echo 'your Score is' ;
} 

else {
echo 'Wrong Answer <br>';
// echo 'Correct Answer is:' . $correct_answer;
$score--;
}
        ?>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form name="answers_option" action="" method="POST">
                    <div class="box">
                        <div class="container">
                            <div class="paper_name">
                                <h2>
                                    <?php echo $_SESSION["subject"]; ?> Exam
                                </h2>
                            </div>
                        </div>

                        <div class="box question">
                            <h3>
                                <span> Q: </span>
                                <?php echo $row['question'] ?>
                            </h3>
                        </div>


                        <div class="box option">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" id="radio1" name="opt" value="<?php echo $row['option_a'] ?>">
                                    <span> <?php echo $row['option_a'] ?>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="box option">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" id="radio2" name="opt" value="<?php echo $row['option_b'] ?>">
                                    <span> <?php echo $row['option_b'] ?>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="box option">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" id="radio3" name="opt" value="<?php echo $row['option_c'] ?>">
                                    <span> <?php echo $row['option_c'] ?>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="box option">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" id="radio4" name="opt" value=" <?php echo $row['option_d'] ?>">
                                    <span> <?php echo $row['option_d'] ?>
                                    </span>
                                </label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mt-3 pull-left">
                                <div class="Previous">
                                    <?php
                                    $sql_fetch = "SELECT * FROM question_bank WHERE id < '$id' AND subject_name = '$Category' LIMIT 1";
                                    $result = mysqli_query($conn, $sql_fetch);
                                    $row = mysqli_fetch_assoc($result);
                                    ?>
                                    <a class="btn btn-primary" href="http://localhost/practisephp/start_test.php?id=<?php echo $row['id']; ?>"> Previous </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" name="submit"> Submit </button>
                            </div>
                            <div class="col-md-4 mt-3 ">
                                <div class="Submit pull-right">
                                    <?php
                                    $sql_fetch = "SELECT * FROM question_bank WHERE id > '$id' AND subject_name = '$Category' LIMIT 1";
                                    $result = mysqli_query($conn, $sql_fetch);
                                    $row = mysqli_fetch_assoc($result);
                                    ?>
                                    <a class="btn btn-primary" href="http://localhost/practisephp/start_test.php?id=<?php echo $row['id']; ?>">Save & Next </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <p>
                   

                </p>
            </div>
            <div class="col-md-4">
                <div class="box">
                    <h4> <?php echo date("d/m/y") ?> </h4>
                    <h5 id="counter"></h5>
                    <hr>
                    <div class="select_question">
                        <?php
                        $a = 1;
                        while ($a <= 20) {
                            echo '<a> <h3 class="green_bck">' . $a . '</h3> </a>';
                            $a++;
                        }
                        ?>

                    </div>
                </div>
                <div class="float-right">

                    <p>User Name: <?php echo $_SESSION["user"]; ?> </p>
                </div>
            </div>
        </div>
    </div>


</body>

<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Oct 22, 2019 14:37:25").getTime();

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
        document.getElementById("counter").innerHTML = hours + "h" +
            minutes + "m " + seconds + "s";

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("counter").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>
<script>
    $(document).ready(function() {
        $("button").click(function() {
            $("p").toggle(".green_bck");
        });
    });
</script>
<?php include 'footer.php' ?>