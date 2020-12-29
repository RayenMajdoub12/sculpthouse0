
<?php require_once 'header.php'; 
 require 'User/db.php' ;
 
 if($_GET['type'] =='user')
 {
$req=$pdo ->prepare('SELECT * FROM users WHERE id=:num LIMIT 1');
$req->bindValue(':num',$_GET['id'],PDO::PARAM_INT);
 $executedone=$req->execute();
 $user=$req->fetch();
 }
 else if ($_GET['type'] =='employee')
 {
    $req=$pdo ->prepare('SELECT * FROM employee WHERE id=:num LIMIT 1');
    $req->bindValue(':num',$_GET['id'],PDO::PARAM_INT);
     $executedone=$req->execute();
     $user=$req->fetch();

 }
?>
<!-----modif of user------------>
<?php if($user->type=='user') : ?>
<div id="fh5co-gallery">
		<div class="container ">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>HELLO <?= $user->username;?></h2>
				</div>
			</div>
		</div>
	</div>
	<div id="layoutAuthentication">
		<div id="layoutAuthentication_content">
			<main>
				<div class="container">
					<div class="row justify-content-center">

					<form action="edit.php" method="POST">
										<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="firstname">First Name :</label>
													<input class=" form-control" name="firstname" type="text" value="<?= $user->firstname;?>"/>								
												</div>
											</div>
										</div> 
										<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="lastname">Last Name :</label>
													<input class=" form-control"  name="lastname" type="text"  value="<?= $user->lastname;?>"/>								
												</div>
											</div>
										</div> 
										<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="username">Username :</label>
													<input class="form-control "  name="username" type="text" value="<?= $user->username;?>"/>								
												</div>
											</div>
										</div> 
										<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="password">Password :</label>
													<input class="form-control "  name="password" type="text" value="<?= $user->password;?>"/>								
												</div>
											</div>
										</div> 
										<div class="form-row">
											<div class="col-md-6">
										<div class="form-group">
											<label class="small mb-1" for="birthday">Birthday:</label>
											<input class="form-control "  name="birthday" type="date" value="<?= $user->birthday;?>"/>		
										</div>
										</div>
											</div>
										<div class="form-row">
											<div class="col-md-6">
										<div class="form-group">
											<label class="small mb-1" for="phone">Phone number:</label>
											<input class="form-control "  name="phone" type="int" value="<?= $user->phone;?>"/>			
										</div>
										</div>
											</div>
										<div class="form-row">
											<div class="col-md-6">
										<div class="form-group">
											<label class="small mb-1" for="email">Email:</label>
											<input class="form-control "  name="email" type="email" value="<?= $user->email;?>"/>			
										</div>		
										</div>
											</div>		
										<div class="form-row">
											<div class="col-md-6">						
												<div class="form-group">
													<label class="small mb-1" for="gender">Gender:</label>
													<input class="form-control "  name="gender" type="text" value="<?= $user->gender;?>"/>			
												</div>
													</div>
											</div>
											
										<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="weight">Weight:</label>
													<input class="form-control "  name="weight" type="int" value="<?= $user->weight;?>"/>				
												</div>
											</div>
											</div>
											<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="height">Height:</label>
													<input class="form-control "  name="height" type="int" value="<?= $user->height;?>"/>				
												</div>
											</div>
										</div>
										<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="country">Country:</label>
													<input class="form-control "  name="country" type="text" value="<?= $user->country;?>"/>				
												</div>
											</div>
											<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="zipcode">Zip code:</label>
													<input class="form-control "  name="zipcode" type="int" value="<?= $user->zipcode;?>"/>				
												</div>
											</div>
										</div>
										<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="goalweight">Weight goal:</label>
													<input class="form-control "  name="goalweight" type="int" value="<?= $user->goalweight;?>"/>				
												</div>
											</div>
											<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="sport">Sport:</label>
													<input class="form-control "  name="sport" type="text" value="<?= $user->sport;?>"/>			
												</div>
											</div>
										</div>
										<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="id">Your ID is:</label>
													<input class="form-control "  name="id" type="int" value="<?= $user->id;?>"/>			
												</div>
											</div>
										</div>
                                        <div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="type">User:</label>
													<input class="form-control "  name="type" type="text" value="<?= $user->type;?>"/>			
												</div>
											</div>
										</div>
										</div>
										</div>
										</div>
										<input type="submit" class="btn btn-primary" value="Save" />
										<button class="btn btn-theme04" type="button"onclick="window.location.href = 'profile.php';">Profile</button>
										</form>
										</div>      
										</main>
						<?php endif ;?>				

    <!-----modif of employee------------>									
 <?php if($user->type=='employee') : ?>
