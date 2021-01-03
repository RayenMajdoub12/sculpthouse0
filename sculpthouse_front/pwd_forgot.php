<?php require 'header.php' ;
if(isset($_GET['notification']))
{$notif=$_GET['notification'];}
?>

<div id="fh5co-gallery">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Reset Your Password</h2>
                    <p>An email will be sent to you with instructions on how to reset your password . </p> 
				</div>
			</div>
		</div>
	</div>
	<div id="layoutAuthentication">
		<div id="layoutAuthentication_content">
			<main>
       
        

				<div class="container text-center">
					<div class="row justify-content-center ">
                    <?php if($notif=='success') :?>
           <div class="alert alert-success"> An email has been sent Check your email!!! </div>
           <?php endif ;?>
           <?php if($notif!='success') :?>
           <div class="alert alert-danger"> email is not sent there is a problem!!! </div>
           <?php endif ;?>
								<div class="card-body ">
								<form action="pwd_forgot_fnc" method="POST">
									
									
										<div class="form-group">
											<label class="small mb-1 " for="email">Email</label>
											<input class="form-control py-4" name="email" type="text" placeholder="Enter email address.. " />
										</div>
                                    	<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
											
											<input type=submit class="btn btn-primary" value="send" />
									
								</form>
							    </div>
								<div class="card-footer text-center">
									<div class="small"><a href="signup.php">Need an account?</a></div>
								
							    </div>
				</div>
			</main>
		</div>
		</div>
	</div>
	
    </div>
<?php require 'footer.php';?>