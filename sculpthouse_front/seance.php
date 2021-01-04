<?PHP
	require_once 'coach\EventsC.php';

	$EventsC=new EventsC();
  $listeParticipants=$EventsC->afficherParticipantSeances();
  $listeSeances=$EventsC->afficherSeances();

?>
<?php require 'header.php';
?>
<div id="fh5co-gallery">
<section id="main-content">
      <section class="wrapper">
      <div class="container text-center">
					<div class="row justify-content-center ">
								<div class="card-body ">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
<div class="row">
				
					  <h2>Liste des séances</h2>
         
				</div>
        </div>
        </div>
        <?PHP
				  foreach($listeSeances as $user1){
         ?>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <h4 ><i class="fa fa-angle-right"></i> <?PHP echo $user1['Name']; ?></h4>
              <h5><i class="fa fa-angle-right"></i> <?PHP echo $user1['DAY']." ".$user1['MONTH']." ".$user1['YEAR']." à ".$user1['heureE']; ?></h5>
              <button type="button" style="float:right;" class="btn btn-round btn-danger">Supprimer</button><button type="button" style="float:right;" class="btn btn-round btn-info">Modifier</button>
              
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed"  style="text-align: center;" >
                  <thead>
                    <tr>
                     
                      <th style="text-align:center;">Nom des Participants</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?PHP
				                foreach($listeParticipants as $user2){
                          if($user1['EventsID']==$user2['EventsID']){
			              ?>
                          <tr>
                     
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
     
        <?PHP
           }
			  ?>
          </div>
        </div>
        </div>
        <button type="button" onclick="window.location.href = 'add_events.php'" style="float:right;" class="btn btn-success">+ Ajouter des évènements</button>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    



<?php require 'footer.php';?>