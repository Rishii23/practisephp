<?php include "header.php" ?>

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
                        <p> 
                            <?php 
                        
                        echo "$ChatReply"; 
                        
                        
                        ?>
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

<form action="sendmsgDB.php" method="post" class="ChatBoxForm" >
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