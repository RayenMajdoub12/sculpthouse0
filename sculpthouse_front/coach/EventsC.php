<?PHP
	include "connection.php";
	require_once 'Events.php';

	class EventsC{
		
		function afficherSeances(){
			
			$sql="SELECT EventsID,Name,case extract(MONTH from EventsD)
										WHEN 1 THEN 'Janvier'
										WHEN 2 THEN 'Fevrier'
										WHEN 3 THEN 'Mars'
										WHEN 4 THEN 'Avril'
										WHEN 5 THEN 'Mai'
										WHEN 6 THEN 'Juin'
										WHEN 7 THEN 'Juillet'
										WHEN 8 THEN 'Août'
										WHEN 9 THEN 'Septembre'
										WHEN 10 THEN 'Octobre'
										WHEN 11 THEN 'Novembre'
										WHEN 12 THEN 'Décembre'
										END as \"MONTH\",extract(DAY from EventsD) as \"DAY\",extract(YEAR from EventsD) as \"YEAR\",heureE,
										description FROM events";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function afficherParticipantSeances(){
			
			$sql="SELECT * FROM PARTICIPANTS";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		


		
		
	}

?>