<?php require 'header_sidebar.php' ;
      require 'db.php' ;
      $req=$pdo ->prepare('SELECT * FROM employee WHERE id=:num LIMIT 1');
      $req->bindValue(':num',$_GET['id'],PDO::PARAM_INT);
       $executedone=$req->execute();
       $user=$req->fetch();
       
?>
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Edit User</h3>
        <h4><i class="fa fa-angle-right"></i>User : ID= <?= $user->id ?></h4>
        <!-- /row -->
        <div class="row mt">
          <div class="col-lg-12">
     
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form"  method="POST" action="edit.php">
                <div class="form-group ">
                    <label for="id" class="control-label col-lg-2">ID </label>
                    <div class="col-lg-10">
                      <input class=" form-control" name="id" type="text" value="<?= $user->id;?>"/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="salary" class="control-label col-lg-2">Salary </label>
                    <div class="col-lg-10">
                      <input class=" form-control" name="salary" type="int" value="<?= $user->salary;?>"/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="missed_days" class="control-label col-lg-2">Missed days</label>
                    <div class="col-lg-10">
                      <input class=" form-control"  name="missed_days" type="int"  value="<?= $user->missed_days;?>"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Save</button>
                      <button class="btn btn-theme04" type="button">Cancel</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
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
  <script src="lib/form-validation-script.js"></script>

</body>

</html>
