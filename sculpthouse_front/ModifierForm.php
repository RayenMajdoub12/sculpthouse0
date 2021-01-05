<?php require 'header.php';
include "core/FormC.php";


 if (isset($_GET['id'])){

    $FormC=new FormC();
    $result=$FormC->recupererform($_GET['id']);

    foreach($result as $row){

    
           $titre=$row->titre;
$contenu=$row->contenu;
$likes=$row->likes;
$Date=$row->Date;
    }
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
 <div class="subscribe-title text-center">
          <h2>
           modifier Form
          </h2>
     
        </div>
       <form onsubmit="return validateForm()" name="myForm" method="POST" action="ModifierFormC.php" >
          <div class="row">
                         <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                             <div class="form-group">
                                <input class="form-control"  id="titre"  value="<?php  echo $titre; ?>" name="titre" type="text" placeholder="titre"   />
                  
      <input class="form-control"   value="<?php  echo $_GET['id']; ?>" name="id" type="hidden"    />
            <input class="form-control"   value="<?php  echo $likes; ?>" name="likes" type="hidden"    />
                  <input class="form-control"   value="<?php  echo $Date; ?>" name="Date" type="hidden"    />
                      </div>
      
                  
                             
                            <div class="form-group form-group-textarea mb-md-0">
                                <input type="text" class="form-control" name="contenu" value="<?php  echo $contenu; ?>"  id="contenu" placeholder="contenu *" />
       
                            </div>
                            <br>
                          
                        
                          
                                <div class="form-group">
                                
 <input class="form-control"  id="image" name="image" type="file" placeholder="image"   />
                            </div>
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
      var titre = document.forms["myForm"]["titre"].value;
  
    var contenu = document.forms["myForm"]["contenu"].value;
      
    var image = document.forms["myForm"]["image"].value;

var now = new Date();
  if (titre == "") {
    alert("titre vide");
    return false;
  }

    if (contenu == "") {
    alert("contenu vide");
    return false;
  }

 
   
      if (image == "") {

    alert("image vide");
    return false;
  }

 
    
}
</script>
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

