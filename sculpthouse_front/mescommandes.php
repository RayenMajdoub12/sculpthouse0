<?php require 'header.php';?>
<?php 

$connect = mysqli_connect("localhost", "root", "", "sculpt");
$userid = $_SESSION['auth']->id;
$commandes = $connect->query("SELECT * FROM `commandes` WHERE `commandes`.`userid` = '$userid'") or die("db error");


 ?>



	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="float:none;" data-stellar-background-ratio="0.5" >
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							



		
			<div style="clear:both"></div>
			<br />
			<h3>My Orders</h3>
			<?php

                      while($row = $commandes->fetch_assoc()) {  
                      	$cart = json_decode($row["cart"], true);
                      ?>
  			<h3>Order ID <?php echo $row["id"]?></h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
						$total = 0;
						foreach($cart as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>$ <?php echo $values["item_price"]; ?></td>
						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">$ <?php echo number_format($total, 2); ?></td>
						<td>



							<a href="../sculpthouse_back/deleteCommande.php?id=<?php echo $row["id"]; ?>"><span class="text-danger">Remove</span></a>
						</td>
					</tr>
					
						
				</table>
			</div>

			<?php
					}
					?>
			

		</div>
	</div>
	<br />





							<!-- <h2>Free html5 templates Made by <a href="http://freehtml5.co" target="_blank">freehtml5.co</a></h2> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	
	

	<?php require 'footer.php';?>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
		    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>

	<script src="js/main.js"></script>
	<script>
var notyf = new Notyf();
<?php
if($commandePasse)
{
	echo "notyf.success('Commande Passé!');";
}




?>
	</script>
	</body>
</html>

