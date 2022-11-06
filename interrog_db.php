<?php
 try
 {
     $bdd = new PDO('mysql:host=localhost;dbname=tazmalt;charset=utf8', 'root', 'celina1307');
 }
 catch (Exception $e)
 {
         die('Erreur : ' . $e->getMessage());
 }
 ?>