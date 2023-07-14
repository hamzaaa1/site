<?php
session_start();
$serveur = "localhost";
$base = "uaedoc";
$utilisateur = "root";
$mdp = "";

try {
    $bdd = new PDO("mysql:host=$serveur;dbname=$base;charset=utf8", $utilisateur, $mdp);
    if (isset($_POST['submit'])) {

        $nom = trim($_POST['nom']);
        $pwd1 = trim($_POST['pwd1']);
        $pwd2 = trim($_POST['pwd2']);
        $pwd3 = trim($_POST['pwd3']);

        $reponse1 = " SELECT * FROM `admin` WHERE `id`=? ";
        $stm1 = $bdd->prepare($reponse1);
        $donnees1 = array($_SESSION['id']);
        $stm1->execute($donnees1);
        $result1 = $stm1->fetch(PDO::FETCH_ASSOC);
        if ($result1['password'] == md5($pwd1)) {
            if (strlen($pwd2) >= 6) {
                if ($pwd2 == $pwd3) {
                    $reponse12 = "UPDATE `admin` SET `e-mail`=?,`password`=? WHERE `id`=?";
                    $stm12 = $bdd->prepare($reponse12);
                    $donnees12 = array($nom, md5($pwd2), $_SESSION['id']);
                    $stm12->execute($donnees12);

                    $_SESSION['msg'] = "'Modifier '";
                    header('location: Compte.php');
                    exit();
                } else {
                    $_SESSION['msg'] = "'la confirmation de mot de passe incorrect '";
                    header('location: Compte.php');
                    exit();
                }
            } else {
                $_SESSION['msg'] = "'Mot de passe doit depasser 6 caractere '";
                header('location: Compte.php');
                exit();
            }
        } else {
            $_SESSION['msg'] = "'Mot de passe incorrect '";
            header('location: Compte.php');
            exit();
        }
    }
} catch (exception $e) {
    echo "erreur" . $e->getMessage();
}
