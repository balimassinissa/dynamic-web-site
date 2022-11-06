<?php
       

       include('interrog_db.php');
                            
                            
                           $reponse = $bdd->query('SELECT id FROM infos WHERE titre=\'' . $_POST['nom'] . '\'');
                             
                            if($donnees = $reponse->fetch())

                           {
                            $bdd->query("DELETE FROM infos WHERE id=".$donnees['id']);
                            
                          
                            echo'actualite  suprimee avec succes';
                   
                           }           
                            else
                            {
                                
                                echo'actualite introuvable';
                   
                            }
                        
                       

                                
                               
?>