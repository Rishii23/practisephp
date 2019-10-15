<?php include 'connect_db.php' ?>

<?php
$id = $_GET['id'];
if ($id == '') {
    $id = 163;
};
$sql_fetch = "SELECT id,question, option_a , option_b , option_c , option_d  FROM question_bank where id=$id limit 1";
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
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
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
            <div class="box">
                <div class="container">
                    <div class="paper_name">
                        <h2> Science Exam </h2>
                        <h3 id="counter">
                            <?php
                            $hh = 24;
                            $mm = 10;
                            $ss = 12;
                            while ($hh > 24) {
                                $hh--;
                                if ($mm > 60) {
                                    $mm--;
                                    if ($ss > 60) {
                                        $ss--;
                                    };
                                };
                                echo $hh, $mm, $ss;
                            };

                            ?>
                        </h3>

                    </div>
                </div>


                <div class="box question">
                    <h3><span> Q: </span> <?php echo $row['question'] ?> </h3>
                </div>


                <form action="/action_page.php">
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
                                <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked><span><?php echo $row['option_b'] ?> </span>
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
                    <div class="correct_answer">
                        <p> Correct answer </p>
                    </div>
                    <div class="wrong_answer">
                        <p> Wrong answer </p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-3 pull-left">
                            <div class="Previous ">
                                <a class="btn btn-primary" href="http://localhost/practisephp/begin_test.php?id=<?php echo $row['id'] - 1; ?>"> previous </a>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3 ">
                            <div class="Submit  pull-right">
                                <a class="btn btn-primary " href="http://localhost/practisephp/begin_test.php?id=<?php echo ($row['id'] + 1); ?>"> next </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
</body>

<?php include 'footer.php' ?>