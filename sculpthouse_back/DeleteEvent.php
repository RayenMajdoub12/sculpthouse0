<?PHP
include "core/EventC.php";
include "entities/event.php";



if (isset($_POST["id"])){
	$EventC=new EventC();
	$EventC->Supprimerevent($_POST["id"]);


header('Location: AfficherEvent.php');
}

?>