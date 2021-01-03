<?php require 'header.php' ;
$errors=array();
$user_email=$_GET['email'];
$token=$_GET['token'];
$current_date=date('U'); 
require 'User/db.php' ;
$req = $pdo->prepare("SELECT * FROM pwdreset WHERE pwd_reset_email = ? AND pwd_reset_expires >= ?");
$req->execute([$user_email,$current_date]);
$user = $req->fetch();
if($user && $user->pwd_reset_token==$token && isset($_POST['password'])&&isset($_POST['password2']))
 { 
    if($_POST['password']==$_POST['password2']){
                  
     $pdo->prepare('UPDATE users SET password=? WHERE email = ?')->execute([$_POST['password'],$user->pwd_reset_email]);
       header('Location:login.php?notification=success');
    }
    else{
        echo "you must enter a valid password";
    }
    
 }
else {
    if($user->pwd_reset_token!=$token)
    {
    $errors['token']='the token is not valid' ;
    }
    if($current_date>=$user->pwd_reset_expires)
    {
    $errors['token']='The token has expired resend a mail' ;
    header('location:pwd_forgot');
    }
}

?>

<div id="fh5co-gallery">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>New Password</h2>
				</div>
			</div>
		</div>
	</div>
	<div id="layoutAuthentication">
		<div id="layoutAuthentication_content">
			<main>
            <?php if(!empty($errors)):?>
                  <div class="alert alert-danger">
                 <p> Danger!!!  </p>
                  <ul>  
                  <?php foreach($errors as $error):?>
                     <li><?= $error; ?>   </li>
                  <?php endforeach; ?>
                  </ul>
                 </div>
                 <?php endif; ?>
				<div class="container text-center">
					<div class="row justify-content-center ">
								<div class="card-body ">
								<form action="" method="POST">
									
									
										<div class="form-group">
											<label class="small mb-1 " for="password">New Password</label>
											<input class="form-control py-4" name="password" type="text" placeholder="Enter password ... " required/>
										</div>	
                                        <div class="form-group">
											<label class="small mb-1 " for="password">Confirm New Password</label>
											<input class="form-control py-4" name="password2" type="text" placeholder="Enter password ... " required/>
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