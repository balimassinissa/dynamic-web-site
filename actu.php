<?php include("nav.php");?>
<section>
<h2>Les actualites de Tazmalt</h2>
<?php
           include('interrog_db.php');
                           
           $reponse = $bdd->query('SELECT * FROM infos ORDER BY date_add DESC');
           
           while ($donnees = $reponse->fetch())
           {
echo'<img src="'.$donnees['photo'].'" alt="Avatar" class="image" style="width:60%;margin-left:20%;height:400px">';
echo'<h1 style="text-align:center">'.$donnees['titre'].'</h1>';
echo'<p  style="text-align:center">'.$donnees['contenu'].'</p>';
echo'<p style="text-decoration: wavy;margin-left:80%;color:#2f435e">'. $donnees['date_add'].'</p>';
echo'</section>';}?>
<?php include("footer.php");?>
