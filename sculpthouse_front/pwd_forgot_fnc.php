<?php 
      require 'User/function.php';   
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
    if(!empty($_POST['email']))
    {
        require 'User/db.php';
     $user_email=$_POST['email'];
     $token=str_random(10);
     $expires=date("U") + 1800 ;
     $req=$pdo->prepare("DELETE FROM pwdreset WHERE pwd_reset_email=?" );
     $req->execute([$user_email]);
     $req=$pdo->prepare('INSERT INTO pwdreset SET pwd_reset_token = ?,pwd_reset_email=?,pwd_reset_expires=?') ;
     $req->execute([$token,$user_email,$expires]) ;
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
        $mail->addAddress($user_email);
    
        $mail->isHTML(true);
        $mail->Subject = 'Verification Mail';
        $mail->Body = "<h3>Hi  $name <br>click on this link to reset your password <br> http://localhost/sculpthouse/sculpthouse_front/resetpwd.php?token=$token&email=$user_email <br>Thanks for joining Sculpt House family </h3>";
    
        $mail->send();
        $output = '<div class="alert alert-success">
                    <h5>Thankyou! for contacting us, We\'ll get back to you soon!</h5>
                  </div>';
      } catch (Exception $e) {
        $output = '<div class="alert alert-danger">
                    <h5>' . $e->getMessage() . '</h5>
                  </div>';
      }
      
     header('Location:pwd_forgot.php?notification=success');
    exit();  
     }
     

      ?>