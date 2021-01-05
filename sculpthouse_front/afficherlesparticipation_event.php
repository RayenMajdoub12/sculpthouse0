<?php require 'header.php';
include "core/ParticipationC.php";


 $ParticipationC=new ParticipationC();


$listeparticipation_event_user=$ParticipationC->affichermesparticipation($_SESSION['auth']->id); 
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
        <input  id="myInput"  type="text" placeholder="Search..">  
                               
                <div class="row">
    


           
                      <br>
    

    
<br>
                        <table class="table " >
  <thead>
    <tr>

   
      <th scope="col">image</th>
      <th scope="col">titre</th>
      <th scope="col">emplacement</th>
 
     <th scope="col">categorie</th>

      <th scope="col">date  de event </th>
          
               <th scope="col">annuler</th>


    </tr>
  </thead>
  <tbody  id="myTable">
    <?PHP

foreach($listeparticipation_event_user as $row){

  ?>
    <tr>
     
       <td><img style="
    width: 50px;
" src="../img/<?php echo $row['image'] ?>"></td>
      <td><?php echo $row['titre'] ?></td>
      <td><?php echo $row['emplacement'] ?></td>

       <td><?php echo $row['nom_categorie'] ?></td>
       <td>de <?php echo $row['date_debut'] ?> Jusqu' a <?php echo $row['date_fin'] ?></td>
  <?php
      if ( date($row['date_debut']) > date('Y-m-d H:i:s'))
{
 ?>
  <td> <form method="POST" action="Deleteparticipation_event.php">



                                  
  <button class="btn btn-primary" type="submit"> annuler </button>
    <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">       

    
  </form>

     </td><?php
}
 ?>
       
  
    
    </tr>
                  <?PHP
                  
}
?>
  
  </tbody>
</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
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

