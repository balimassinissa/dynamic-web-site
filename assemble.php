<?php include("nav.php");?>
<style>
 .my_text{
     color:black;
     text-decoration:dashed;
     font-size :large;
 }
</style>
<section>
<h2>Assemblée populaire communale Tazmalt</h2>
<div class="row">
<?php
           include('interrog_db.php');
                           
           $reponse = $bdd->query('SELECT * FROM assemble');
           
           while ($donnees = $reponse->fetch())
           {
          
          echo'<div class="column">';
          echo'  <div class="card">';
             echo' <h2>'.$donnees['prenom'].' '. $donnees['nom'].' </h2>';
             echo' <img src="'.$donnees['photo'].'" alt="Jane" style="width:80% ;margin: 10%;">';
              echo'<div class="container">'; 
               
              echo'  <p class="my_text">Poste occupe a l"apc :'.$donnees['post'].'</p>';
              echo'  <p class="my_text">Parti politique :'.$donnees['parti_politique'].'</p>';
             echo' </div>';
            echo'</div>';
echo'        </div>';}?>
    </div>
         
</section>
<?php include("footer.php");?>
