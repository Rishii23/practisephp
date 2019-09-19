<?php include "header.php" ?>

<? function mysqli() ?>
<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// ***********
// For Sign up Variables
$Chat = $_POST["ChatReply"];

// ********************

$sql_insert = "INSERT INTO newtable message VALUE $Chat";
$sql_Select = "SELECT message FROM newtable";


$result_sql_insert = mysqli_query($conn, $sql_insert);
$result_sql_select = mysqli_query($conn, $sql_Select);


if($result_sql_insert) {
    echo "Sucessful";
   $row = mysqli_fetch_assoc($result_sql_select);
       foreach ($row as $value)
       echo "$value";
    }  


// }
// while($result_sql_select){
//     echo $sql_Select;
// }

$conn->close();
?>

<!--  -->
<section class="Chat-box">
    <div class="container">
        <div class="box">
            <div class="pull-right">
        <button class="btn btn-primary" onclick="refreshPage()"> Refresh </button>
</div>   
        <div class="row">

                <div class="col-md-10">
                    <div class="ChatPreviewRecieved">

                        <p>  <?php echo $Chat; ?>
                          <br> TEXT RECEIVED </p>
                    </div>
                </div>

                <div class="col-md-2"> </div>
                <div class="col-md-2"> </div>

                <div class="col-md-10">
                    <div class="ChatPreviewSent">
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum error inventore beatae voluptas placeat quibusdam explicabo <br> TEXT SENT</p>
                    </div>
                </div>

<form action="" method="post" class="ChatBoxForm" >
                <div class="col-lg-12">
                    <div class="ChatReply">
                        <div class="content">
                            <p> Chat here: </p>
                            <input type="text" name="ChatReply">
                            <div class="SubmitButton">
                            <button class="btn btn-primary"> Send </button>
                             </div>
                        </div>
                    </div>
                </div>              
</form>
</div>
         

        </div>
    </div>
</section>


</body>
<script>
function refreshPage(){
    window.location.reload();
} 
</script>
<?php include "footer.php" ?>