<?php include "header.php" ?>   
     
<section class="login-block" >
	<div class="container">
		<div class="row">
			
			<div class="col-md-12 mt-5 ">
				<div class="login-from text-center white-bg">					
					<h2>Login </h2>
					<h5>Use your credentials to access your account.</h5>

					

				
					<form id="sign_up_form" action="database.php" method="post"  class="LoginUpForm" novalidate>
					
					  <div class="form-group">
						<input type="email" class="form-control" name="LoginName" id="email" placeholder="User Name:" required>
					  </div>
					<div class="form-group">
					    <!--<label for="pwd">Password:</label>-->
						    <input type="password" class="form-control" name="LoginPassword" id="pwd" placeholder="Password:" required>
					  </div>
					 
					<button class="btn btn-primary"> SIGN IN </button>
				
					 
					</form>
		
					 <h6 class="mt-3">Don't have an account?<span>
						 <a href="signup.php" > Sign up  </a> <span></h6>
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
     


