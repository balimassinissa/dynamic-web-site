<?php
                           include('interrog_db.php');
                             $info_fichier = basename($_FILES['monfichier']['name']);
                             move_uploaded_file($_FILES["monfichier"]["tmp_name"],"./uploads/".$info_fichier);
                            
                            $jour = date('d');
                            $mois = date('m');
                            $annee = date('Y');
                            $date1 = "$annee-$mois-$jour";
                            $titre = $_POST['titre'];
                            $contenu = $_POST['message'];
                           
                             $req = $bdd->prepare('INSERT INTO infos(titre, contenu,photo,date_add) VALUES(:titre, :contenu, :photo, :date_add)');
                             $req->execute(array(
                                 'titre' => $titre,
                                 'contenu' => $contenu,
                                 'date_add' => $date1,
                                 'photo'=>"uploads/".basename($_FILES['monfichier']['name'])
                                 ));
                                
                                 echo'Actualite ajoutée avec succés';

                                
                               
?>