<?php include "header.php" ?>   
     
<section class="login-block" >
	<div class="container">
		<div class="row">
			
			<div class="col-md-12 mt-5 ">
				<div class="signup-from text-center bg-green">					
					<h2>Signup </h2>
					<h5>Join Us</h5>

					

				
					<form id="sign_up_form" action="database.php" method="post"  class="LoginUpForm" novalidate>
					
					  <div class="form-group">
					   
					    <input type="email" class="form-control" name="name" id="email" placeholder="Enter Full Name:" required>
					  </div>

					  <div class="form-group">
					   
					    <input type="email" class="form-control" name="email" id="email" placeholder="Enter New Email address:" required>
					  </div>

					  <div class="form-group">			  
					    <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter New Password:" required>
					  </div>
					 
					<button class="btn btn-dark"> SIGN UP </button>
				
					 
					</form>
		
					 <div class="HeaderFooter mt-1 pt-2  ">
						<div class="text-center">
						<span><i class="fa fa-facebook p-1"></i></span>
						<span><i class="fa fa-twitter p-1"></i></span>
						<span><i class="fa fa-instagram p-1"></i></span>
						<span><i class="fa fa-linkedin p-1"></i></span>
						
						</div>
         		   </div>

				</div>
			</div>
			
		</div>
	</div>
	
</section>
<?php include "footer.php" ?>   
     


