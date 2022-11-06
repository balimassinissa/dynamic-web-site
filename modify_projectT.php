<?php
       

       include('interrog_db.php');
                            
                            
                           $reponse = $bdd->query('SELECT id FROM project WHERE titre=\'' . $_POST['titre'] . '\'');
                             
                            if($donnees = $reponse->fetch())

                           {
                            $req = $bdd->prepare('UPDATE project SET date_final = :nvdate, etat= :nvetat WHERE id = :id_');
                            $req->execute(array(
                                'nvdate' => $_POST['date_final'],
                                'nvetat' => $_POST['etat'],
                                'id_' => $donnees['id']
                                ));
                          
                            echo'projet modifie avec succes';
                   
                           }           
                            else
                            {
                                
                                echo'projet introuvable';
                   
                            }
                        
                       

                                
                               
?>