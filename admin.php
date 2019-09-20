<?php include 'header.php'?>
<body>

<div class="container">
<div class="row">
<div class="col-md-12 mt-4 ">

<div class="container">
  <h2>Admin Panel</h2>
  

  <ul class="nav nav-tabs settings">
    <li class="active">
      <a data-toggle="tab" href="#home">Settings </a>
    </li>
    <li><a data-toggle="tab" href="#menu1">Change Password</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Add Question</h3>
     <div class="container">

     <form action="add_ques.php" method="POST">
    <div class="form-group">
      <label for="Ques">Add Question:</label>
      <input type="text" class="form-control" name="ques">
    </div>
    <div class="form-group">
      <label for="text"> Enter Answer</label>
      <input type="text" class="form-control" name="answer">
    </div>
    <div class="form-group">
      <button class="btn btn-primary"> Add Question </button>
    </div>
  </form>

</div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3 >Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>

</div>
</div>
</div>
</body>


<?php include 'footer.php' ?>