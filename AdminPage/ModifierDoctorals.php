<?php
session_start();
$serveur = "localhost";
$base = "uaedoc";
$utilisateur = "root";
$mdp = "";
if (!empty($_GET['id_doc'])) {
    $_SESSION['id_doc'] = $_GET['id_doc'];
}

try {
    $bdd = new PDO("mysql:host=$serveur;dbname=$base;charset=utf8", $utilisateur, $mdp);

    $reponse11 = " SELECT * FROM `doctorants` WHERE `id_doc`=? ";
    $stm11 = $bdd->prepare($reponse11);
    $donnees11 = array($_GET['id_doc']);
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

        <body>
            <?php
            $_SESSION['i'] = 1;
            include 'Sidebare.php';  ?>

            <h3 style="font-family: 'Nunito', sans-serif; color:rgba(24, 103, 211, 1);">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="32" style="fill: rgba(24, 103, 211, 1)">
                    <path d="m18.988 2.012 3 3L19.701 7.3l-3-3zM8 16h3l7.287-7.287-3-3L8 13z"></path>
                    <path d="M19 19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .896-2 2v14c0 1.104.897 2 2 2h14a2 2 0 0 0 2-2v-8.668l-2 2V19z"></path>
                </svg> Modifier Doctorant :
            </h3>

            <div class="content d-flex justify-content-center align-items-center  flex-column bd-highlight mb-3 ">


<<<<<<< HEAD

                <div class="position-relative m-4  p-2 bd-highlight" style="width:50%;">
                    <div class="progress" style="height: 1px;">
                        <div class="progress-bar" id="progress-bar" role="progressbar" style="width:0%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div data-title="Information personnel" id="p1" class="position-absolute top-2 start-0 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">1</div>
                    <div data-title="Education" id="p2" class="position-absolute top-2 start-50 translate-middle btn btn-sm btn-secondary  rounded-pill" style="width: 2rem; height:2rem;">2</div>
                    <div data-title="Autre" id="p3" class="position-absolute top-2 start-100 translate-middle btn btn-sm btn-secondary rounded-pill" style="width: 2rem; height:2rem;">3</div>
=======
                <div class="position-relative m-4  p-2 bd-highlight" style="width:50%;">
                    <div class="progress" style="height: 1px;">
                        <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">1</button>
                    <button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">2</button>
                    <button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill" style="width: 2rem; height:2rem;">3</button>
>>>>>>> 884f2f56503ecdcdadaa3f49602f43f0fe8177fa
                </div>



<<<<<<< HEAD

=======
>>>>>>> 884f2f56503ecdcdadaa3f49602f43f0fe8177fa
                <section class="container border border-3 rounded  shadow-lg p-3 mb-5 bg-body p-2 bd-highlight">
                    <form action="ModifierDoctorants2.php" id="formDoc" method="POST">
                        <div id="step1">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Nom</label>
                                    <input type="text" class="form-control" id="nom" placeholder="Entre nom" name="nom" value="<?php echo $result['Nom']; ?>" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Prenom</label>
                                    <input type="text" class="form-control" id="prenom" placeholder="Entre prenom" name="prenom" value="<?php echo $result['Prenom']; ?>" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Date de naissance</label>
                                    <input type="date" class="form-control" id="Daten" placeholder="Entre date de naissance" name="Daten" value="<?php echo $result['date_de_naissance']; ?>" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Lieu de naissance</label>
                                    <input type="text" class="form-control" id="Lieun" placeholder="Entre lieu de naissance" name="Lieun" value="<?php echo $result['lieu_de_naissance']; ?>" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">CIN</label>
                                    <input type="text" class="form-control" id="cin" aria-describedby="emailHelp" placeholder="Enter CIN" name="cin" value="<?php echo $result['CIN']; ?>" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">CNE</label>
                                    <input type="text" class="form-control" id="cne" aria-describedby="emailHelp" placeholder="Enter CNE" name="cne" value="<?php echo $result['CNE']; ?>" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Adresse</label>
                                    <input type="text" class="form-control" id="adresse" aria-describedby="emailHelp" placeholder="Enter adresse" name="adresse" value="<?php echo $result['adresse']; ?>" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Telephone</label>
<<<<<<< HEAD
                                    <input type="text" class="form-control" id="tele" aria-describedby="emailHelp" placeholder="Enter numbre telephone" name="tele" value="<?php echo $result['tlf']; ?>" required>
=======
                                    <input type="text" class="form-control" id="tele" aria-describedby="emailHelp" placeholder="Enter numbre telephone" name="tele" value="<?php echo "0".$result['tlf']; ?>" required>
>>>>>>> 884f2f56503ecdcdadaa3f49602f43f0fe8177fa
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Adresse-mail</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="<?php echo $result['adresse_mail']; ?>" required>
                            </div>

                            <div class="float-right">
                                <a class="btn btn-primary" style="color:#fff;text-decoration: none;" onclick="NextStep(1)">Suivant</a>
                            </div>

                        </div>
                        <div id="step2">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Etablissemant</label>
                                    <select class="custom-select" id="etab" name="etab" required>
                                        <option id="searcharea_expanded_fisrt_option" value="<?php echo $result['etablissemant']; ?>"><?php echo $result['etablissemant']; ?></option>
                                        <?php if ($result['etablissemant'] == "ENSA") { ?>
                                            <option value="FS"> FS</option>
                                            <option value="ENS"> ENS</option>
                                            <option value="ENA"> ENA</option>
                                        <?php } elseif ($result['etablissemant'] == "FS") { ?>
                                            <option value="ENSA"> ENSA</option>
                                            <option value="ENS"> ENS</option>
                                            <option value="ENA"> ENA</option>
                                        <?php } elseif ($result['etablissemant'] == "ENS") { ?>
                                            <option value="ENSA"> ENSA</option>
                                            <option value="FS"> FS</option>
                                            <option value="ENA"> ENA</option>
                                        <?php } elseif ($result['etablissemant'] == "ENA") { ?>
                                            <option value="ENSA"> ENSA</option>
                                            <option value="FS"> FS</option>
                                            <option value="ENS"> ENS</option>
                                        <?php } ?>

                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Formation doctorale</label>
                                    <select class="custom-select" id="forme" readonly name="forme" required>
                                        <option id="searcharea_expanded_fisrt_option" value="<?php echo $result['formation_doctorale']; ?>"><?php echo $result['formation_doctorale']; ?></option>
                                        <?php if ($result['formation_doctorale'] == "SI") { ?>
                                            <option value="SMPNT"> SMPNT</option>
                                            <option value="BCG"> BCG</option>
                                            <option value="IPDS"> IPDS</option>
                                        <?php } elseif ($result['formation_doctorale'] == "SMPNT") { ?>
                                            <option value="SI"> SI</option>
                                            <option value="BCG"> BCG</option>
                                            <option value="IPDS"> IPDS</option>
                                        <?php } elseif ($result['formation_doctorale'] == "BCG") { ?>
                                            <option value="SI"> SI</option>
                                            <option value="SMPNT"> SMPNT</option>
                                            <option value="IPDS"> IPDS</option>
                                        <?php } elseif ($result['formation_doctorale'] == "IPDS") { ?>
                                            <option value="SI"> SI</option>
                                            <option value="SMPNT"> SMPNT</option>
                                            <option value="BCG"> BCG</option>
                                        <?php } ?>

                                    </select>
                                </div>
                                <div class="form-group col-md-6">
<<<<<<< HEAD
                                    <label for="exampleInputEmail1">Niveau </label>
                                    <select class="custom-select" id="niveau" readonly name="niveau" required>
                                        <option id="searcharea_expanded_fisrt_option" value="<?php echo $result['niveau']; ?>"><?php echo $result['niveau']; ?></option>
                                        <?php if ($result['niveau'] == "1A") { ?>
                                            <option value="2A"> 2A</option>
                                            <option value="1B"> 1B</option>
                                            <option value="2B"> 2B</option>
                                        <?php } elseif ($result['niveau'] == "2A") { ?>
                                            <option value="1A"> 1A</option>
                                            <option value="1B"> 1B</option>
                                            <option value="2B"> 2B</option>
                                        <?php } elseif ($result['niveau'] == "1B") { ?>
                                            <option value="1A"> 1A</option>
                                            <option value="2A"> 2A</option>
                                            <option value="2B"> 2B</option>
                                        <?php } elseif ($result['niveau'] == "2B") { ?>
                                            <option value="1A"> 1A</option>
                                            <option value="2A"> 2A</option>
                                            <option value="1B"> 1B</option>
                                        <?php } ?>

                                    </select>
                                </div>
                                
=======
                                    <label for="exampleInputEmail1">Niveau</label>
                                    <input type="text" class="form-control" id="niveau" aria-describedby="emailHelp" value="<?php echo $result['niveau']; ?>" placeholder="Enter CIN" name="niveau" required>
                                </div>
>>>>>>> 884f2f56503ecdcdadaa3f49602f43f0fe8177fa
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Date d'inscription</label>
                                    <input type="datetime" class="form-control" id="datei" aria-describedby="emailHelp" readonly value="<?php echo $result['date_inscription']; ?>" placeholder="Enter CIN" name="datei">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Directeur de these</label>
                                    <input type="text" class="form-control" id="directeur" aria-describedby="emailHelp" value="<?php echo $result['directeur_these']; ?>" placeholder="Enter CIN" name="directeur" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Sujet de these</label>
                                    <input type="text" class="form-control" id="sujet" aria-describedby="emailHelp" value="<?php echo $result['sujet_these']; ?>" placeholder="Enter CIN" name="sujet" required>
                                </div>

                            </div>
                            <a class="btn btn-success" style="color:#fff;text-decoration: none;" onclick="BackStep(2)">Precedent</a>
                            <a class="btn btn-primary" style="color:#fff;text-decoration: none;" onclick="NextStep(2)">Suivant</a>
                        </div>
                        <div id="step3">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Observation</label>
                                <textarea class="form-control" aria-label="With textarea" value="<?php echo $result['observation']; ?>" name="obs" id="obs"></textarea>
                            </div>
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">Soutenance</legend>
                                <?php if ($result['soutenance'] == "Non soutenu") { ?>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="exampleRadios1" name="Soutenu" class="form-check-input" value="Soutenu">
                                        <label class="form-check-label" for="exampleRadios1">Soutenu</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="exampleRadios2" name="Soutenu" class="form-check-input" value="Non soutenu" checked>
                                        <label class="form-check-label" for="exampleRadios2">Non soutenu</label>
                                    </div>
                                <?php } else {  ?>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="exampleRadios1" name="Soutenu" class="form-check-input" value="Soutenu" checked>
                                        <label class="form-check-label" for="exampleRadios1">Soutenu</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="exampleRadios2" name="Soutenu" class="form-check-input" value="Non soutenu">
                                        <label class="form-check-label" for="exampleRadios2">Non soutenu</label>
                                    </div>
                                <?php } ?>
                            </div>
                            <a class="btn btn-success" style="color:#fff;text-decoration: none;" onclick="BackStep(3)">Precedent</a>
                            <button class="btn btn-primary" name="submit" type="submit">Modifier</button>
                        </div>
                    <?php
                } ?>
                    </form>
                </section>

            </div>


            <script>
                function NextStep(step) {

                    var partform1 = document.getElementById('step1'),
                        partform2 = document.getElementById('step2'),
                        partform3 = document.getElementById('step3');
<<<<<<< HEAD
                    var line1 = document.getElementById('progress-bar'),
                        p2 = document.getElementById('p2'),
                        p3 = document.getElementById('p3');
=======
>>>>>>> 884f2f56503ecdcdadaa3f49602f43f0fe8177fa
                    if (step == 1) {
                        var nom = document.getElementById("nom"),
                            prenom = document.getElementById("prenom"),
                            Daten = document.getElementById("Daten"),
                            Lieun = document.getElementById("Lieun"),
                            cin = document.getElementById("cin"),
                            cne = document.getElementById("cne"),
                            adresse = document.getElementById("adresse"),
                            tele = document.getElementById("tele"),
                            email = document.getElementById("email");

                        if (nom.value == '' || prenom.value == '' || Daten.value == '' || Lieun.value == '' || cin.value == '' || cne.value == '' || adresse.value == '' || tele.value == '' || email.value == '') {
                            alert('Vous avez oublier quelque(s) champ(s)');
                        } else {
                            partform1.style.display = "none";
                            partform2.style.display = "block";
                            partform3.style.display = "none";
<<<<<<< HEAD
                            line1.style.width = "50%";
                            p2.classList.remove('btn-secondary');
                            p2.classList.add('btn-primary');
=======
>>>>>>> 884f2f56503ecdcdadaa3f49602f43f0fe8177fa
                        }

                    } else if (step == 2) {
                        var etab = document.getElementById("etab"),
                            forme = document.getElementById("forme"),
                            niveau = document.getElementById("niveau"),
                            datei = document.getElementById("datei"),
                            directeur = document.getElementById("directeur"),
                            sujet = document.getElementById("sujet");
                        if (etab.value == '' || forme.value == '' || niveau.value == '' || datei.value == '' || directeur.value == '' || sujet.value == '') {
                            alert('not ok');
                        } else {
                            partform1.style.display = "none";
                            partform2.style.display = "none";
                            partform3.style.display = "block";
<<<<<<< HEAD
                            line1.style.width = "100%";
                            p3.classList.remove('btn-secondary');
                            p3.classList.add('btn-primary');
=======
>>>>>>> 884f2f56503ecdcdadaa3f49602f43f0fe8177fa
                        }
                    }

                }

                function BackStep(step) {
                    var partform1 = document.getElementById('step1'),
                        partform2 = document.getElementById('step2'),
                        partform3 = document.getElementById('step3');
<<<<<<< HEAD
                    var line1 = document.getElementById('progress-bar'),
                        p2 = document.getElementById('p2'),
                        p3 = document.getElementById('p3');
=======
>>>>>>> 884f2f56503ecdcdadaa3f49602f43f0fe8177fa
                    if (step == 2) {
                        partform1.style.display = "block";
                        partform2.style.display = "none";
                        partform3.style.display = "none";
<<<<<<< HEAD
                        line1.style.width = "0%";
                        p2.classList.remove('btn-primary');
                        p2.classList.add('btn-secondary');
=======
>>>>>>> 884f2f56503ecdcdadaa3f49602f43f0fe8177fa
                    } else if (step == 3) {
                        partform1.style.display = "none";
                        partform2.style.display = "block";
                        partform3.style.display = "none";
<<<<<<< HEAD
                        line1.style.width = "50%";
                        p3.classList.remove('btn-primary');
                        p3.classList.add('btn-secondary');
=======
>>>>>>> 884f2f56503ecdcdadaa3f49602f43f0fe8177fa
                    }
                }
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <?php
    } catch (exception $e) {
        echo "erreur" . $e->getMessage();
    } ?>

        </body>

        </html>