<?PHP
	include "../controller/SeanceC.php";

	$SeanceC=new SeancesC();
	
	if (isset($_POST["SeanceID"])){
		$SeanceC->supprimerSeances($_POST["SeanceID"]);
		header('Location:C:/wamp64/www/Plus/sculpthouse0-main/sculpthouse_front/seances.php');
	}

?>