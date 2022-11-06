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
      <a class="navbar-brand" href="addministration_pannel.php">Acueill</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="deconnect.php">Deconnexion</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
     
    </div>
  </nav> 

  <div class="container">
                            <form action="post_eluT.php"  method="post" enctype="multipart/form-data">
                                <div class="row">
                                <div class="col-25">
                                    <p class="label" >Le nom</p>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="fname" name="nom" placeholder="le nom">
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-25">
                                    <p class="label" >Le prenom</p>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="fname" name="prenom" placeholder="la date de debut">
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-25">
                                    <p class="label" >le post </p>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="fname" name="post" placeholder="le post">
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-25">
                                    <p class="label" >Le pati politique</p>
                                </div>
                                <div class="col-75">
                                    <textarea id="subject" name="parti" placeholder="parti" style="height:200px"></textarea>
                                </div>
                                <div class="row">
                                <div class="col-25">
                                    <p class="label" >inserez une photo d'annonce</p>
                                </div>
                                <div class="col-75"><input type="file" name="monfichier" /><br />
                                </div>
                                </div>
                                <div class="row">
                                <input type="submit" value="ajouter">
                                </div>
                            </form>
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