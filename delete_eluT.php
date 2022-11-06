<?php
       

       include('interrog_db.php');
                            
                            
       $reponse = $bdd->query('SELECT id FROM assemble WHERE nom=\'' . $_POST['nom'] . '\' AND prenom=\'' . $_POST['prenom'] . '\'');
                               
                            if($donnees = $reponse->fetch())

                           {
                            $bdd->query("DELETE FROM assemble WHERE id=".$donnees['id']);
                            
                          
                            echo'Elu suprime avec succes';
                   
                           }           
                            else
                            {
                                
                                echo'Elu introuvable';
                   
                            }
                        
                       

                                
                               
?>