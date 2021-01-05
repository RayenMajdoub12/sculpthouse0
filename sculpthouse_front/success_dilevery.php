 
 <?php require 'header.php';?>
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
 if($_GET['id'])
 {
    $user_id=$_GET['id'] ;
     require 'User/db.php';
     $req=$pdo("SELECT email FROM users WHERE id=$user_id");
     $email=$req->execute();


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
    $mail->addAddress($email);

    $mail->isHTML(true);
    $mail->Subject = 'Verification Mail';
    $mail->Body = "<h3>Hi  $name <br>click on this link to confirm the delivery<br>http://localhost/sculpthouse/sculpthouse_front/confirm.php?id=$user_id <br>You will get delivery after 2 days </h3>";

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
 header('Location: ../login.php');
exit();  
 }
 }
 ?>
 <div class="container ">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Sucess!!!</h2>
                    <h3>Check your email to confirm the dilevery</h3>
          <button class="btn btn-theme04" type="button"onclick="window.location.href = 'profile.php';">Profile</button>
				</div>
			</div>
		</div>
 
 <?php require 'footer.php';?>