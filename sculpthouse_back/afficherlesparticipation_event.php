<?php require 'header_sidebar.php' ;
     
include "core/ParticipationC.php";
 if (isset($_GET['id'])){

 $ParticipationC=new ParticipationC();

$listelesparticipation_tous_event=$ParticipationC->afficherlesparticipation_event($_GET['id']); 

}
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
                                                               <form method="POST" action="imprimerEvent.php">
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
   <button   class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" ><i
                                class="fas fa-download fa-sm text-white-50"></i>Generate PDF </button>
  </form>
    <input  id="myInput" class="form-control bg-light border-0 small" type="text" placeholder="Search..">    
        <table class="table">
  <thead>
    <tr>

      <th scope="col">#</th>
      <th scope="col">Date de event </th>
       <th scope="col">nom du client</th>
      <th scope="col">prenom du client</th>
        <th scope="col">mail du clien</th>
               <th scope="col">image de event </th>
                <th scope="col">titre de event </th>
                     <th scope="col">emplacement de event </th>
                <th scope="col"> categorie </th>
                 <th scope="col">Nombre de places disponible  </th>
          <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody  id="myTable">
    <?PHP

foreach($listelesparticipation_tous_event as $row){

  ?>
    <tr>
      <th scope="row"><?php echo$row['id'] ?></th>
    
      <td>de <?php echo $row['date_debut'] ?> Jusqu' a <?php echo $row['date_fin'] ?> </td>
      <td><?php echo $row['nom'] ?></td>
      <td><?php echo $row['prenom'] ?></td>
      <td><?php echo $row['mail'] ?></td>
        <td><img style="
    width: 50px;
" src="../img/<?php echo $row['image'] ?>"></td>
  <td><?php echo $row['titre'] ?></td>
  <td><?php echo $row['emplacement'] ?></td>
 <td> <?php echo $row['nom_categorie'] ?> </td>

      <td><?php echo $row['places'] ?></td>
      <td> 

<form method="POST" action="Deleteparticipation_event.php">



                                  
  <button class="btn btn-primary" type="submit"><i class="fa fa-trash"></i> </button>
    <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">       

    <input type="hidden" value="<?PHP echo $_GET['id']; ?>" name="id_event"> 
  </form>

      </td>
   
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