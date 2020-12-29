<?php
require 'db.php';
$req=$pdo ->prepare('UPDATE employee set salary=:salary ,missed_days=:missed_days WHERE id=:num LIMIT 1');
      $req->bindValue(':num',$_POST['id'],PDO::PARAM_INT);
      $req->bindValue(':salary',$_POST['salary'],PDO::PARAM_INT);
      $req->bindValue(':missed_days',$_POST['missed_days'],PDO::PARAM_INT);
     
      
       $executedone=$req->execute();
       if($executedone)
       {
       header('location:employee.php');
     }
     else{

     header('location:500.php');
     }
