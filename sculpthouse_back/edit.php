<?php
require 'db.php';
$req=$pdo ->prepare('UPDATE users set firstname=:firstname ,lastname=:lastname,username=:username,password=:password,email=:email WHERE id=:num LIMIT 1');
      $req->bindValue(':num',$_POST['id'],PDO::PARAM_INT);
      $req->bindValue(':firstname',$_POST['firstname'],PDO::PARAM_STR);
      $req->bindValue(':lastname',$_POST['lastname'],PDO::PARAM_STR);
      $req->bindValue(':username',$_POST['username'],PDO::PARAM_STR);
      $req->bindValue(':password',$_POST['password'],PDO::PARAM_STR);
      $req->bindValue(':email',$_POST['email'],PDO::PARAM_STR);
      
       $executedone=$req->execute();
       if($executedone)
       {
       header('location:basic_table.php');
     }
     else{

     header('location:500.php');
     }
