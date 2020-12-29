<?php 
require 'function.php';
require 'db.php' ;
$status = 'error'; 
$errors=array();
if(!empty($_POST)){
$req=$pdo ->prepare('SELECT * FROM users WHERE users.username = :username AND users.password = :password UNION SELECT * FROM employee WHERE employee.username = :username AND employee.password = :password  ');
$req->execute(['username' => $_POST['username'],'password'=>$_POST['password']]);
$user = $req->fetch();
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
    
if($user && $status!='error')
{
    session_start();
$_SESSION['auth']=$user;
$_SESSION['flash']['sucess']='You are connected';
header('location:../profile.php');
exit();
}
else{
   
    $errors['input']='Username or Password incorrect';
     

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

