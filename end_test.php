<?php
session_start();
include 'connect_db.php';
include 'header.php';

// if($_POST!= ""){

// }

$id = $_GET['id'];
$subject = $_GET['subject_name'];
// $sub_name = $_GET['subject_name'];

if ($id == '') {
    $id = 1;
};
$Category = $_SESSION["subject"];
$result = $_SESSION["result"];
$score = $_SESSION["score"];

$sql_fetch = "SELECT * FROM question_bank WHERE id = '$id' AND subject_name = '$Category' LIMIT 1";

// echo $sql_fetch;

$result = mysqli_query($conn, $sql_fetch);

$row = mysqli_fetch_assoc($result);

// mysqli_close($conn);

?>

<body>
   
    <div class="container">

        <div class="row">
            <div class="col-md-12 text-center">
                <h2> Your Test is Completed </h2>

                <h4> Your Score is: <?php echo $result ?> </h4>
                <h4> Qualified:
                    <?php
                    if ($score > 8) {
                        echo "<h3> Passed! </h3>";
                    } else {
                        echo "<h3> Please try Again Later </h3>";
                    }
                    ?>
                </h4>
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