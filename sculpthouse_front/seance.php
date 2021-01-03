<?PHP
	require_once 'coach\EventsC.php';

	$EventsC=new EventsC();
  $listeParticipants=$EventsC->afficherParticipantSeances();
  $listeSeances=$EventsC->afficherSeances();

?>
<?php require 'header.php';
?>

<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Liste des séances <button type="button" onclick="window.location.href = 'add_events.php'" style="float:right;" class="btn btn-success">+ Ajouter des évènements</button></h3>
        <?PHP
				  foreach($listeSeances as $user1){
         ?>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> <?PHP echo $user1['Name']; ?></h4><br>
              <h5><i class="fa fa-angle-right"></i> <?PHP echo $user1['DAY']." ".$user1['MONTH']." ".$user1['YEAR']." à ".$user1['heureE']; ?><button type="button" style="float:right;" class="btn btn-round btn-danger">Supprimer</button><button type="button" style="float:right;" class="btn btn-round btn-info">Modifier</button></h5>
              
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th>Code</th>
                      <th>Nom des Participants</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?PHP
				                foreach($listeParticipants as $user2){
                          if($user1['EventsID']==$user2['EventsID']){
			              ?>
                          <tr>
                            <td><?PHP echo $user2['LastName']; ?></td>
                            <td><?PHP echo $user2['FirstName']." ".$user2['LastName']; ?></td>
                          </tr>
                    <?PHP
                        }
                      }
			              ?>
                  </tbody>
                </table>
              </section>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-lg-4 -->
        </div>
        <?PHP
           }
			  ?>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>



<?php require 'footer.php';?>