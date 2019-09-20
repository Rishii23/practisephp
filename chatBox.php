<?php include "header.php" ?>
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
// $ChatReply = 'Rishabh';
// ********************

$sql_insert = "INSERT INTO newtable (message) VALUE ('$Chat')";

$sql_select = "SELECT message FROM newtable";
//  --where message = $Chat";

$if_Sent = mysqli_query($conn,$sql_insert);

$if_Select = mysqli_query($conn,$sql_select);

$MsgData = mysqli_fetch_row($if_Select);

// echo $MsgData['message'];

// if ($if_Sent) {
//     echo "Sucessful add";  
// }
// else {
//    echo "un-Sucessful";
// }
 
// echo   " <br> $Chat";

// header("Location: http://localhost/practisephp/chatBox.php");

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
<?php 
while ($MsgData > 0){
  echo "$MsgData";
} 

?>
<div class="col-md-10">                  
<div class="ChatPreviewRecieved">
    <p> 
        <?php echo "$MsgData";?>
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
        </div>

<form action="" method="post" class="ChatBoxForm" >
    <div class="row">
                <div class="col-md-12">
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