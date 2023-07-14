<?php
session_start();
$serveur = "localhost";
$base = "uaedoc";
$utilisateur = "root";
$mdp = "";
if (!empty($_GET['id_professeur'])) {
    $_SESSION['id_professeur'] = $_GET['id_professeur'];
}

try {
    $bdd = new PDO("mysql:host=$serveur;dbname=$base;charset=utf8", $utilisateur, $mdp);

    $reponse11 = " SELECT * FROM `professeur` WHERE `id_professeur`=? ";
    $stm11 = $bdd->prepare($reponse11);
    $donnees11 = array($_GET['id_professeur']);
    $stm11->execute($donnees11);
    while ($result = $stm11->fetch(PDO::FETCH_ASSOC)) {
?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="preconnect" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <style>
                .content {
                    height: 70vh;
                }
            </style>
        </head>

        <body>
            <?php
            $_SESSION['i'] = 2;
            include 'Sidebare.php';  ?>

            <h3 style="font-family: 'Nunito', sans-serif; color:rgba(24, 103, 211, 1);">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="32" style="fill: rgba(24, 103, 211, 1)">
                    <path d="m18.988 2.012 3 3L19.701 7.3l-3-3zM8 16h3l7.287-7.287-3-3L8 13z"></path>
                    <path d="M19 19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .896-2 2v14c0 1.104.897 2 2 2h14a2 2 0 0 0 2-2v-8.668l-2 2V19z"></path>
                </svg> Modifier Professeur :
            </h3>

            <div class="content d-flex justify-content-center align-items-center  flex-column bd-highlight mb-3 ">
                <section class="container border border-3 rounded  shadow-lg p-3 mb-5 bg-body p-2 bd-highlight">
                    <form action="ModifierProfesseur2.php" id="formDoc" method="POST">
                        <!-- <div id="step1"> -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nom</label>
                                <input type="text" class="form-control" id="nom" placeholder="Entre nom" name="nom" value="<?php echo $result['Nom']; ?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Prénom</label>
                                <input type="text" class="form-control" id="prenom" placeholder="Entre prenom" name="prenom" value="<?php echo $result['Prenom']; ?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Département </label>
                                    <select class="custom-select" id="département" readonly name="département" required>
                                        <option id="searcharea_expanded_fisrt_option" value="<?php echo $result['departement']; ?>"><?php echo $result['departement']; ?></option>
                                        <?php if ($result['departement'] == "Biologie") { ?>
                                            <option value="Chimie"> Chimie</option>
                                            <option value="Informatique"> Informatique</option>
                                            <option value="Mathématiques"> Mathématiques</option>
                                            <option value="Physique"> Physique</option>
                                        <?php } elseif ($result['departement'] == "Chimie") { ?>
                                            <option value="Biologie"> Biologie</option>
                                            <option value="Informatique"> Informatique</option>
                                            <option value="Mathématiques"> Mathématiques</option>
                                            <option value="Physique"> Physique</option>
                                        <?php } elseif ($result['departement'] == "Informatique") { ?>
                                            <option value="Biologie"> Biologie</option>
                                            <option value="Chimie"> Chimie</option>
                                            <option value="Mathématiques"> Mathématiques</option>
                                            <option value="Physique"> Physique</option>
                                        <?php } elseif ($result['departement'] == "Mathématiques") { ?>
                                            <option value="Biologie"> Biologie</option>
                                            <option value="Chimie"> Chimie</option>
                                            <option value="Informatique"> Informatique</option>
                                            <option value="Physique"> Physique</option>
                                        <?php } elseif ($result['departement'] == "Physique") { ?>
                                            <option value="Biologie"> Biologie</option>
                                            <option value="Chimie"> Chimie</option>
                                            <option value="Informatique"> Informatique</option>
                                            <option value="Mathématiques"> Mathématiques</option>
                                        <?php } ?>

                                    </select>
                                </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Structure de Recherche</label>
                                <select class="custom-select" id="forme" readonly name="forme" required>
                                    <option id="searcharea_expanded_fisrt_option" value="<?php echo $result['structure_de_recherche']; ?>"><?php echo $result['structure_de_recherche']; ?></option>

                                    <?php $reponse15 = " SELECT * FROM `structure` WHERE `id_admin`=? ";
                                    $stm15 = $bdd->prepare($reponse15);
                                    $donnees15 = array($_SESSION['id']);
                                    $stm15->execute($donnees15);
                                    while ($result15 = $stm15->fetch(PDO::FETCH_ASSOC)) {
                                        if (!($result['structure_de_recherche'] == $result15['nom'])) {
                                    ?>
                                            <option value="<?php echo $result15['nom']; ?>"> <?php echo $result15['nom']; ?></option>

                                    <?php }
                                    } ?>
                                </select>

                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Spécialité</label>
                                <input type="text" class="form-control" id="spécialité" placeholder="spécialité" name="spécialité" value="<?php echo $result['specialite']; ?>" required>
                            </div>
                        </div>
                        <div class="float-right">
                            <button class="btn btn-primary" name="submit" type="submit">Modifier</button>
                        </div>


                    <?php
                } ?>
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