<?php require 'header.php';?>
<?php 

session_start();
$mysqli = mysqli_connect("localhost", "root", "", "sculpt");

$cartdata = json_encode($_SESSION["shopping_cart"]);
$price = 0;
foreach($_SESSION["shopping_cart"] as $keys => $values)
{			
$price = $price + ($values["item_quantity"] * $values["item_price"]);
}

$_SESSION["shopping_cart"] = [];


						

echo $cartdata;
$obj = $mysqli->query("INSERT INTO `commandes` (`id`, `cart`, `price`) VALUES (NULL, '$cartdata', '$price');");
if(!$obj)
    {
        echo("Error description: " . $mysqli -> error);
        die();
    }


 ?>


<form align="center" action="search.php" method="post">
	<input type="text" name="valueToSearch", placeholder="Article to search">
	<input type="submit" name="search" value="search"><br><br>

</form>




	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="float:none;" data-stellar-background-ratio="0.5" >
		<div class="container">
						<h1>Commande Passé</h1>

				</div>
			</div>
		</div>
	</header>

	
	

	<div id="fh5co-started" class="fh5co-bg" style="background-image: url(images/img_bg_3.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center">
					<h2>Fitness Classes this Summer <br> <span> Pay Now and <br> Get <span class="percent">35%</span> Discount</span></h2>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center">
					<p><a href="#" class="btn btn-default btn-lg">Become a Member</a></p>
				</div>
			</div>
		</div>
	</div>


	<?php require 'footer.php';?>