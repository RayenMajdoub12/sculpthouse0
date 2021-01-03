
<?php require_once 'header.php'; ?>
<?php    
 if(!isset($_SESSION['auth']))
{
$_SESSION['flash']['danger']="you do not have the right to access your account";
header('location:login.php');
exit();
}
?>
<!-----profile of user------------>
<?php if($_SESSION['auth']->type == 'user') : ?>
<div id="fh5co-gallery">
		<div class="container ">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>HELLO <?= $_SESSION['auth']->username;?></h2>
				</div>
			</div>
		</div>
	</div>
	<div id="layoutAuthentication">
		<div id="layoutAuthentication_content">
			<main>
				<div class="container">
					<div class="row justify-content-center">
										<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="firstname">First Name :</label>
													<?= $_SESSION['auth']->firstname;?>									
												</div>
											</div>
										</div> 
										<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="lastname">Last Name :</label>
													<?= $_SESSION['auth']->lastname;?>									
												</div>
											</div>
										</div> 
										<div class="form-row">
											<div class="col-md-6">
										<div class="form-group">
											<label class="small mb-1" for="birthday">Birthday:</label>
											<?= $_SESSION['auth']->birthday;?>				
										</div>
										</div>
											</div>
										<div class="form-row">
											<div class="col-md-6">
										<div class="form-group">
											<label class="small mb-1" for="phone">Phone number:</label>
											<?= $_SESSION['auth']->phone;?>				
										</div>
										</div>
											</div>
										<div class="form-row">
											<div class="col-md-6">
										<div class="form-group">
											<label class="small mb-1" for="email">Email:</label>
											<?= $_SESSION['auth']->email;?>				
										</div>		
										</div>
											</div>		
										<div class="form-row">
											<div class="col-md-6">						
												<div class="form-group">
													<label class="small mb-1" for="gender">Gender:</label>
													<?= $_SESSION['auth']->gender?>				
												</div>
													</div>
											</div>
											
										<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="weight">Weight:</label>
													<?= $_SESSION['auth']->weight;?>				
												</div>
											</div>
											</div>
											<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="height">Height:</label>
													<?= $_SESSION['auth']->height;?>				
												</div>
											</div>
										</div>
										<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="country">Country:</label>
													<?= $_SESSION['auth']->country;?>				
												</div>
											</div>
											</div>
											<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="zipcode">Zip code:</label>
													<?= $_SESSION['auth']->zipcode;?>				
												</div>
											</div>
										</div>
										<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="goalweight">Weight goal:</label>
													<?= $_SESSION['auth']->goalweight;?>				
												</div>
											</div>
											</div>
											<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="sport">Sport:</label>
													<?= $_SESSION['auth']->sport;?>				
												</div>
											</div>
										</div>
										<button class="btn btn-primary" type="button"onclick="window.location.href = 'modif.php?id=<?= $_SESSION['auth']->id ?>&type=<?= $_SESSION['auth']->type ?>';">Edit your infos</button>
										</main>
										</div>
										</div>
										</div>
										<?php endif ;?>

<!-----profile of employee------------>

<?php var_dump($_SESSION['auth']);
if($_SESSION['auth']->type =='employee'):?>
<div id="fh5co-gallery">
		<div class="container ">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>HELLO <?= $_SESSION['auth']->username;?></h2>
				</div>
			</div>
		</div>
	</div>
	<div id="layoutAuthentication">
		<div id="layoutAuthentication_content">
			<main>
				<div class="container">
					<div class="row justify-content-center">
										<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="firstname">First Name :</label>
													<?= $_SESSION['auth']->firstname;?>									
												</div>
											</div>
										</div> 
										<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="lastname">Last Name :</label>
													<?= $_SESSION['auth']->lastname;?>									
												</div>
											</div>
										</div> 
										<div class="form-row">
											<div class="col-md-6">
										<div class="form-group">
											<label class="small mb-1" for="birthday">Birthday:</label>
											<?= $_SESSION['auth']->birthday;?>				
										</div>
										</div>
											</div>
										<div class="form-row">
											<div class="col-md-6">
										<div class="form-group">
											<label class="small mb-1" for="phone">Phone number:</label>
											<?= $_SESSION['auth']->phone;?>				
										</div>
										</div>
											</div>
										<div class="form-row">
											<div class="col-md-6">
										<div class="form-group">
											<label class="small mb-1" for="email">Email:</label>
											<?= $_SESSION['auth']->email;?>				
										</div>		
										</div>
											</div>		
										<div class="form-row">
											<div class="col-md-6">						
												<div class="form-group">
													<label class="small mb-1" for="gender">Gender:</label>
													<?= $_SESSION['auth']->gender;?>				
												</div>
													</div>
											</div>
											
										<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="work">Work:</label>
													<?= $_SESSION['auth']->work;?>				
												</div>
											</div>
											</div>
									
										<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="country">Country:</label>
													<?= $_SESSION['auth']->country;?>				
												</div>
											</div>
											</div>
											<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="zipcode">Zip code:</label>
													<?= $_SESSION['auth']->zipcode;?>				
												</div>
											</div>
										</div>
										<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="online">Work Online :</label>
													<?= $_SESSION['auth']->online;?>				
												</div>
											</div>
											</div>
											<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="missed_days">Missed Days:</label>
													<?= $_SESSION['auth']->missed_days;?>				
												</div>
											</div>
										</div>
										<button class="btn btn-primary" type="button"onclick="window.location.href = 'modif.php?id=<?= $_SESSION['auth']->id ?>&type=<?= $_SESSION['auth']->type ?>';">Edit your infos</button>
										</main>
										</div>
										</div>
										</div>
                           <?php endif ;?>



<?php require_once 'footer.php'; ?>