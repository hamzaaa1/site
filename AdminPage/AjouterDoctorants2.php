<?php
session_start();
$serveur = "localhost";
$base = "uaedoc";
$utilisateur = "root";
$mdp = "";
 
try{
    $bdd = new PDO("mysql:host=$serveur;dbname=$base;charset=utf8", $utilisateur, $mdp);
    // if(isset($_POST['submit'])){
        $nom=trim($_POST['nom']);
        $prenom=trim($_POST['prenom']);
        $Daten=trim($_POST['Daten']);
        $Lieun=trim($_POST['Lieun']);
        $cin=trim($_POST['cin']);
        $cne=trim($_POST['cne']);
        $adresse=trim($_POST['adresse']);
        $email=trim($_POST['email']);
        $tele=$_POST['tele'];
        $niveau=trim($_POST['niveau']);
        $directeur=trim($_POST['directeur']);
        $datei=date("Y-m-d H:i:s");
        $sujet=trim($_POST['sujet']);
        $obs=trim($_POST['obs']);



    $reponse3 = " INSERT INTO `doctorants`(`Nom`, `Prenom`, `CIN`, `CNE`, `date_de_naissance`, `lieu_de_naissance`, `directeur_these`, `sujet_these`, `niveau`, `adresse`, `adresse_mail`, `tlf`, `formation_doctorale`, `etablissemant`, `date_inscription`, `observation`,`soutenance`, `id_admin`) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ";
    $stm3 = $bdd->prepare($reponse3);
    $donnees3 = array($nom,$prenom,$cin,$cne,$Daten,$Lieun,$directeur,$sujet,$niveau,$adresse,$email,$tele,$_POST['forme'],$_POST['etab'],$datei,$obs,$_POST['Soutenu'],$_SESSION['id']);
    $stm3->execute($donnees3);

    $_SESSION['msg']="'ajouter '";
    header('location: AdminPage.php');
    exit();
    // }
    
} catch (exception $e) {
    echo "erreur" . $e->getMessage();
}
