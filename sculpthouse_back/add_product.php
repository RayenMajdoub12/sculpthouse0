<?php  
session_start();

if(isset($_POST['name']) && isset($_POST['price']) && isset($_FILES['image']))
{
require_once 'db.php'; 


/*$name = $_POST['name']; 
$quantite = $_POST['quantite']; 
$price = $_POST['price']; 
$image = $_POST['image']; 
*/







$req=$pdo ->prepare("INSERT INTO tbl_product SET name = ?,image = ?,price = ? ,quantite = ?"); 


   if(isset($_FILES['image'])){



      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $explodedThing = explode('.',$_FILES['image']['name']);
      $file_ext=strtolower(end($explodedThing));
      
      $extensions= array("jpeg","jpg","png");
      $date = new DateTime();
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"../sculpthouse_front/imgUploads/ ".$date->getTimestamp().'.'.$file_ext);
         echo "Success";
      }else{
         print_r($errors);
      }
   }




$req->execute([$_POST['name'],"../sculpthouse_front/imgUploads/".$date->getTimestamp().'.'.$file_ext,$_POST['price'],$_POST['quantite']]);
  

}
 

?>










<?php require 'header_sidebar.php';?>
    <!--sidebar end-->
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
                      <input class=" form-control"  name="name" minlength="2" type="text" required />
                    </div>
                  </div>

          

                  <div class="form-group ">
                    <label for="Quantity" class="control-label col-lg-2">Quantity (required)</label>
                    <div class="col-lg-10">
                      <input type="number" name="quantite"  min="1" step="any">
                    </div>
                  </div> 
                   <div class="form-group ">
                    <label for="Quantity" class="control-label col-lg-2">Price (required)</label>
                    <div class="col-lg-10">
                      <input type="price" name="price"  min="1" step="any">
                    </div>
                  </div> 
                  
                  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                      <div>
                        <span class="btn btn-theme02 btn-file">
                          <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                        <input type="file" name="image" class="default" />
                        </span>
                        <a href="form_validation.php#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
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
