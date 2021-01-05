<?php





include "core/ParticipationC.php";
include "core/EventC2.php";


 session_start(); 
 if (empty($_SESSION['auth']))
 {
     echo "<script type='text/javascript'>";
echo "alert('Please Login First');
window.location.href='../login.html';";
echo "</script>";
    

 }
   require ("pdf/fpdf.php");
 $ParticipationC=new ParticipationC();
 $EventC2=new EventC();
 $listelesparticipation_tous_event=$ParticipationC->afficherlesparticipation_event($_POST['id']); 


$event = $EventC2->recupererevent($_POST['id']);
$titre = $event[0]->titre;


    $pdf=new FPDF('P','mm','A3');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',14);
 

    
   $pdf->Cell(130,5,'PDF pour ADMIN ! titre de event :',1,0);
    $pdf->Cell(59,5,$titre,1,1);
    $pdf->Cell(130,5,' ',0,1);

    $pdf->SetFont('Arial','',12);


    $pdf->Cell(8,5,'#',1,0);
    $pdf->Cell(120,5,'Date de Event',1,0);

    $pdf->Cell(30,5,'nom Client',1,0);
   $pdf->Cell(30,5,'prenom Client',1,0);
    $pdf->Cell(50,5,'mail',1,1);
    
           

    foreach($listelesparticipation_tous_event as $row){

    $pdf->Cell(8,5,$row["id"],1,0);
        $pdf->Cell(120,5, $row['date_debut']  ."Jusqu' a ".   $row['date_fin'],1,0);

         $pdf->Cell(30,5,$row["nom"],1,0);
  
 $pdf->Cell(30,5,$row['prenom'],1,0);
 $pdf->Cell(50,5,$row['mail'],1,1);
                  
}
  


    $dest = $_SESSION['lastname'].'_'.date("Y-m-d-h-m-s").'_event.pdf';
    $pdf->Output('F', $dest);
        header('Location: AfficherEvent.php');

?>