<?php
session_start();
$_SESSION['uname'] = $_POST['uname'];

    include("interrog_db.php");
    $reponse = $bdd->query('SELECT * FROM passwords');
    $donnees = $reponse->fetch();
    if (isset($_POST['psw']) AND isset($_POST['uname']) AND password_verify($_POST['psw'], $donnees['psw']) AND $_POST['uname'] == $donnees['uname']) 
    {
        header('location:addministration_pannel.php');
      
    }
    else{
        
        include("login.php");
        echo'<script>alert("Mot de passe incorrect");</script>';
        
        
        
    }

?>