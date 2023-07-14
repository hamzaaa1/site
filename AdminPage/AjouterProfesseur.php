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
<<<<<<< HEAD
=======
       
>>>>>>> 884f2f56503ecdcdadaa3f49602f43f0fe8177fa
    </style>
</head>

<body id="body-pd">
<<<<<<< HEAD
    <?php
    $_SESSION['i'] = 2;
    include 'Sidebare.php';  ?>

    <h3 style="font-family: 'Nunito', sans-serif; color:rgba(24, 103, 211, 1);">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="32" style="fill: rgba(24, 103, 211, 1)">
            <path d="M15 2.013H9V9H2v6h7v6.987h6V15h7V9h-7z"></path>
        </svg> Ajouter un Professeur :
=======
<?php
 $_SESSION['i']=2;
 include 'Sidebare.php';  ?>

<h3 style="font-family: 'Nunito', sans-serif; color:rgba(24, 103, 211, 1);">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="32" style="fill: rgba(24, 103, 211, 1)">
            <path d="M15 2.013H9V9H2v6h7v6.987h6V15h7V9h-7z"></path>
            </svg> Ajouter un Professeur :
>>>>>>> 884f2f56503ecdcdadaa3f49602f43f0fe8177fa
    </h3>

    <div class="content d-flex justify-content-center align-items-center  flex-column bd-highlight mb-3 ">
        <section class="container border border-3 rounded  shadow-lg p-3 mb-5 bg-body p-2 bd-highlight">
            <form action="AjouterProfesseur2.php" id="formDoc" method="POST">
                <div id="step1">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nom</label>
                            <input type="text" class="form-control" id="nom" placeholder=" nom" name="nom" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Prénom</label>
                            <input type="text" class="form-control" id="prenom" placeholder=" prenom" name="prenom" required>
                        </div>
                        <div class="form-group col-md-6">
<<<<<<< HEAD
                            <label for="exampleInputEmail1">Département </label>
                            <select class="custom-select" id="département" name="département" required>
                                <option id="searcharea_expanded_fisrt_option" value="Biologie">Biologie</option>
                                <option value="Chimie">Chimie</option>
                                <option value="Informatique">Informatique</option>
                                <option value="Mathématiques">Mathématiques</option>
                                <option value="Physique">Physique</option>
                            </select>
=======
                            <label for="inputEmail4">Département</label>
                            <input type="text" class="form-control" id="département" placeholder="département" name="département" required>
>>>>>>> 884f2f56503ecdcdadaa3f49602f43f0fe8177fa
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Structure de recherche</label>
                            <select class="custom-select" id="etab" name="structure" required>
<<<<<<< HEAD
                                <?php
                                try {
                                    $i = 0;
                                    $bdd = new PDO("mysql:host=$serveur;dbname=$base;charset=utf8", $utilisateur, $mdp);
                                    $reponse12 = " SELECT * FROM `structure` WHERE `id_admin`=? ";
                                    $stm12 = $bdd->prepare($reponse12);
                                    $donnees14 = array($_SESSION['id']);
                                    $stm12->execute($donnees14);
                                    while ($result12 = $stm12->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                        <option value="<?php echo $result12['nom']; ?>"> <?php echo $result12['nom']; ?> </option>
                                    <?php } ?>
=======
                            <?php
                              try {
                                $i=0;
                                $bdd = new PDO("mysql:host=$serveur;dbname=$base;charset=utf8", $utilisateur, $mdp);

$reponse12 = " SELECT * FROM `structure` WHERE `id_admin`=? ";
$stm12 = $bdd->prepare($reponse12);
$donnees14 = array($_SESSION['id']);
$stm12->execute($donnees14);
while ($result12 = $stm12->fetch(PDO::FETCH_ASSOC)) {
?>
                                <option value="<?php echo $result12['nom']; ?>"> <?php echo $result12['nom']; ?> </option>
                                <?php } ?>
>>>>>>> 884f2f56503ecdcdadaa3f49602f43f0fe8177fa
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Spécialité</label>
                            <input type="text" class="form-control" id="spécialité" placeholder="spécialité" name="spécialité" required>
                        </div>
<<<<<<< HEAD
                    </div>
                    <div class="float-right">
                        <button class="btn btn-primary" name="submit" type="submit">Ajouter</button>
                    </div>

=======
                        </div>
                     <div class="float-right">
                   <button class="btn btn-primary" name="submit" type="submit">Ajouter</button>
                    </div>
              
>>>>>>> 884f2f56503ecdcdadaa3f49602f43f0fe8177fa
            </form>
        </section>

    </div>
<<<<<<< HEAD
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<?php
                                } catch (exception $e) {
                                    echo "erreur" . $e->getMessage();
                                } ?>
</body>

</html>
=======
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


        <?php
          } catch (exception $e) {
            echo "erreur" . $e->getMessage();
        } ?>
</body>

</html>


>>>>>>> 884f2f56503ecdcdadaa3f49602f43f0fe8177fa
