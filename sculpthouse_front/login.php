<?php require 'header.php';?>
<?php 
if(isset($_GET['errors']))


{
	$errors = unserialize(urldecode($_GET['errors']));

}
$sitekey ='6Lc5-gQaAAAAAOtB16Ftl-9cJ9yz-gAkM_Eb16y8';
$secretkey='6Lc5-gQaAAAAANN71A2RpZg1F-N9-AA8aAYuoSUq';
?>
	<div id="fh5co-gallery">
		<div class="container">
			<div class="row">
			<?php if(!empty($errors)):?>
                  <div class="alert alert-danger">
                 
                  <ul>  
                  <?php foreach($errors as $error):?>
                     <li><?= $error; ?>   </li>
                  <?php endforeach; ?>
                  </ul>
                 </div>
                 <?php endif; ?>
    

				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Login</h2>
				</div>
			</div>
		</div>
	</div>
	<div id="layoutAuthentication">
		<div id="layoutAuthentication_content">
			<main>
				<div class="container text-center">
					<div class="row justify-content-center ">
								<div class="card-body ">
								<form action="User/login_acces.php" method="POST">
									
									
										<div class="form-group">
											<label class="small mb-1 " for="email">Email or Username</label>
											<input class="form-control py-4" name="username" type="text" placeholder="Enter email adress or username" />
										</div>
										<div class="form-group">
											<label class="small mb-1" for="password">Password</label>
											<input class="form-control py-4" name="password" type="password" placeholder="Enter password" />
										</div>
										<div class="form-group">
											<div class="custom-control custom-checkbox">
												<input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
												<label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
											</div>
										</div>
										<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
											<a class="small" href="pwd_forgot.php">	Forgot your password?</a>
											<input type=submit class="btn btn-primary" value="Connect" />
										</div>
										<div class="g-recaptcha" data-sitekey="<?php echo $sitekey ;?>"	data-theme="dark"></div>
									</form>
								</div>
								<div class="card-footer text-center">
									<div class="small"><a href="signup.php">Need an account?</a></div>
								</div>
							</div>
				</div>
			</main>
		</div>
		
	</div>
	

	<?php require 'footer.php';?>