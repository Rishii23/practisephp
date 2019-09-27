<?php include 'connect_db.php' ?>
<?php 
$id= $_GET['id'];

if($id =='')
{
$id=163;
};

$sql_fetch = "SELECT id,question, option_a , option_b , option_c , option_d  FROM newtable where id=$id limit 1";

$result = mysqli_query($conn,$sql_fetch);
$row = mysqli_fetch_assoc($result);

mysqli_close($conn);
?>

<?php include 'header.php'?>
<body>
<div class="container">
    <form>
<div class="box">
<div class="container">
    <div class="paper_name">
<h2>  Forensic Science Exam  </h2>
<h3> 10:00:00   </h3>
    </div>
  
</div>
<div class="box question">
<h3><span> Q: </span> <?php echo $row['question'] ?> </h3>
</div>

<div class="box option">
<h6><span><?php echo $row['option_a'] ?> </span>  </h6>
</div>
<div class="box option">    
<h6><span><?php echo $row['option_b'] ?> </span>  </h6>
</div>
<div class="box option">
<h6><span><?php echo $row['option_c'] ?> </span>  </h6>
</div>
<div class="box option">
<h6><span><?php echo $row['option_d'] ?> </span>  </h6>
</div>

<div class="row">
    <div class="col-md-6 mt-3 pull-left">
<div class="Previous ">
<a class="btn btn-primary"href="http://localhost/practisephp/begin_test.php?id=<?php echo $row['id']-1; ?>"  > previous  </a>
</div>
    </div>
    <div class="col-md-6     mt-3 ">
<div class="Submit  pull-right">
<a class="btn btn-primary " href="http://localhost/practisephp/begin_test.php?id=<?php echo ($row['id']+1); ?>"  > next  </a>
</div>
    </div>
  
</div>
    </form>
</div>
</body>

<?php include 'footer.php' ?>