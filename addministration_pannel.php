<?php
        session_start();
        if( isset($_SESSION['uname']) )
       {?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
        <link href="etat_civile.css" rel="stylesheet">
  
        <title>Tazmalt</title>
    </head>
    <body>
    <?php
       
        
           
                    if($_SESSION['uname']== 'apc_tazamlt_admin'){
                   ?>
                   <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="deconnect.php">Deconnexion</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
     
    </div>
  </nav> 
                   <div class="row">
                   <div class="column">
                       <div class="card">
                         <h2>actualite/annonce/appel d'offre</h2>
                         <img src="photo/actu.png" alt="Jane" style="width:80% ;margin: 10%;">
                         <div class="container"> 
                           
                           <a href="post_actu.php"><button class="button">Ajouter une actualite/annonce/appel d'offre</button></a>
                         </div>
                       </div>
                     </div>
                   
                     <div class="column">
                         <div class="card">
                           <h2>Actualite/annonce/appel d'offre</h2>
                           <img src="photo/actu.png" alt="Jane" style="width:80% ;margin: 10%;">
                           <div class="container"> 
                             
                             <a href="delete_actu.php"><button class="button">Supprimer une actualite/annonce/appel d'offre</button></a>
                           </div>
                         </div>
                     </div>
                     <div class="column">
                         <div class="card">
                           <h2>Projets</h2>
                           <img src="photo/projet.png" alt="Jane" style="width:80% ;margin: 10%;">
                           <div class="container"> 
                             
                             <a href="post_project.php"><button class="button">Ajouter un projet</button></a>
                           </div>
                         </div>
                     </div>
                     <div class="column">
                         <div class="card">
                           <h2>Projets</h2>
                           <img src="photo/projet.png" alt="Jane" style="width:80% ;margin: 10%;">
                           <div class="container"> 
                             
                             <a href="delete_project.php"><button class="button">Supprimer un projet</button></a>
                           </div>
                         </div>
                     </div>
                     <div class="column">
                         <div class="card">
                           <h2>Projets</h2>
                           <img src="photo/projet.png" alt="Jane" style="width:80% ;margin: 10%;">
                           <div class="container"> 
                             
                             <a href="modify_project.php"><button class="button">Modifier un projet</button></a>
                           </div>
                         </div>
                     </div>
                     <div class="column">
                         <div class="card">
                           <h2>Assemblee Commuanle</h2>
                           <img src="photo/assemble.png" alt="Jane" style="width:80% ;margin: 10%;">
                           <div class="container"> 
                             
                             <a href="post_elu.php"><button class="button">Ajouter un elu</button></a>
                           </div>
                         </div>
                     </div>
                     <div class="column">
                         <div class="card">
                           <h2>Assemblee Commuanle</h2>
                           <img src="photo/assemble.png" alt="Jane" style="width:80% ;margin: 10%;">
                           <div class="container"> 
                             
                             <a href="delete_Elu.php"><button class="button">Supprimer un elu</button></a>
                           </div>
                         </div>
                     </div>
                     <div class="column">
                         <div class="card">
                           <h2>Annuaire de l'apc</h2>
                           <img src="photo/contact.png" alt="Jane" style="width:80% ;margin: 10%;">
                           <div class="container"> 
                             
                             <a href="post_contact.php"><button class="button">Ajouter un contact</button></a>
                           </div>
                         </div>
                     </div>
                     
                   
                   
               </div>
                        <?php
                    }
               
            }
            else{
                
             header('location:login.php');
            }
    ?>
    
        
    </body>
</html>