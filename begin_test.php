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
<h3><span> Q: </span> <?php echo '$Ques' ?> Enter Question </h3>
</div>


<div class="box answer">
<h5><span> Ans:</span> <?php echo ' $ans' ?>  Enter answer </h5>
</div>
<div class="row">
    <div class="col-md-4 mt-3 pull-left">
<div class="Previous ">
<button class="btn btn-primary"> Previous  </button>
</div>
    </div>
    <div class="col-md-4 mt-3  text-center">
<div class="Submit ">
<button class="btn btn-primary "> Submit  </button>
</div>
    </div>
    <div class="col-md-4 mt-3  ">
<div class="Next pull-right">
<button class="btn btn-primary "> Next  </button>
</div>
    </div>
</div>
    </form>
</div>
</body>
<?php include 'footer.php' ?>