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
        $prenom=trim($_POST['prenom']);
        $département=trim($_POST['département']);
        $structure=trim($_POST['structure']);
        $spécialité=trim($_POST['spécialité']);
    $reponse3 = " INSERT INTO `professeur`(`Nom`, `Prenom`, `departement`, `structure_de_recherche`, `specialite`,`id`) VALUES(?,?,?,?,?,?) ";
    $stm3 = $bdd->prepare($reponse3);
    $donnees3 = array($nom,$prenom, $département,$structure,$spécialité,$_SESSION['id']);
    $stm3->execute($donnees3);

    $_SESSION['msg']="'ajouter '";
    header('location: Professeurs.php');
    exit();
     }
    
} catch (exception $e) {
    echo "erreur" . $e->getMessage();
}
