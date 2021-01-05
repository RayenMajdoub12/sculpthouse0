<?php require 'header_sidebar.php' ;
     



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
   
 

 <form  onsubmit="return validateForm()" name="myForm" method="POST" action="AjouterCategorieC.php" >
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                             <div class="form-group">
                                <input class="form-control"  id="nom" name="nom" type="text" placeholder="nom"   />
                  
  
                      </div>
                          
                             
                            
                       
                        </div>
                       
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase"  type="submit">Envoi</button>
                    </div>
                </form>
                <script>

function validateForm() {
      var nom = document.forms["myForm"]["nom"].value;
 

  if (nom == "") {
    alert("nom vide");
    return false;
  }
  
  

 
    
}
</script>
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