<?php require 'header_sidebar.php' ;
      require 'db.php' ;
      $req=$pdo ->prepare('SELECT * FROM job_app ');
       $req->execute();
       $listeUsers=$req->fetchall();
?>
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Job Applications</h3>
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-users"></i>  Info</h4>
                <hr>
                <thead>
                  <tr>
                  <th><i class="fa fa-user"></i> ID </th>
                  <th><i class="fa fa-user"></i> Username </th>
                    <th><i class="fa fa-user"></i> First Name </th>
                    <th ><i class="fa fa-user"></i> Last Name</th>
                    <th><i class="fa fa-calendar-o"></i> Birthday</th>
                    <th><i class="fa fa-phone"></i> Phone </th>
                    <th><i class="fa fa-envelope"></i> Email </th>
                    <th><i class="fa fa-globe"></i> Coach/Chef </th>
                    <th><i class="fa fa-info"></i> Speciality </th>
                    <th><i class=" fa fa-male"></i> Gender</th>
                    <th><i class=" fa fa-male"></i> CV</th>
                    <th><i class=" fa fa-male"></i> Work Online</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                
			<?PHP
				foreach($listeUsers as $user):
			?>
                  <tr>
                  <td><?= $user->id; ?></td>
                  <td><?= $user->username; ?></td>
					<td><?= $user->firstname ?></td>
					<td><?= $user->lastname ?></td>
					<td><?= $user->birthday ?></td>
					<td><?= $user->phone ?></td>
					<td><?= $user->email ?></td>
					<td><?= $user->work ?></td>
					<td><?= $user->speciality ?></td>
                    <td><?= $user->gender ?></td>
                    <td><?= $user->cv ?></td>
                    <td><?= $user->online ?></td>
                    <td>
                    <button class="btn btn-success btn-xs" onclick="window.location.href = 'accept.php?id=<?= $user->id ?>';"><i class="fa fa-check"></i></button>
                      <button class="btn btn-danger btn-xs" onclick="window.location.href = 'delete_jobapp.php?id=<?= $user->id ?>';"> <i class="fa fa-trash-o "></i></button>
                      
                   </td>
                  </tr>
                  <?php endforeach ; ?>
                  <tr>
                  
                   
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <?php require 'footer.php' ; ?>
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  
</body>

</html>