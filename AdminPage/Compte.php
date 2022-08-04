<?php
session_start();
$serveur = "localhost";
$base = "uaedoc";
$utilisateur = "root";
$mdp = "";
if (!empty($_SESSION['msg'])) { ?>
    <script>
        alert(<?php echo $_SESSION['msg']; ?>);
    </script>
<?php
}
unset($_SESSION['msg']);
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
            height: 70vh;
        }
    </style>
</head>

<body id="body-pd">
    <?php
    $_SESSION['i'] = 4;
    include 'Sidebare.php';  ?>
    <h3 style="font-family: 'Nunito', sans-serif; color:rgba(24, 103, 211, 1);">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="32" style="fill: rgba(24, 103, 211, 1);">
            <path d="M20 2H8a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm-6 2.5a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5zM19 15H9v-.25C9 12.901 11.254 11 14 11s5 1.901 5 3.75V15z"></path>
            <path d="M4 8H2v12c0 1.103.897 2 2 2h12v-2H4V8z"></path>
        </svg> Mon Compte :
    </h3>
    <div class="content d-flex justify-content-center align-items-center  flex-column bd-highlight mb-3 ">
        <section class="container border border-3 rounded  shadow-lg p-3 mb-5 bg-body p-2 bd-highlight">
            <form action="ModifierCompte.php" id="formDoc" method="POST">
                <div id="step1">


                    <div class="form-group col-md-14">
                        <label for="exampleInputEmail1">Nom d'utilisateur</label>
                        <?php
                        try {
                            $i = 0;
                            $bdd = new PDO("mysql:host=$serveur;dbname=$base;charset=utf8", $utilisateur, $mdp);

                            $reponse12 = " SELECT * FROM `admin` WHERE `id`=? ";
                            $stm12 = $bdd->prepare($reponse12);
                            $donnees14 = array($_SESSION['id']);
                            $stm12->execute($donnees14);
                            $result12 = $stm12->fetch(PDO::FETCH_ASSOC);
                        ?>
                            <input type="text" class="form-control" value="<?php echo $result12['e-mail']; ?>" name="nom" required>
                    </div>
                    <div class="form-group col-md-14">
                        <label for="inputEmail4">Ancien mot de passe</label>
                        <input type="password" class="form-control" id="nom" placeholder=" Ancien mot de passe" name="pwd1" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nouveau mot de passe</label>
                            <input type="password" class="form-control" id="nom" placeholder=" Nouveau mot de passe" name="pwd2" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Confirmer le nouveau mot de passe</label>
                            <input type="password" class="form-control" id="prenom" placeholder=" Confirmer le nouveau mot de passe" name="pwd3" required>
                        </div>
                    </div>
                    <div>
                        <center> <button class="btn btn-primary" name="submit" type="submit">Modifier</button></center>
                    </div>

            </form>
        </section>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<?php
                        } catch (exception $e) {
                            echo "erreur" . $e->getMessage();
                        } ?>
</body>

</html>