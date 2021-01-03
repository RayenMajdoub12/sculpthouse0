<?php

$mysqli = mysqli_connect("localhost", "root", "", "sculpt") or die("0");

  
// sort 

if (isset($_GET['order'])) {
$order = $_GET['order'];
} else {
$order = 'quantite' ;
}


if (isset($_GET['sort']))  {
  $sort = $_GET['sort'];
} else {

  $sort = 'ASC' ;
}

$tbl_product = $mysqli->query("SELECT * FROM `tbl_product` ORDER BY $order $sort") or die("db error");
$commandes = $mysqli->query("SELECT * FROM `commandes` ") or die("db error");

?>







<?php require 'header_sidebar.php';?>
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Basic Table Examples</h3>
        <div class="row">
          <div class="col-md-12">
            
          <!-- /col-md-12 -->
          <div class="col-md-12 mt">
            
        <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Products table</h4>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i> Product name</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"  ></i> Price</th>
                    <th><a href='?basic_table.php' class="fa fa-bookmark" ></a> Quantity</th>
                    <th><i class=" fa fa-edit"></i> Status</th>
                    <th></th>
                  </tr> ' 
                </thead>
                <tbody>




                      <?php
if ($tbl_product->num_rows >0) {
$sort == 'DESC' ? $sort='ASC' : $sort = 'DESC' ; 
                      while($row = $tbl_product->fetch_assoc()) { $quantite= $row['quantite']; 

                      echo '
                  <tr>
                    <td>
                      <a href="#" id="productname">' . $row["name"] . '</a>
                    </td>
                    <td class="hidden-phone" id="productPrice"> '. $row["price"] .  ' </td>
                    <td id="productQuantity"> '. $row["quantite"]. ' </td>
                    <td id="productAlert">';

                    if($row["quantite"]!=0)
                    {
                    	echo '<span class="label label-info label-mini">Available</span>';
                    }
                    else
                    {
                    	echo '<span class="label label-warning label-mini">Out of stock</span>';
                    }
                    echo '</td>
                    <td id="actions">
                      <button id="editProduct" productId="'.$row["id"].'" class="editProductBtn btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                      <button id="deleteProduct" productId="'.$row["id"].'" class="btn btn-danger btn-xs deleteProductBtn"><i class="fa fa-trash-o "></i></button>
                    </td>
                  </tr> '; } 

} else {echo "No records returned"; }


                      ?>







                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <br>













                </div>
        </div>
        </div>

















<br>













<!---------------------------!>






<div class="row">
          <div class="col-md-12">
            
          <!-- /col-md-12 -->
          <div class="col-md-12 mt">
            
        <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Orders Table</h4>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i> Id</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"  ></i> Prix</th>
                    <th><a href='?basic_table.php' class="fa fa-bookmark" ></a> Data</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"  ></i> Id Utilisateur</th>
                    <th><i class=" fa fa-edit"></i> Date</th>
                    <th></th>
                  </tr> ' 
                </thead>
                <tbody>




                      <?php

$sort == 'DESC' ? $sort='ASC' : $sort = 'DESC' ; 
                      while($row = $commandes->fetch_assoc()) {  

                      echo '
                  <tr>
                    <td>
                      <a href="#" id="productname">' . $row["id"] . '</a>
                    </td>
                    <td class="hidden-phone" id="productPrice"> '. $row["price"] .  ' </td>
                    <td id="productQuantity"> '. $row["cart"]. ' </td>
                    <td id="idUtilis"> '. $row["userid"]. ' </td>
                    <td id="productAlert">';

                    
                      echo '<span class="label label-info label-mini">'.$row["time"].'</span>';
                    
                    echo '</td>
                    <td id="actions">
                      <button id="deleteCommandeBtn" productId="'.$row["id"].'" class="btn btn-danger btn-xs deleteCommandeBtn"><i class="fa fa-trash-o "></i></button>
                    </td>
                  </tr> '; } 




                      ?>







                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <br>













                </div>
        </div>
        </div>












      </section>
    </section>

    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
<?php require 'footer.php';?>
    <!--footer end-->
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
  <script>

$('.deleteProductBtn').each(function(btn){
      $(this).click(function(){

      $(this).parent().parent().remove();

      $.get( "deleteProduct.php?id="+this.getAttribute("productId"), function( data ) {

      }.bind(this));


      });
  });
$('.deleteCommandeBtn').each(function(btn){
      $(this).click(function(){

      $(this).parent().parent().remove();

      $.get( "deleteCommande.php?id="+this.getAttribute("productId"), function( data ) {

      }.bind(this));


      });
  });
$('.editProductBtn').each(function(btn){
      $(this).click(function(){

     /* e.preventDefault(); 
      window.open($(this).attr('url'));*/
      window.location = "editProduct.php?id="+ $(this).attr("productId");


      });
  });












</script>
  
</body>

</html>

