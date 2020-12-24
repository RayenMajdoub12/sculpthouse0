<?php
$user_id=$_GET['id'];
$token =$_GET['token'];
require 'db.php';
$req=$pdo->prepare('SELECT confirmation_token FROM job_app WHERE id=?');
$req->execute([$user_id]);
$user=$req->fetch();
if($user  &&  $user->confirmation_token==$token)
 {
$pdo->prepare('UPDATE job_app SET confirmation_token = NULL,confirmed_at= NOW()  WHERE id=? ')->execute([$user_id]);
 header('location:index.php');
 }
 else 
 {
     die('ACCOUNT NOT CONFIRMED');
 }