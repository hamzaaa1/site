<?php
session_start();
$serveur = "localhost";
$base = "uaedoc";
$utilisateur = "root";
$mdp = "";
 
try{
    $bdd = new PDO("mysql:host=$serveur;dbname=$base;charset=utf8", $utilisateur, $mdp);
  


    $reponse3 = " SELECT * FROM `doctorants` WHERE `id_doc`=? ";
    $stm3 = $bdd->prepare($reponse3);
    $donnees3 = array($_GET['id_doc']);
    $stm3->execute($donnees3);
    $result3 = $stm3->fetch(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="Sidebare.css">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <style>
        .content {
            height: 100vh;
        }

        #step1 {
            display: block;
        }

        #step2,
        #step3 {
            display: none;
        }

        .container {
            padding: 10px;
        }
    </style>
</head>

<body id="body-pd">
    <?php
    $_SESSION['i'] = 1;
    include 'Sidebare.php';  ?>
    <h3 style="font-family: 'Nunito', sans-serif; color:rgba(24, 103, 211, 1);">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="32" style="fill: rgba(24, 103, 211, 1)">
            <path d="M20 3H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zm-9 14H5v-2h6v2zm8-4H5v-2h14v2zm0-4H5V7h14v2z"></path>
            </svg> Details :  <?php echo $result3['Nom'];  ?>
            
    </h3>
   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>



    
<?php } catch (exception $e) {
    echo "erreur" . $e->getMessage();
}
?>