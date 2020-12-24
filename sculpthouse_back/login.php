<?php 
$sitekey ='6Lc5-gQaAAAAAOtB16Ftl-9cJ9yz-gAkM_Eb16y8';
$secretkey='6Lc5-gQaAAAAANN71A2RpZg1F-N9-AA8aAYuoSUq';
$status = 'error';
$errors=array();
if(!empty($_POST)){
  require_once 'db.php' ;
$req=$pdo ->prepare('SELECT * FROM admins WHERE username = :username AND password = :password ');
$req->bindValue(':username', $_POST['username'], PDO::PARAM_STR);
$req->bindValue(':password', $_POST['password'], PDO::PARAM_STR);
$req->execute();
$admin =$req->fetch();
if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){ 
  // Google reCAPTCHA API secret key 
  $secretKey = '6Lc5-gQaAAAAANN71A2RpZg1F-N9-AA8aAYuoSUq'; 
   
  // Verify the reCAPTCHA response 
  $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$_POST['g-recaptcha-response']); 
   
  // Decode json data 
  $responseData = json_decode($verifyResponse); 
   
  // If reCAPTCHA response is valid 
  if($responseData->success){ 
  $status = 'success'; 
  }else{ 
      $errors['verfication'] = 'Robot verification failed, please try again.'; 
  } 
}else{ 
  $errors['checkbox'] = 'Please check on the reCAPTCHA box.'; 
} 
 
if($admin && $status!='error')
{
  session_start();
$_SESSION['auth']=$admin;
$_SESSION['flash']['sucess']='You are connected';
header('location:index.php');
exit();
}
else{
   
    $_SESSION['flash']['danger']='Username or Password incorrect';
     }
    }
?>
<?php if(!empty($errors)):?>
    <div class="alert alert-danger">
    <p> you have not completed the form correctly  </p>
    <ul>  
    <?php foreach($errors as $error):?>
       <li> <?= $error; ?>   </li>
    <?php endforeach; ?>
    
    <?php endif; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Login</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="" method="POST">
        <h2 class="form-login-heading">sign in now</h2>
        <div class="login-wrap">
          <input type="text" class="form-control" name="username" placeholder="User ID" autofocus >
          <br>
          <input type="password" class="form-control" placeholder="Password" name="password">
          <label class="checkbox">
            <input type="checkbox" value="remember-me"> Remember me
            <span class="pull-right">
            <a data-toggle="modal" href="forgotpassword.php"> Forgot Password?</a>
            </span>
            </label>
          <button class="btn btn-theme btn-block"  type=submit><i class="fa fa-lock"></i> SIGN IN</button>
          <br>
          <div class="g-recaptcha" data-sitekey="<?php echo $sitekey ;?>"	data-theme="dark"></div>
          </div>   
      </form>
  </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/login-bg.jpg", {
      speed: 500
    });
  </script>
</body>

</html>
