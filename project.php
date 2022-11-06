<?php include("nav.php");?>

<section>
<h2>Projets de la commune de Tazmalt</h2>
<table>
           <tr>
             <th>Projet</th>
             <th>Date debut de projet</th>
             <th>Date fin de prjet</th>
             <th>Etat d'avancement du projet</th>
             <th>Details sur le projet</th>
             
           </tr> 
<?php
           include('interrog_db.php');
                
           $reponse = $bdd->query('SELECT * FROM project ORDER BY date_begin DESC');
            
           while ($donnees = $reponse->fetch())
           {
                    
         
            
echo' <tr>';
echo'<td>'.$donnees['titre'].'</td>';
echo' <td>'.$donnees['date_begin'].'</td>';
echo' <td>'.$donnees['date_final'].'</td>';
echo' <td>'.$donnees['etat'];
echo' <td>'.$donnees['details'].'
</td>';
           echo' </tr>';
           }?>

</table>
    
         
</section>
<?php include("footer.php");?>
