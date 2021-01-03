<?php require_once 'header.php'; ?>
<?php 
$sitekey ='6Lc5-gQaAAAAAOtB16Ftl-9cJ9yz-gAkM_Eb16y8';
$secretkey='6Lc5-gQaAAAAANN71A2RpZg1F-N9-AA8aAYuoSUq';
if(isset($_GET['errors']))


{
	$errors = unserialize(urldecode($_GET['errors']));

}
?>

	<div id="fh5co-gallery">
		<div class="container ">
			<div class="row">
				
			<?php if(!empty($errors)):?>
                  <div class="alert alert-danger">
                 <p> you have not completed the form correctly  </p>
                  <ul>  
                  <?php foreach($errors as $error):?>
                     <li><?= $error; ?>   </li>
                  <?php endforeach; ?>
                  </ul>
                 </div>
                 <?php endif; ?>
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Sign Up</h2>
				</div>
			</div>
		</div>
	</div>
	<div id="layoutAuthentication">
		<div id="layoutAuthentication_content">
			<main>
				<div class="container">
					<div class="row justify-content-center">
				
						
								<div class="card-body">
								 <form action="User/signup_acces.php" method="POST">
										<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="firstname">First Name</label>
													<input class="form-control py-4"  name="firstname" type="text" placeholder="Enter name" required/>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="lastname">Last Name</label>
													<input class="form-control py-4"  name="lastname" type="text" placeholder="Enter lastname"required />
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="small mb-1" for="birthday">Birthday</label>
											<input class="form-control py-4"  name="birthday" type="date"  required/>
										</div>
										<div class="form-group">
											<label class="small mb-1" for="phone">Phone number</label>
											<input class="form-control py-4"  name="phone" type="int"  placeholder="Enter phone number" required/>
										</div>
										<div class="form-group">
											<label class="small mb-1" for="email">Email</label>
											<input class="form-control py-4"  name="email" type="email" aria-describedby="emailHelp" placeholder="Enter email adress "  />
										</div>
										<div class="form-group">
											<label class="small mb-1" for="username">Username</label>
											<input class="form-control py-4" type="text" name="username" placeholder="Enter Username" required/>
										</div>
										
												<div class="form-group">
													<label class="small mb-1" for="gender">gender</label>
                                                                    <br>
													<input type="radio" name="gender" value="male" checked="checked">
													<label for="gender">Male</label> 
													<input type="radio" name="gender"  value="female" >
													<label for="gender">Female</label>
												</div>
											
										<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="weight">Weight</label>
													<input class="form-control py-4" type="int" name="weight" placeholder="Enter weight" required/>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="height">Height</label>
													<input class="form-control py-4" type="int" name="height" placeholder="Enter height" required/>
												</div>
											</div>
										</div>
										<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="country">Country</label>
													<input class="form-control py-4"  type="text" name="country" placeholder="Enter country" required/>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="zipcode">Zip code</label>
													<input class="form-control py-4" type="int" name="zipcode" placeholder="Entrer zipcode" required/>
												</div>
											</div>
										</div>
										<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="goalweight">Weight goal</label>
													<input class="form-control py-4"   type="int" name="goalweight" placeholder="Enter your weight goal " required/>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="sport">Sport</label>
													<input class="form-control py-4"  name="sport" type="text" placeholder="Entrer your favorite sport" />
												</div>
											</div>
										</div>
										<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="password">Password</label>
													<input class="form-control py-4"  name="password" type="password" placeholder="Enter password" required/>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="password">Confirm Password </label>
													<input class="form-control py-4"  name="password2" type="password" placeholder="Confirm password" required/>
												</div>
											</div>
										</div>
										
										<br>
										<div class="form-group mt-4 mb-0 "></div>
								
										<input type="submit" class="btn btn-primary" value="Sign up" />
										<div class="g-recaptcha" data-sitekey="<?php echo $sitekey ;?>"	data-theme="dark"></div>
									</form>
								</div>	
								<div class="card-footer text-center">
									<div class="small"><a href="login.php">Already have an account?</a></div>
									<div class="card-footer text-center">
									<div class="small"><a href="signup_coach.php">DO YOU WANT TO WORK WITH US ? CLICK HERE</a></div>
								</div>
								</div>
								
								
							</div>
						
					
				</div>
			</main>
		</div>

	
  <?php require_once 'footer.php'; ?>
	