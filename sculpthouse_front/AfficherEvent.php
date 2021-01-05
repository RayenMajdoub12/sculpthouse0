<?php require 'header.php';
include "core/EventC.php";

 $EventC=new EventC();

$listeEvents=$EventC->afficherlist_event(); 

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
                      <button class="btn btn-primary" style="
    margin-left: 206px;
" onclick="sortTable()">Trier </button>  
                                <button class="btn btn-primary" type="submit" style="
    position: absolute;
    margin-left: 206px;
">     <a href="afficherlesparticipation_event.php" style="color: white">Mes participations event</a>  </button>
                <div class="row">
    


                    <div class="">
                      <br>
    

    
<br>
                        <table class="table sortable" >
  <thead>
    <tr>

   
      <th scope="col">image</th>
      <th scope="col">titre</th>
      <th scope="col">emplacement</th>
       <th scope="col">description</th>
     <th scope="col">categorie</th>

      <th scope="col">date  Debut </th>
            <th scope="col">date  Fin </th>
               <th scope="col">nbr places Disponible</th>
               <th scope="col">participer</th>



    </tr>
  </thead>
  <tbody  id="myTable">
    <?PHP

foreach($listeEvents as $row){
    if ($row['places'] != 0 && date($row['date_debut']) > date('Y-m-d H:i:s'))
{
  ?>
    <tr>
     
       <td><img style="
    width: 50px;
" src="../img/<?php echo $row['image'] ?>"></td>
      <td><?php echo $row['titre'] ?></td>
      <td><?php echo $row['emplacement'] ?></td>
      <td><?php echo $row['description'] ?></td>
       <td><?php echo $row['nom_categorie'] ?></td>
       <td><?php echo $row['date_debut'] ?></td>
      <td><?php echo $row['date_fin'] ?></td>
            <td><?php echo $row['places'] ?></td>
 <td>

<form method="POST" action="AjouterParticipation_eventC.php">



                                  
  <button class="btn btn-primary" type="submit">  participer </button>
    <input type="hidden" value="<?PHP echo $row['id_event']; ?>" name="id_event">       


  </form>

      </td>
  
    
    </tr>
                  <?PHP
                  }
}
?>
  
  </tbody>
</table>
<script>
function sortTable() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("myTable");
  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 0; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[5];
      y = rows[i + 1].getElementsByTagName("TD")[5];
      console.log( rows[i].getElementsByTagName("TD")[5]);
      //check if the two rows should switch place:
      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        //if so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}
</script>
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

