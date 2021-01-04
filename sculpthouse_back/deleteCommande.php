
<?php

$mysqli = mysqli_connect("localhost", "root", "", "sculpt") or die("0");

$theId = $_GET["id"];



$obj2 = $mysqli->query("DELETE FROM `commandes` WHERE `commandes`.`id` = $theId") or die("0");


echo "1";
	header('Location: ../sculpthouse_front/mescommandes.php');





?>