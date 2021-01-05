<?php require 'header_sidebar.php' ;
     
include "core/CategorieC.php";


 $CategorieC=new CategorieC();

$listeCategories=$CategorieC->afficherlist_categorie(); 


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
   
 
 <form  onsubmit="return validateForm()" name="myForm" method="POST" action="AjouterEventC.php" >
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                   <div class="form-group">
                                <input class="form-control"  id="titre" name="titre" type="text" placeholder="titre"   />
                  
  
                      </div>
                            <div class="form-group">
                                <input class="form-control"  id="emplacement" name="emplacement" type="text" placeholder="emplacement"   />
                  
  
                      </div>
                             
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" name="description"  id="description" placeholder="description *"  ></textarea>
       
                            </div>
                            <br>
                             <div class="form-group">

 <input class="form-control"  id="date_debut" name="date_debut" type="datetime-local"   placeholder="date_debut"   />
                            </div>
                              <div class="form-group">
                                
 <input class="form-control"  id="date_fin" name="date_fin" type="datetime-local" placeholder="date_fin"   />
                            </div>
                              <div class="form-group">
                                
 <input class="form-control"  id="places" name="places" type="number" placeholder="places"   />
                            </div>
         <div class="form-group">
                                
 <select class="form-control" name="nom_categorie">
    <?PHP

foreach($listeCategories as $row){

  ?>
  <option value="<?php echo $row['nom'] ?>"><?php echo $row['nom'] ?></option>
                  <?PHP
                  
}
?>
</select>
                            </div>



                                <div class="form-group">
                                
 <input class="form-control"  id="image" name="image" type="file" placeholder="image"   />
                            </div>
                          
                             
                            
                       
                        </div>
                       
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase"  type="submit">Envoi</button>
                    </div>
                </form>
                <script>
                    function convertDateToUTC(date) { 
    return new Date(date.getUTCFullYear(), date.getUTCMonth(), date.getUTCDate(), date.getUTCHours(), date.getUTCMinutes(), date.getUTCSeconds()); 
}
function validateForm() {
      var titre = document.forms["myForm"]["titre"].value;
  var emplacement = document.forms["myForm"]["emplacement"].value;
    var description = document.forms["myForm"]["description"].value;
         var nbr_places = document.forms["myForm"]["places"].value;

    var image = document.forms["myForm"]["image"].value;
        var dateTimeStr = document.forms["myForm"]["date_debut"].value;
         var dateTimeStrfin = document.forms["myForm"]["date_fin"].value;

var date_debut = convertDateToUTC(new Date(dateTimeStr));
var date_fin = convertDateToUTC(new Date(dateTimeStrfin));
var now = new Date();
  if (titre == "") {
    alert("titre vide");
    return false;
  }
  if (emplacement == "") {
    alert("emplacement vide");
    return false;
  }
    if (description == "") {
    alert("description vide");
    return false;
  }
    if (isNaN(date_debut.getTime()) ) {

    alert("date_debut vide");
    return false;
  }
    if ( date_debut < now ) {

    alert("date_debut erreur");
    return false;
  }
 
    if (isNaN(date_fin.getTime()) ) {

    alert("date_fin vide");
    return false;
  }
    if ( date_fin < now ) {

    alert("date_fin erreur");
    return false;
  }
    if ( date_fin <= date_debut ) {

    alert("date_fin doit etre sup a date_fin");
    return false;
  }
    if (nbr_places == "" ) {

    alert("nbr_places vide");
    return false;
  }

    if ( nbr_places <= 0) {

    alert("nbr_places ne doit pas etre negative");
    return false;
  }
   
      if (image == "") {

    alert("image vide");
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