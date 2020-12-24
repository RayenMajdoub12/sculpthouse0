<?php
$user_id=$_GET['id'];
$token=$_GET['token'];
require 'db.php' ;
$req = $pdo->prepare('SELECT * FROM users WHERE id = ?');
$req->execute([$user_id]);
$user = $req->fetch();
session_start();
 if($user && $user->confirmation_token==$token)
 {
     
      $pdo->prepare('UPDATE users SET confirmation_token =NULL,confirmed_at = NOW() WHERE id = ?')->execute([$user_id]);
        $_SESSION['auth'] = $user;
        $_SESSION['flash']['sucess']='your account has been validated';
        header('Location: ../profile.php');
 }
else {
    $_SESSION['flash']['danger']="this token is not available"; 
    header('Location: ../login.php');
}


?>