<div id="fh5co-gallery">
		<div class="container ">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>HELLO <?= $user->username;?></h2>
				</div>
			</div>
		</div>
	</div>
	<div id="layoutAuthentication">
		<div id="layoutAuthentication_content">
			<main>
				<div class="container">
					<div class="row justify-content-center">

					<form action="edit.php" method="POST">
										<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="firstname">First Name :</label>
													<input class=" form-control" name="firstname" type="text" value="<?= $user->firstname;?>"/>								
												</div>
											</div>
										</div> 
										<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="lastname">Last Name :</label>
													<input class=" form-control"  name="lastname" type="text"  value="<?= $user->lastname;?>"/>								
												</div>
											</div>
										</div> 
										<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="username">Username :</label>
													<input class="form-control "  name="username" type="text" value="<?= $user->username;?>"/>								
												</div>
											</div>
										</div> 
										<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="password">Password :</label>
													<input class="form-control "  name="password" type="text" value="<?= $user->password;?>"/>								
												</div>
											</div>
										</div> 
										<div class="form-row">
											<div class="col-md-6">
										<div class="form-group">
											<label class="small mb-1" for="birthday">Birthday:</label>
											<input class="form-control "  name="birthday" type="date" value="<?= $user->birthday;?>"/>		
										</div>
										</div>
											</div>
										<div class="form-row">
											<div class="col-md-6">
										<div class="form-group">
											<label class="small mb-1" for="phone">Phone number:</label>
											<input class="form-control "  name="phone" type="int" value="<?= $user->phone;?>"/>			
										</div>
										</div>
											</div>
										<div class="form-row">
											<div class="col-md-6">
										<div class="form-group">
											<label class="small mb-1" for="email">Email:</label>
											<input class="form-control "  name="email" type="email" value="<?= $user->email;?>"/>			
										</div>		
										</div>
											</div>		
										<div class="form-row">
											<div class="col-md-6">						
												<div class="form-group">
													<label class="small mb-1" for="gender">Gender:</label>
													<input class="form-control "  name="gender" type="text" value="<?= $user->gender;?>"/>			
												</div>
													</div>
											</div>
									
										<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="country">Country:</label>
													<input class="form-control "  name="country" type="text" value="<?= $user->country;?>"/>				
												</div>
											</div>
											<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="zipcode">Zip code:</label>
													<input class="form-control "  name="zipcode" type="int" value="<?= $user->zipcode;?>"/>				
												</div>
											</div>
										</div>
										<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="id">Your ID is:</label>
													<input class="form-control "  name="id" type="int" value="<?= $user->id;?>"/>			
												</div>
											</div>
										</div>
                                        <div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="type">User:</label>
													<input class="form-control "  name="type" type="text" value="<?= $user->type;?>"/>			
												</div>
											</div>
										</div>
										</div>
										</div>
										
										<input type="submit" class="btn btn-primary" value="Save" />
										<button class="btn btn-theme04" type="button"onclick="window.location.href = 'profile.php';">Profile</button>
										</form>
										</div>      
										</main>
                                       
                                             
						<?php endif ;?>				
										  



<?php require_once 'footer.php'; ?>