<?php require_once 'header.php'; ?>
<?php
if((isset($_POST['location']))&&(isset($_POST['city'])))
{
$location=$_POST['location'];
$city=$_POST['city'];
$connect = mysqli_connect("localhost", "root", "", "sculpt");
$userid = $_SESSION['auth']->id;
$commandes = $connect->query("SELECT id FROM `commandes` WHERE `commandes`.`userid` = '$userid'") or die("db error");
while( $commandes->fetch_assoc()) 
{  
     $req=$connect->query("INSERT FROM dilevery SET commande_id=? , user_id = ?,location=? city=?");
     $req->execute([$commandes,$userid,$location,$city]) ;
}
}
?>






	<div id="fh5co-gallery">
		<div class="container ">
			<div class="row">
	
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Delivery </h2>
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
								 <form action="" method="POST">
										<div class="form-row">
											<div class="col-md-6">
			
										<div class="form-group">
											<label class="small mb-1" for="location">Location</label>
											<input class="form-control py-4"  name="location" type="int"  placeholder="Type your local adress" required/>
										</div>
                                        <div class="form-group">
											<label class="small mb-1" for="city">City</label>
											<input class="form-control py-4"  name="city" type="int"  placeholder="Type your City" required/>
										</div>
	
										<br>
										<div class="form-group mt-4 mb-0 "></div>
								
										<input type="submit" class="btn btn-primary" value="Confirm" />
									</form>
								</div>	
						
						
					
				</div>
			</main>
		</div>

	
  <?php require_once 'footer.php'; ?>
