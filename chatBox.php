<?php include "header.php" ?>

<!--  -->
<section class="Chat-box">
    <div class="container">
        <div class="box">
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

<form action="chatboxDB.php" method="post" class="ChatBoxForm" >
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

<?php include "footer.php" ?>