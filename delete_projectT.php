<?php
       

       include('interrog_db.php');
                            
                            
                           $reponse = $bdd->query('SELECT id FROM project WHERE titre=\'' . $_POST['nom'] . '\'');
                             
                            if($donnees = $reponse->fetch())

                           {
                            $bdd->query("DELETE FROM project WHERE id=".$donnees['id']);
                            
                          
                            echo'projet suprime avec succes';
                   
                           }           
                            else
                            {
                                
                                echo'projet introuvable';
                   
                            }
                        
                       

                                
                               
?>