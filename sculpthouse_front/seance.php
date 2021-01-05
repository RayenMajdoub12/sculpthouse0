<?PHP
	require_once 'coach/controller/SeanceC.php';

	$SeancesC=new SeancesC();
  $listeParticipants=$SeancesC->afficherParticipantSeances();
  $listeSeances=$SeancesC->afficherSeances();

?>
<?php require 'header.php';
?>

<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Liste des séances </h3>
        <?PHP
				  foreach($listeSeances as $user1){
         ?>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> <?PHP echo $user1['title']; ?></h4><br>
              <h5><i class="fa fa-angle-right"></i> <?PHP echo $user1['DAY']." ".$user1['MONTH']." ".$user1['YEAR']; ?></h5><br>
              
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th>Nom des Participants</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?PHP
				                foreach($listeParticipants as $user2){
			              ?>
                          <tr>
                            <td><?PHP echo $user2['FirstName']." ".$user2['LastName']; ?></td>
                          </tr>
                    <?PHP
                            
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

<?php 
  require 'footer.php';
?>