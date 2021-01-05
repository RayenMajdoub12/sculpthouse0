<?PHP
	include "C:\wamp64\www\sculpthouse\sculpthouse_front\coach/connection.php";
	require_once 'C:\wamp64\www\sculpthouse\sculpthouse_front\coach\model/Seance.php';

	class EventsC{
				
		function afficherEvents(){	
			$sql="SELECT EventsID,title,case extract(MONTH from start_Event)
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
										END as \"MONTH\",extract(DAY from start_Event) as \"DAY\",extract(YEAR from start_Event) as \"YEAR\" FROM Events";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function afficherParticipantEvents(){
			
			$sql="SELECT * FROM participants";
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