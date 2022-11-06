
<?php
include('interrog_db.php');


$titre = $_POST['titre'];
$date_begin = $_POST['date_begin'];
$date_final = $_POST['date_final'];
$details = $_POST['details'];
$etat = $_POST['etat'];
$req = $bdd->prepare('INSERT INTO project(titre,details,date_begin,date_final,etat) VALUES(:titre, :details, :date_begin, :date_final, :etat)');
$req->execute(array(
    'titre' => $titre,
    'date_begin' => $date_begin,
    'date_final' => $date_final,
    'etat' =>$etat,
    'details'=>$details));
    
    echo'projet ajouté avec succés';
   

   
  
?>