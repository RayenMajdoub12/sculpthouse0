<?php require_once 'header.php'; ?>
<?php 
$sitekey ='6Lc5-gQaAAAAAOtB16Ftl-9cJ9yz-gAkM_Eb16y8';
$secretkey='6Lc5-gQaAAAAANN71A2RpZg1F-N9-AA8aAYuoSUq';
?>
	<div id="fh5co-gallery">
		<div class="container ">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Job Application</h2>
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
								 <form action="User/coach_acces.php" method="POST">
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
											<input class="form-control py-4"  name="email" type="email" aria-describedby="emailHelp" placeholder="Enter email adress " required />
                                            <!-- changer en upload img       -->
                                        <div class="form-group">
											<label class="small mb-1" for="cv">CV</label>
											<input class="form-control py-4" type="text" name="cv" placeholder="Enter cv" required/>
										</div>
										
												<div class="form-group">
													<label class="small mb-1" for="gender">Gender</label>
                                                                    <br>
													<input type="radio" name="gender" value="male" checked="checked">
													<label for="gender">Male</label> 
													<input type="radio" name="gender"  value="female" >
													<label for="gender">Female</label>
												</div>
                                                <div class="form-group">
													<label class="small mb-1" for="work">Work</label>
                                                                    <br>
													<input type="radio" name="work" value="chef" >
													<label for="work">Chef</label> 
													<input type="radio" name="work"  value="coach" >
													<label for="work">Coach</label>
												</div>  
                                                <div class="form-group">
													<label class="small mb-1" for="online">Do You Want To Work Online ?</label>
                                                                    <br>
													<input type="radio" name="online" value="yes" >
													<label for="online">Yes</label> 
													<input type="radio" name="online"  value="no" >
													<label for="online">No</label>
												</div>  
                                               
                                                <div class="form-row">
                                                <div class="col-md-6">
										<div class="form-group">
											<label class="small mb-1" for="username">Username</label>
											<input class="form-control py-4" type="text" name="username" placeholder="Enter Username" required/>
										</div>
                                        </div>
										</div>

											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="speciality">Speciality</label>
													<input class="form-control py-4"  name="speciality" type="text" placeholder="Entrer your Speciality" required />
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="country">Country</label>
													<input class="form-control py-4"  name="country" type="text" placeholder="Entrer your Country" required />
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="zipcode">Zipcode</label>
													<input class="form-control py-4"  name="zipcode" type="int" placeholder="Entrer your Zipcode" required />
												</div>
											</div>
									
										
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
									
										
										<br>
										<div class="form-group mt-4 mb-0 "></div>
										<input type="submit" class="btn btn-primary" value="Confirm application" />
                                        <div class="g-recaptcha" data-sitekey="<?php echo $sitekey ;?>"	data-theme="dark"></div>
										
										
										
									</form>
								</div>	
								<div class="card-footer text-center">
									<div class="small"><a href="login.php">Already have an account?</a></div>
								</div>
								
								
							</div>
						
					
				</div>
			</main>
		</div>
	
  <?php require_once 'footer.php'; ?>
	

