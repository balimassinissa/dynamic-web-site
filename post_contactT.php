<?php
                           include('interrog_db.php');
                            
                           
                             $req = $bdd->prepare('INSERT INTO contact(nom, numero) VALUES(:nom, :numero)');
                             $req->execute(array(
                                 'nom' => $_POST['nom'],
                                 'numero' => $_POST['num'],
                                  ));
                                 echo'contact ajoutée avec succés';

                                
                               
?>