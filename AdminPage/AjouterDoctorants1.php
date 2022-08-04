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
            <path d="M15 2.013H9V9H2v6h7v6.987h6V15h7V9h-7z"></path>
            </svg> Ajouter un Doctorant :
    </h3>
    <div class="content d-flex justify-content-cEntrerr align-items-cEntrerr  flex-column bd-highlight mb-3 ">


        <div class="position-relative m-4  p-2 bd-highlight" style="width:50%;">
            <div class="progress" style="height: 1px;">
                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div data-title="Information personnel" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">1</div>
            <div data-title="Education" class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">2</div>
            <div data-title="Autre" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill" style="width: 2rem; height:2rem;">3</div>
        </div>



        <section class="container border border-3 rounded  shadow-lg p-3 mb-5 bg-body p-2 bd-highlight">
            <form action="AjouterDoctorants2.php" id="formDoc" method="POST">
                <div id="step1">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nom</label>
                            <input type="text" class="form-control" id="nom" placeholder="Entrer nom" name="nom" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Prenom</label>
                            <input type="text" class="form-control" id="prenom" placeholder="Entrer prenom" name="prenom" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Date de naissance</label>
                            <input type="date" class="form-control" id="Daten" placeholder="Entrer date de naissance" name="Daten" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Lieu de naissance</label>
                            <input type="text" class="form-control" id="Lieun" placeholder="Entrer lieu de naissance" name="Lieun" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">CIN</label>
                            <input type="text" class="form-control" id="cin" aria-describedby="emailHelp" placeholder="Entrer CIN" name="cin" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">CNE</label>
                            <input type="text" class="form-control" id="cne" aria-describedby="emailHelp" placeholder="Entrerr CNE" name="cne" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Adresse</label>
                            <input type="text" class="form-control" id="adresse" aria-describedby="emailHelp" placeholder="Entrerr adresse" name="adresse" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Telephone</label>
                            <input type="text" class="form-control" id="tele" aria-describedby="emailHelp" placeholder="Entrerr numbre telephone" name="tele" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Adresse-mail</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Entrerr email" name="email" required>
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
                                <option id="searcharea_expanded_fisrt_option" value="ENSA">ENSA</option>
                                <option value="FS"> FS</option>
                                <option value="ENS"> ENS</option>
                                <option value="ENA"> ENA</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Formation doctorale</label>
                            <select class="custom-select" id="forme" name="forme" required>
                                <option id="searcharea_expanded_fisrt_option" value="SI">SI</option>
                                <option value="SMPNT"> SMPNT</option>
                                <option value="BCG"> BCG</option>
                                <option value="IPDS"> IPDS</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Niveau</label>
                            <input type="text" class="form-control" id="niveau" aria-describedby="emailHelp" placeholder="Entrer votre niveau" name="niveau" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Date d'inscription</label>
                            <input type="datetime" class="form-control" id="datei" aria-describedby="emailHelp" readonly value="<?php echo date("Y-m-d H:i:s"); ?>" placeholder="Entrerr la date d'inscription" name="datei">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Directeur de these</label>
                            <input type="text" class="form-control" id="directeur" aria-describedby="emailHelp" placeholder="Entrer le directeur de thèse" name="directeur" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Sujet de these</label>
                            <input type="text" class="form-control" id="sujet" aria-describedby="emailHelp" placeholder="Entrer le sujet de thèse " name="sujet" required>
                        </div>

                    </div>
                    <a class="btn btn-success" style="color:#fff;text-decoration: none;" onclick="BackStep(2)">Precedent</a>
                    <a class="btn btn-primary" style="color:#fff;text-decoration: none;" onclick="NextStep(2)">Suivant</a>
                </div>
                <div id="step3">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Observation</label>
                        <textarea class="form-control" aria-label="With textarea" name="obs" id="obs"></textarea>
                    </div>
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Soutenance</legend>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="exampleRadios1" name="Soutenu" class="form-check-input" value="Soutenu">
                            <label class="form-check-label" for="exampleRadios1">Soutenu</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="exampleRadios2" name="Soutenu" class="form-check-input" value="Non soutenu" checked>
                            <label class="form-check-label" for="exampleRadios2">Non soutenu</label>
                        </div>
                    </div>
                    <a class="btn btn-success" style="color:#fff;text-decoration: none;" onclick="BackStep(3)">Precedent</a>
                    <button class="btn btn-primary" name="submit" type="submit">Ajouter</button>
                </div>
            </form>
        </section>

    </div>


    <script>
        function NextStep(step) {

            var partform1 = document.getElementById('step1'),
                partform2 = document.getElementById('step2'),
                partform3 = document.getElementById('step3');
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
                }
            }

        }

        function BackStep(step) {
            var partform1 = document.getElementById('step1'),
                partform2 = document.getElementById('step2'),
                partform3 = document.getElementById('step3');
            if (step == 2) {
                partform1.style.display = "block";
                partform2.style.display = "none";
                partform3.style.display = "none";
            } else if (step == 3) {
                partform1.style.display = "none";
                partform2.style.display = "block";
                partform3.style.display = "none";
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>