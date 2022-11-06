
<?php
include('interrog_db.php');
if(basename($_FILES['monfichier']['name'])!='')
{
$info_fichier = basename($_FILES['monfichier']['name']);
move_uploaded_file($_FILES["monfichier"]["tmp_name"],"./uploads/".$info_fichier);
$img = "uploads/".basename($_FILES['monfichier']['name']);
}
else
{
    $img = "photo/carte-identite.png";
}
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$post = $_POST['post'];
$parti = $_POST['parti'];

$req = $bdd->prepare('INSERT INTO assemble(nom,parti_politique,prenom,post,photo) VALUES(:nom, :parti_politique, :prenom, :post, :photo)');
$req->execute(array(
    'nom' => $nom,
    'prenom' => $prenom,
    'post' => $post,
    'photo'=>$img,
    'parti_politique'=>$parti));
    
    echo'Elu ajouté avec succés';
   

   
  
?>