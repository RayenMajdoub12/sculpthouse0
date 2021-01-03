

<?php require 'header_sidebar.php';?>
<?php  



if(!isset($_GET['id']))
{
  die("need id");
}

  $mysqli = mysqli_connect("localhost", "root", "", "sculpt") or die("Couldn't complete connection with db");
  $productId = $mysqli->real_escape_string($_GET['id']);

  $obj = $mysqli->query("SELECT * FROM `tbl_product` WHERE id='$productId' LIMIT 1");

  if(!$obj)
    {
        echo("Error description: " . $mysqli -> error);
        die();
    }

  $theProduct = mysqli_fetch_assoc($obj);

  if(!$theProduct)
  {


    die("product not found");


  }


if(isset($_POST['name']) && isset($_POST['price']))
{
require_once 'db.php'; 


/*$name = $_POST['name']; 
$quantite = $_POST['quantite']; 
$price = $_POST['price']; 
$image = $_POST['image']; 
*/



//$productId = $_GET["productId"];

    $obj = $mysqli->query("UPDATE `tbl_product` SET `name` = '" . $_POST['name'] ."', `price`='". $_POST["price"] ."', `quantite`='".$_POST["quantite"]."' WHERE `id` = $productId;") or die("0");

    header('Location: product_order.php');


}
 

?>











    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        
        <!-- BASIC FORM VALIDATION -->
        
                
               
           
            <!-- /form-panel -->
          
        <!-- /row -->
        <!-- FORM VALIDATION -->
        <div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> Add product</h4>
            <div class="form-panel">
              <div class=" form">
<!--formmm-->

                <form class="cmxform form-horizontal style-form" id="commentForm" method="post" action="" enctype="multipart/form-data">
                  <div class="form-group ">
                    <label for="name" class="control-label col-lg-2">Name (required)</label>
                    <div class="col-lg-10">
                      <input class=" form-control"  name="name" minlength="2" value="<?php echo $theProduct["name"]; ?>" type="text" required />
                    </div>
                  </div>
              <input type="hidden" id="productId" name="productId" value="<?php echo $theProduct["id"]; ?>">

          

                  <div class="form-group ">
                    <label for="Quantity" class="control-label col-lg-2">Quantity (required)</label>
                    <div class="col-lg-10">
                      <input type="number" name="quantite" value="<?php echo $theProduct["quantite"]; ?>" min="1" step="any">
                    </div>
                  </div> 
                   <div class="form-group ">
                    <label for="Quantity" class="control-label col-lg-2">Price (required)</label>
                    <div class="col-lg-10">
                      <input type="price" name="price"  min="1" step="any" value="<?php echo $theProduct["price"]; ?>">
                    </div>
                  </div> 
                  
                      
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Save</button>
                      <button class="btn btn-theme04" type="button">Cancel</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
        
        <!-- /row -->
      </section>
      <!-- /wrapper -->
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
  <script src="lib/form-validation-script.js"></script>

</body>

</html>
