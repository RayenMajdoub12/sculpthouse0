<?php require 'header.php';
include "core/FormC.php";

 $FormC=new FormC();

$listeForms=$FormC->afficherlist_form_user($_SESSION['auth']->id); 
?>
  
  <div id="fh5co-gallery">
    <div class="container">
      <div class="row">
        <div>
        
        </div>
      
      

      </div>
    </div>
    <div class="container-fluid">
        <div class="packages-content">
               <button  class="book-btn" style="margin-left: 522px;margin-bottom: 15px;">
                <a href="AjouterForm.php" style="color: white">
                       Ajouter Pub
                </a>
                
                    </button>
          <div class="row">
          
<?php foreach($listeForms as $row) {
 ?>

            <div class="col-md-4 col-sm-6">
              <div class="single-package-item">
                <img src="../img/<?php echo $row->image ?>" alt="package-place">
                <div class="single-package-item-txt">
                  <h3>Titre :  <span class="pull-right"><?php echo $row->titre?></span></h3>
                  <div class="packages-para">
                    <p>
        
                      <span>

                        <i class="fa fa-angle-right"></i><?php echo $row->Date ?>
                      </span>
                       <i class="fa fa-angle-right">Ecrite par : </i><?php echo " ".$row->nom." ".$row->prenom ?>
                    </p>
                    <p>
                     <?php echo $row->contenu ?>
                    
                     </p>
                  </div><!--/.packages-para-->
                  <div class="packages-review">
                    <p>
                   
                      <span>Nbr Jaime : <?php echo $row->likes ?></span>
                    </p>
                  </div>

                  <div class="about-btn">
                    <button  class="about-view packages-btn">
                      <a style="color: white" href="AfficherComments.php?id=<?PHP echo $row->id; ?>">Commenter</a>
                    </button>
                  </div><!--/.about-btn-->
       <div style="margin-left: 152px;margin-top: -34px;" >
                                  
  <button  class="btn btn-warning" >
             <a style="color: white" href="ModifierForm.php?id=<?PHP echo $row->id; ?>"><i class="fa fa-edit"></i></a>
                    </button>

                  
                  </div>
                
                  <div style="margin-left: 264px;margin-top: -34px;" >
                        <form method="POST" action="DeleteForm.php">



                                  
  <button  class="btn btn-danger">
                 <i class="fa fa-trash"></i>
                    </button>
    <input type="hidden" value="<?PHP echo $row->id; ?>" name="id">       


  </form>
                  
                  </div><!--/.about-btn-->

                
                        
                </div><!--/.single-package-item-txt-->
              </div><!--/.single-package-item-->

            </div><!--/.col-->
<?php } ?>
            

          </div><!--/.row-->
      </div>
    </div>
  </div>



  <?php require 'footer.php';?>
  </div>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
  </div>
  
  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="js/jquery.waypoints.min.js"></script>
  <!-- Stellar Parallax -->
  <script src="js/jquery.stellar.min.js"></script>
  <!-- Carousel -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- countTo -->
  <script src="js/jquery.countTo.js"></script>
  <!-- Magnific Popup -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/magnific-popup-options.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
  <script src="js/google_map.js"></script>
  <!-- Main -->
  <script src="js/main.js"></script>

  </body>
</html>

