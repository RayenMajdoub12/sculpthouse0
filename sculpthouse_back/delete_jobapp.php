<?php 
      require 'db.php' ;
      $req=$pdo ->prepare('DELETE FROM job_app WHERE id=:num LIMIT 1 ');
      $req->bindValue(':num',$_GET['id'],PDO::PARAM_INT);
       $executedone=$req->execute();
       if($executedone)
       {
       header('location:job_app.php');
     }
     else{

     header('location:500.php');

     }

       

      
?>