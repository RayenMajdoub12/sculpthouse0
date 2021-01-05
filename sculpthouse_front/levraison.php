<?php require_once 'header.php'; ?>

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
								 <form action="levraison_acces.php" method="POST">
										<div class="form-row">
											<div class="col-md-6">
											<div class="form-group">
											<label class="small mb-1" for="id">Your ID</label>
											<input class=" form-control" name="id" type="text" value="<?= $_SESSION['auth']->id;?>"/>
										<div class="form-group">
											<label class="small mb-1" for="location">Location</label>
											<input class="form-control py-4"  name="location" type="text"  placeholder="Type your local adress" required/>
										</div>
                                        <div class="form-group">
											<label class="small mb-1" for="city">City</label>
											<input class="form-control py-4"  name="city" type="text"  placeholder="Type your City" required/>
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
