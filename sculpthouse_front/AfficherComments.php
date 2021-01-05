<?php require 'header.php';
include "core/CommentsC.php";


 if (isset($_GET['id'])){

    $CommentsC=new CommentsC();
  $listeComments=$CommentsC->afficherlist_comments($_GET['id']); 

}
?>
  
  <div id="fh5co-gallery">
    <div class="container">
      <div class="row">
        <div>
        
        </div>
      
      

      </div>
    </div>
    <div class="container-fluid">
      <div class="row row-bottom-padded-md">
         <h2>
                comments
              </h2>
          
            </div><!--/.gallery-header-->
            <div class="blog-content">
                        <form onsubmit="return validateForm()" name="myForm" method="POST" action="AjouterCommentC.php" >
          <div class="row">
                         <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                    
                  
                             
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" name="contenu"  id="contenu" placeholder="contenu *"  ></textarea>
         <input class="form-control" value="<?php echo $_GET['id'] ?>" name="id_form" type="hidden"   />
                  
                            </div>


                            <br>
                          
                        
                          
                            
                                <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase"  type="submit">Envoi</button>
                    </div>
                        </div>

                       
                    </div>

          </div>
        </form>
                        <script>

function validateForm() {

  
    var contenu = document.forms["myForm"]["contenu"].value;


    if (contenu == "") {
    alert("contenu vide");
    return false;
  }



 
    
}
</script>
                    <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
              <div class="row">
<?php foreach($listeComments as $row) {  

  ?>
                <div class="col-sm-4 col-md-4">
                  <div class="thumbnail">
                 
                    
                    <div class="caption">
                      <div class="blog-txt">
                        <h3>
                          <a href="#">
                             Ecrite par   <?php echo $row->nom." ". $row->prenom ?>
                          </a>
                        </h3>
                        <p>
                        <?php echo $row->contenu ?>
                        </p>
                        <?php if ($_SESSION['auth']->id == $row->id_User ) { ?>
                        <form method="POST" action="DeleteComments.php">



                                  
  <button  class="btn btn-danger">
               delete
                    </button>
    <input type="hidden" value="<?PHP echo $row->id; ?>" name="id">       


  </form>
   
                                  
  <button  class="btn btn-warning" style="
    margin-left: 254px;
    margin-top: -38px;
" >
             <a style="color: white" href="ModifierComment.php?id=<?PHP echo $row->id; ?>">modifier</a>
                    </button>

                  
             

<?php } ?>
                        
                      </div><!--/.blog-txt-->
                    </div><!--/.caption-->
                  </div><!--/.thumbnail-->

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

