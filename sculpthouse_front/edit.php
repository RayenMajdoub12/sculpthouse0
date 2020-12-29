<?php
require 'User/db.php';
if($_POST['type']=='user')
{
$req=$pdo ->prepare('UPDATE users set firstname=:firstname ,lastname=:lastname,username=:username,password=:password,email=:email,birthday=:birthday,phone=:phone,gender=:gender,weight=:weight,height=:height,country=:country,zipcode=:zipcode,goalweight=:goalweight,sport=:sport WHERE id=:num LIMIT 1');
      $req->bindValue(':num',$_POST['id'],PDO::PARAM_INT);
      $req->bindValue(':firstname',$_POST['firstname'],PDO::PARAM_STR);
      $req->bindValue(':lastname',$_POST['lastname'],PDO::PARAM_STR);
      $req->bindValue(':username',$_POST['username'],PDO::PARAM_STR);
      $req->bindValue(':password',$_POST['password'],PDO::PARAM_STR);
      $req->bindValue(':email',$_POST['email'],PDO::PARAM_STR);
      $req->bindValue(':birthday',$_POST['birthday'],PDO::PARAM_STR);
      $req->bindValue(':phone',$_POST['phone'],PDO::PARAM_INT);
      $req->bindValue(':gender',$_POST['gender'],PDO::PARAM_STR);
      $req->bindValue(':weight',$_POST['weight'],PDO::PARAM_INT);
      $req->bindValue(':height',$_POST['height'],PDO::PARAM_INT);
      $req->bindValue(':country',$_POST['country'],PDO::PARAM_STR);
      $req->bindValue(':zipcode',$_POST['zipcode'],PDO::PARAM_INT);
      $req->bindValue(':goalweight',$_POST['goalweight'],PDO::PARAM_INT);
      $req->bindValue(':sport',$_POST['sport'],PDO::PARAM_STR);
      $executedone=$req->execute();
    }
    else if($_POST['type']=='employee')
{
$req=$pdo ->prepare('UPDATE employee set firstname=:firstname ,lastname=:lastname,username=:username,password=:password,email=:email,birthday=:birthday,phone=:phone,gender=:gender,country=:country,zipcode=:zipcode WHERE id=:num LIMIT 1');
      $req->bindValue(':num',$_POST['id'],PDO::PARAM_INT);
      $req->bindValue(':firstname',$_POST['firstname'],PDO::PARAM_STR);
      $req->bindValue(':lastname',$_POST['lastname'],PDO::PARAM_STR);
      $req->bindValue(':username',$_POST['username'],PDO::PARAM_STR);
      $req->bindValue(':password',$_POST['password'],PDO::PARAM_STR);
      $req->bindValue(':email',$_POST['email'],PDO::PARAM_STR);
      $req->bindValue(':birthday',$_POST['birthday'],PDO::PARAM_STR);
      $req->bindValue(':phone',$_POST['phone'],PDO::PARAM_INT);
      $req->bindValue(':gender',$_POST['gender'],PDO::PARAM_STR);
      $req->bindValue(':country',$_POST['country'],PDO::PARAM_STR);
      $req->bindValue(':zipcode',$_POST['zipcode'],PDO::PARAM_INT);
     
      $executedone=$req->execute();
    }
?>
       
      <?php if($executedone && $_POST['type']=='user') : ?>
        
        <?php
        
         $req=$pdo ->prepare('SELECT * FROM users WHERE id=:num LIMIT 1');
$req->bindValue(':num',$_POST['id'],PDO::PARAM_INT);
 $executedone=$req->execute();
 $user=$req->fetch();
session_start();
 $_SESSION['auth']=$user ;

 ?>
  <?php require 'header.php';?>
 <div class="container ">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Sucess!!!</h2>
          <button class="btn btn-theme04" type="button"onclick="window.location.href = 'profile.php';">Profile</button>
				</div>
			</div>
		</div>
 
 <?php require 'footer.php';?>
 <?php endif ; ?>
       <?php if($executedone && $_POST['type']=='employee') : ?>
       <?php
        $req=$pdo ->prepare('SELECT * FROM employee WHERE id=:num LIMIT 1');
            $req->bindValue(':num',$_POST['id'],PDO::PARAM_INT);
             $executedone=$req->execute();
             $user=$req->fetch();
             session_start();
    $_SESSION['auth']=$user ;
             ?>
             
        
 
 <?php require 'header.php';?>
 <div class="container ">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Sucess!!!</h2>
          <button class="btn btn-theme04" type="button"onclick="window.location.href = 'profile.php';">Profile</button>
				</div>
			</div>
		</div>
 
 <?php require 'footer.php';?>
 <?php endif ; ?>

