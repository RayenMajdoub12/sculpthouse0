<?php require_once 'header.php'; ?>
<?php if(!isset($_SESSION['auth']))
{
$_SESSION['flash']['danger']="you do not have the right to access your account";
header('location:login.php');
exit();
}
if(!empty($_POST)){
  if($_POST['password']!=$_POST['password2']){
     $_SESSION['flash']['danger']= 'The passwords does not match';
  }
  else{
   $user_id =$_SESSION['auth']->id;
   require_once 'User/db.php';
   $pdo->prepare('UPDATE users SET password = ? WHERE id = ?')->execute([$_POST['password'],$user_id]);
   $_SESSION['flash']['success']='your password has been changed';
    
}

}
?>


<div id="fh5co-gallery">
		<div class="container ">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Edit your password</h2>
				</div>
			</div>
		</div>
	</div>
                                       <form action="" method="POST">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="password">New Password</label>
													<input class="form-control py-4"  name="password" type="password" placeholder="Enter password" required/>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="password">Confirm Password </label>
													<input class="form-control py-4"  name="password2" type="password" placeholder="Confirm password" required/>
												</div>
											</div>
										<div class="form-group mt-4 mb-0 "></div>
										<input type="submit" class="btn btn-primary" value="Confirm" />
									</form>
                                    
                                    
<?php require_once 'footer.php'; ?>
