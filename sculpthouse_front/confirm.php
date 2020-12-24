<?php
$user_id=$_GET['id'];
$token =$_GET['token'];
require 'User/db.php';
$req=$pdo->prepare('SELECT confirmation_token FROM users WHERE id=?');
$req->execute([$user_id]);
$user=$req->fetch();
if($user  &&  $user->confirmation_token==$token)
 {
$pdo->prepare('UPDATE users SET confirmation_token = NULL,confirmed_at= NOW()  WHERE id=? ')->execute([$user_id]);
 header('location:login.php');
 }
 else 
 {
     die('ACCOUNT NOT CONFIRMED');
 }
