<?php
session_start();
$serveur = "localhost";
$base = "uaedoc";
$utilisateur = "root";
$mdp = "";
 
try{
    $bdd = new PDO("mysql:host=$serveur;dbname=$base;charset=utf8", $utilisateur, $mdp);
    if(isset($_POST['submit'])){
        $nom=trim($_POST['nom']);
        $responsable=trim($_POST['responsable']);
        $membres=trim($_POST['membres']);
        $axes=trim($_POST['axes']);
    $reponse3 = " INSERT INTO `structure`(`nom`, `responsable`, `membres`, `axes`, `id_admin`) VALUES (?,?,?,?,?) ";
    $stm3 = $bdd->prepare($reponse3);
    $donnees3 = array($nom,$responsable, $membres,$axes,$_SESSION['id']);
    $stm3->execute($donnees3);

    $_SESSION['msg']="'ajouter '";
    header('location: Structure.php');
    exit();
     }
    
} catch (exception $e) {
    echo "erreur" . $e->getMessage();
}
