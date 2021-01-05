<?php
if(!empty($_POST))
{
    require 'User/db.php';
$location=$_POST['location'];
$city=$_POST['city'];
$userid = $_POST['id'];
$commandes = $pdo->prepare("SELECT id FROM commandes WHERE userid =? ");
$commandes->execute([$userid]);
$unecmd=$commandes->fetchall();
//var_dump($unecmd);


foreach($unecmd as $commande) 
{  

     $req=$pdo->prepare("INSERT INTO dilevery SET commande_id=? , user_id = ?,location=?, city=?");
     $req->execute([$commande->id,$userid,$location,$city]) ;
}
header("location:success_dilevery.php?id=$userid");
}
?>