<?php
    include "../controller/SeanceC.php";
    include_once '../Model/Seance.php';

	$SeanceC = new SeanceC();
	$error = "";

	if (
        isset($_POST["SeanceName"]) && 
        isset($_POST["SeanceDate"]) &&
        isset($_POST["HeureS"]) && 
        isset($_POST["DescriptionS"]) && 
        isset($_POST["Images"])
    ){
		if (
            !empty($_POST["SeanceName"]) && 
            !empty($_POST["SeanceDate"]) && 
            !empty($_POST["HeureS"]) && 
            !empty($_POST["DescriptionS"]) && 
            !empty($_POST["Images"])
        ) {
            $seance = new Utilisateur(
                $_POST['SeanceName'],
                $_POST['SeanceDate'], 
                $_POST['HeureS'],
                $_POST['DescriptionS'],
                $_POST['Images']
            );
            
            $SeanceC->modifierUtilisateur($seance, $_GET['id']);
            //header('Location:afficherSeances.php');
        }
        else
            $error = "Missing information";
	}

?>
<html>
	<head>
		<title>Modifier Utilisateur</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<button><a href="afficherUtilisateurs.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['id'])){
				$seance = $SeanceC->recupererUtilisateur1($_GET['id']);
				
		?>
		<form action="" method="POST">
            <table align="center">
                <tr>
                    <td rowspan='3' colspan='1'>Fiche Personnelle</td>
                    <td>
                        <label for="SeanceName">SeanceName:
                        </label>
                    </td>
                    <td><input type="text" name="SeanceName" id="SeanceName" maxlength="20" value = "<?php echo $seance->SeanceName; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <label for="SeanceDate">PréSeanceName:
                        </label>
                    </td>
                    <td><input type="text" name="SeanceDate" id="SeanceDate" maxlength="20" value = "<?php echo $seance->SeanceDate; ?>"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="HeureS">Adresse mail:
                        </label>
                    </td>
                    <td>
                        <input type="HeureS" name="HeureS" id="HeureS" pattern=".+@gmail.com|.+@esprit.tn" value = "<?php echo $seance->HeureS; ?>">
                    </td>
                </tr>
                <tr>
                    <td rowspan='2' colspan='1'>Information de Connexion</td>
                    <td>
                        <label for="DescriptionS">DescriptionS:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="DescriptionS" id="DescriptionS" value = "<?php echo $seance->DescriptionS; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Images">Mot de Imagese:
                        </label>
                    </td>
                    <td>
                        <input type="Imagesword" name="Images" id="Images" value = "<?php echo $seance->Imagesword; ?>">
                    </td>
                </tr>
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier" name = "modifer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
	</body>
</html>