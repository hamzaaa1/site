<?php
session_start();
$serveur = "localhost";
$base = "uaedoc";
$utilisateur = "root";
$mdp = "";
try {
    $bdd = new PDO("mysql:host=$serveur;dbname=$base;charset=utf8", $utilisateur, $mdp);


    if (isset($_POST['submit'])) {
        $Email = trim($_POST['email']);
        $Password = trim($_POST['mot']);


        $reponse = " SELECT * FROM `admin` WHERE `e-mail`=? AND `password`=?";
        $stm2 = $bdd->prepare($reponse);
        $donnees2 = array($Email, md5($Password));
        $stm2->execute($donnees2);
        $result = $stm2->fetch(PDO::FETCH_ASSOC);

        if(empty($result)){
            $_SESSION['msg'] = "'email ou mot de passe incorrect'";
            header('location: Login.php');
            exit();
        }else{
           $_SESSION['id']=$result['id'];
           $_SESSION['autorisation']="oui";
           header('location:../AdminPage/Sidebar.php');
        }
      
        
    }
} catch (exception $e) {
    echo "erreur" . $e->getMessage();
}
