<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/w3css/3/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

  <title>APC_TAZMALT </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>


  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="etat_civile.css">

</head>

<body>
  <div class="entete">
    <div id="logo" style="margin-left: 10px;">
      <img src="Tazmalt.png" alt="logo">

    </div>
    <p class="entete_titre">
      APC TAZMALT
    </p>
    <div id="logo" style="margin-right: 10px;">
      <img src="Tazmalt.png" alt="logo">

    </div>
  </div>

  <!-- Start navbar -->
  <!-- Nav tabs -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a style="color:white;" class="navbar-brand" href="index.php">Accueil</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">

          <li class="nav-item dropdown">
            <a style="color:white;" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Decouverte
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="Histoire.php">Histoire,Patrimoinie</a></li>
              <li><a class="dropdown-item" href="presentation.php">Présentation</a></li>
               </ul>
          </li>

          <li class="nav-item dropdown">
            <a style="color:white;" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              APC Tazmalt
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="assemble.php">L'assemlée</a></li>
            <li><a class="dropdown-item" href="project.php">Projets</a></li>

          </ul>
          </li>

          <li class="nav-item dropdown">
            <a style="color:white;" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Service
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="etat_civile.php">Etat civile/Biometrie</a></li>
              
              <li><a class="dropdown-item" href="urbanisme.php">Urbanisme/solidarité</a></li>
             
            </ul>
            <li class="nav-item">
            <a style="color:white;" class="nav-link activea" aria-current="page" href="actu.php">Actualites et annonces</a>
          </li>
          <li class="nav-item">
            <a style="color:white;" class="nav-link activea" aria-current="page" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>