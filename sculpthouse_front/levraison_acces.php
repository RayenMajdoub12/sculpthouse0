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
foreach($unecmd as $commande) 
{  
     $req=$pdo->prepare("INSERT FROM dilevery SET commande_id=? , user_id = ?,location=? city=?");
     $req->execute([$commande,$userid,$location,$city]) ;
}
echo'hi';
}
?>