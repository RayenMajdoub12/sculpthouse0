<?php require 'header.php';?>
<?php 

$userid=$_SESSION['auth']->id;
$mysqli = mysqli_connect("localhost", "root", "", "sculpt");

$cartdata = json_encode($_SESSION["shopping_cart"]);
$price = 0;
foreach($_SESSION["shopping_cart"] as $keys => $values)
{			
$price = $price + ($values["item_quantity"] * $values["item_price"]);
}

$_SESSION["shopping_cart"] = [];


						

echo $cartdata;
$obj = $mysqli->query("INSERT INTO `commandes` (`id`, `cart`, `price`,`userid`) VALUES (NULL, '$cartdata', '$price','$userid');");
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
						<h1>Order Passed</h1>

				</div>
			</div>
		</div>
	</header>

	


	<?php require 'footer.php';?>