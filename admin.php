<?php include 'connect_db.php' ?>

<?php

$ques = $_POST["ques"];
$answer = $_POST["correct_ans"];
$option_a = $_POST["option_a"];
$option_b = $_POST["option_b"];
$option_c = $_POST["option_c"];
$option_d = $_POST["option_d"];
$button_submit = $_POST["submit_btn_ques"];
$subject = $_POST["sub_name"];


// if (issset($submit_ques)){
if (isset($button_submit)) {

  $sql_insert = "INSERT INTO question_bank (question,correct_answer,option_a,option_b,option_c,option_d,subject_name) VALUE ('$ques','$answer','$option_a','$option_b','$option_c','$option_d','$subject')";

  $result = mysqli_query($conn, $sql_insert);
  if ($result) {
    echo "Sucessful";
  } else {
    echo "Error creating database: " . $conn->error;
  };
};


$conn->close();

?>

<?php include 'header.php' ?>

<body>

  <div class="container">
    <div class="row">
      <div class="col-md-12 mt-4 ">

        <div class="container">
          <h2>Admin Panel</h2>


          <ul class="nav nav-tabs settings">
            <li class="active">
              <a data-toggle="tab" href="#home">Add Question </a>
            </li>
            <li><a data-toggle="tab" href="#menu1">Change Password</a></li>
          </ul>

          <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
              <h3>Add Question</h3>
              <div class="container">

                <form action="" method="POST">

                  <div class="form-group">
                    <label for="Ques">Add Question:</label>
                    <input type="text" class="form-control" name="ques">
                  </div>
                  <div class="form-group">
                    <label for="Ques">Subject Name:</label>
                    <select name="sub_name">
                      <option value="English">English </option>
                      <option value="Science">Science </option>
                      <option value="Geography">Geography </option>
                      <option value="Foriegn Language">Foriegn Language </option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="Ques">Correct Answer </label>
                    <input type="text" class="form-control" name="correct_ans">
                  </div>
                  <div class="form-group">
                    <label for="Ques">Option A:</label>
                    <input type="text" class="form-control" name="option_a">
                  </div>
                  <div class="form-group">
                    <label for="Ques">Option B:</label>
                    <input type="text" class="form-control" name="option_b">
                  </div>
                  <div class="form-group">
                    <label for="Ques">Option C:</label>
                    <input type="text" class="form-control" name="option_c">
                  </div>
                  <div class="form-group">
                    <label for="Ques">Option D:</label>
                    <input type="text" class="form-control" name="option_d">
                  </div>

                  <div class="form-group">
                    <button class="btn btn-primary" type="submit" name="submit_btn_ques"> Add Question </button>
                  </div>
                </form>

              </div>
            </div>
            <div id="menu1" class="tab-pane fade">
              <form action="" method="POST">

                <div class="form-group">
                  <label for="oldpwd">OLD Password:</label>
                  <input type="text" class="form-control" name="old_pwd">
                </div>
                <div class="form-group">
                  <label for="newpwd">New Password:</label>
                  <input type="text" class="form-control" name="new_pwd">
                </div>
                <button type="submit" class="btn- btn-active"> Change Password </button>
              </form>
            </div>
            <div id="menu2" class="tab-pane fade">
              <h3>Menu 2</h3>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
</body>


<?php include 'footer.php' ?>