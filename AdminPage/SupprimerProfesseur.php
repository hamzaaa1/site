<?php
session_start();
$serveur = "localhost";
$base = "uaedoc";
$utilisateur = "root";
$mdp = "";
 
try{
    $bdd = new PDO("mysql:host=$serveur;dbname=$base;charset=utf8", $utilisateur, $mdp);

    $reponse3 = " DELETE  FROM `professeur` WHERE `id_professeur`=? ";
    $stm3 = $bdd->prepare($reponse3);
    $donnees3 = array($_GET['id_professeur']);
    $stm3->execute($donnees3);

    $_SESSION['msg']="'Suppression'";
    header('location: Professeurs.php');
    exit();
    
} catch (exception $e) {
    echo "erreur" . $e->getMessage();
}
