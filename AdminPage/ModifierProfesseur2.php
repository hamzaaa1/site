<?php
session_start();
$serveur = "localhost";
$base = "uaedoc";
$utilisateur = "root";
$mdp = "";

try {
    $bdd = new PDO("mysql:host=$serveur;dbname=$base;charset=utf8", $utilisateur, $mdp);
    if(isset($_POST['submit'])){

    $nom=trim($_POST['nom']);
    $prenom=trim($_POST['prenom']);
    $département=trim($_POST['département']);
    $structure=trim($_POST['forme']);
    $spécialité=trim($_POST['spécialité']);


    $reponse12 = " UPDATE `professeur` SET `Nom`=?,`Prenom`=?,`departement`=?,`structure_de_recherche`=?,`specialite`=? WHERE `id_professeur`=?";
    $stm12 = $bdd->prepare($reponse12);
    $donnees12 = array($nom,$prenom,$département,$structure,$spécialité,$_SESSION['id_professeur']);
    $stm12->execute($donnees12);

    $_SESSION['msg']="'Modifier '";
    header('location: Professeurs.php');
    exit();
    }

    } catch (exception $e) {
        echo "erreur" . $e->getMessage();
    } ?>