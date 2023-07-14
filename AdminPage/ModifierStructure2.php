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
    $responsable=trim($_POST['responsable']);
    $membre=trim($_POST['membre']);
    $axes=trim($_POST['axes']);


    $reponse12 = " UPDATE `structure` SET `nom`=?,`responsable`=?,`membres`=?,`axes`=? WHERE `id_structure`=?";
    $stm12 = $bdd->prepare($reponse12);
    $donnees12 = array($nom,$responsable,$membre,$axes,$_SESSION['id_structure']);
    $stm12->execute($donnees12);

    $_SESSION['msg']="'Modifier '";
    header('location: Structure.php');
    exit();
    }

    } catch (exception $e) {
        echo "erreur" . $e->getMessage();
    } ?>