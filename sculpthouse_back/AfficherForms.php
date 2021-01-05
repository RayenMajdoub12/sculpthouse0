<?php require 'header_sidebar.php' ;
     
include "core/FormC.php";



 $FormC=new FormC();

$listeForms=$FormC->afficherlist_form(); 

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
                 <input  id="myInput"  type="text" placeholder="Search..">  
   <table class="table">
  <thead>
    <tr>




      <th scope="col">#</th>
      <th scope="col">image</th>
      <th scope="col">titre</th>
      <th scope="col">contenu</th>
       <th scope="col">Date</th>
            <th scope="col">nombre de likes</th>

                      <th scope="col">Ecrite par</th>
                        <th scope="col">Comments</th>
          <th scope="col">Delete</th>
   
    </tr>
  </thead>
  <tbody  id="myTable">
    <?PHP

foreach($listeForms as $row){


  ?>
    <tr>
      <th scope="row"><?php echo $row['id'] ?></th>
      <td><img style="
    width: 50px;
" src="../img/<?php echo $row['image'] ?>"></td>
      <td><?php echo $row['titre'] ?></td>
      <td><?php echo $row['contenu'] ?></td>
      <td><?php echo $row['Date'] ?></td>
 
      <td><?php echo $row['likes'] ?></td>
      <td><?php echo $row['nom']." ".$row['prenom'] ?></td>
    <td><a class="btn btn-primary"  href="AfficherComments.php?id=<?PHP echo $row['id']; ?>"><i class="fa fa-bars"></i></a>
        </td>

      <td> 

                <form method="POST" action="DeleteForm.php">



                                  
  <button  class="btn btn-danger">
               <i class="fa fa-trash"></i>
                    </button>
    <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">       


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