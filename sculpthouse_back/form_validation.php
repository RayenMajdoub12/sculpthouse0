<?php require 'header_sidebar.php' ;
      require 'db.php' ;
      $req=$pdo ->prepare('SELECT * FROM users WHERE id=:num LIMIT 1');
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
                    <label for="firstname" class="control-label col-lg-2">ID </label>
                    <div class="col-lg-10">
                      <input class=" form-control" name="id" type="text" value="<?= $user->id;?>"/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Firstname </label>
                    <div class="col-lg-10">
                      <input class=" form-control" name="firstname" type="text" value="<?= $user->firstname;?>"/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="lastname" class="control-label col-lg-2">Lastname</label>
                    <div class="col-lg-10">
                      <input class=" form-control"  name="lastname" type="text"  value="<?= $user->lastname;?>"/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2">Username</label>
                    <div class="col-lg-10">
                      <input class="form-control "  name="username" type="text" value="<?= $user->username;?>"/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="password" class="control-label col-lg-2">Password</label>
                    <div class="col-lg-10">
                      <input class="form-control "  name="password" type="text" value="<?= $user->password;?>"/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="email" class="control-label col-lg-2">Email</label>
                    <div class="col-lg-10">
                      <input class="form-control "  name="email" type="email" value="<?= $user->email;?>"/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="agree" class="control-label col-lg-2 col-sm-3">Agree to Our Policy</label>
                    <div class="col-lg-10 col-sm-9">
                      <input type="checkbox" style="width: 20px" class="checkbox form-control"  />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="newsletter" class="control-label col-lg-2 col-sm-3">Receive the Newsletter</label>
                    <div class="col-lg-10 col-sm-9">
                      <input type="checkbox" style="width: 20px" class="checkbox form-control" />
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
