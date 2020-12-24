<?php 
      require 'db.php' ;
      $req=$pdo ->prepare('DELETE FROM users WHERE id=:num LIMIT 1 ');
      $req->bindValue(':num',$_GET['id'],PDO::PARAM_INT);
       $executedone=$req->execute();
       if($executedone)
       {
       header('location:basic_table.php');
     }
     else{

     header('location:500.php');

     }

       

      
?>