<?php require_once 'function.php';?>
<?php 
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'C:\Users\Rayen\vendor/phpmailer/phpmailer/src/Exception.php';
  require 'C:\Users\Rayen\vendor/phpmailer/phpmailer/src/PHPMailer.php';
  require 'C:\Users\Rayen\vendor/phpmailer/phpmailer/src/SMTP.php';

  // Include autoload.php file
  require 'C:\Users\Rayen\vendor/autoload.php';
  // Create object of PHPMailer class
  $mail = new PHPMailer(true);

  $output = '';
$status = 'error'; 
session_start();
if(!empty($_POST)){
      $errors=array();
    require_once 'db.php';
    // Validate form fields 
 
       $req=$pdo ->prepare('SELECT id FROM job_app WHERE username = ?');
       $req->execute([$_POST['username']]);
       $user = $req->fetch();
       if($user)
       {
           $errors['username']='this username is already taken';
       }
       $req=$pdo ->prepare('SELECT id FROM job_app WHERE email = ?');
       $req->execute([$_POST['email']]);
       $user = $req->fetch();
       if($user)
       {
           $errors['email']='this email is already used for another account';
       }
       if($_POST['password']!=$_POST['password2']){
            $errors['password']="you must enter a valid password";
                    }    
       // Validate reCAPTCHA box 
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
}
      
 if(empty($errors) && $status!='error')
 {
   $type='employee';
 $req=$pdo ->prepare("INSERT INTO job_app SET firstname = ?,lastname = ?,birthday = ?,phone = ? ,email = ?  , username = ? , gender = ?,work= ?,country = ? , zipcode = ? ,speciality = ? ,cv = ? ,online = ? , password = ?,confirmation_token = ?,type = ?" );  
 $token= str_random(20); 
 $req->execute([$_POST['firstname'],$_POST['lastname'],$_POST['birthday'],$_POST['phone'],$_POST['email'],$_POST['username'],$_POST['gender'],$_POST['work'],$_POST['country'],$_POST['zipcode'],$_POST['speciality'],$_POST['cv'],$_POST['online'],$_POST['password'],$token,$type]);
 $user_id = $pdo->lastInsertId(); 
 try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    // Gmail ID which you want to use as SMTP server
    $mail->Username = 'wampmail10@gmail.com';
    // Gmail Password
    $mail->Password = 'sendmail10';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Email ID from which you want to send the email
    $mail->setFrom('wampmail10@gmail.com');
    // Recipient Email ID where you want to receive emails
    $mail->addAddress($_POST['email']);

    $mail->isHTML(true);
    $mail->Subject = 'Verification Mail';
    $mail->Body = "<h3>Hi  $name <br>click on this link to confirm \n\n  http://localhost/sculpthouse/sculpthouse_front/confirm_coach.php?id=$user_id&token=$token <br>We Will Respond As Soon As Possible  </h3>";

    $mail->send();
    $output = '<div class="alert alert-success">
                <h5>Thankyou! for contacting us, We\'ll get back to you soon!</h5>
              </div>';
  } catch (Exception $e) {
    $output = '<div class="alert alert-danger">
                <h5>' . $e->getMessage() . '</h5>
              </div>';
  }

 $_SESSION['flash']['sucess']='a confirmation email has been sent to validate your account ';
 header('location:../index.php') ;
exit();  
 }
 ?>
 <?php if(!empty($errors)):?>
 <div class="alert alert-danger">
 <p> you have not completed the form correctly  </p>
 <ul>  
 <?php foreach($errors as $error):?>
    <li> <?= $error; ?>   </li>
 <?php endforeach; ?>
 </ul>
 <div class="small"><a href="../signup_coach.php">signup</a></div>
</div>
<?php endif; ?>
	
  