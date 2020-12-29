<?php 
      require 'db.php' ;
      $req=$pdo ->prepare('SELECT * FROM job_app WHERE id=:num LIMIT 1');
      $req->bindValue(':num',$_GET['id'],PDO::PARAM_INT);
       $executedone=$req->execute();
       $user=$req->fetch();


       $emp=$pdo ->prepare("INSERT INTO employee SET firstname = ?,lastname = ?,birthday = ?,phone = ? ,email = ?  , username = ? , gender = ?,work= ?,country = ? , zipcode = ? ,speciality = ?  ,online = ? , password = ?,type = ?,confirmed_at= NOW()" ); 
       $emp->execute([$user->firstname,$user->lastname,$user->birthday,$user->phone,$user->email,$user->username,$user->gender,$user->work,$user->country,$user->zipcode,$user->speciality,$user->online,$user->password,$user->type]);
      
      $req=$pdo ->prepare('DELETE FROM job_app WHERE id=:num LIMIT 1 ');
      $req->bindValue(':num',$_GET['id'],PDO::PARAM_INT);
       $executedone=$req->execute();
       if($executedone)
       {
       header('location:job_app.php');
     }
       
?>