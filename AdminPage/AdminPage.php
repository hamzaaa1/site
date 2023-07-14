<?php
session_start();
$serveur = "localhost";
$base = "uaedoc";
$utilisateur = "root";
$mdp = "";

if (empty($_SESSION['autorisation'])) {
    header('location: ../LoginPage/Login.php');
}

if (!empty($_SESSION['msg'])) { ?>
    <script>
        alert(<?php echo $_SESSION['msg']; ?>);
    </script>
<?php
}
unset($_SESSION['msg']);
?>

<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Sidebare.css">
    <link rel="preconnect" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div> <a type="button" class="btn btn-primary" href="deconnecter.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"></path>
                    <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"></path>
                </svg> Déconnexion
            </a>
        </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo-icon"> <i class='bx bxs-graduation nav_logo'></i> <span class="nav_logo-name">UAEDOC</span> </a>
                <div class="nav_list"> <a href="#" class="nav_link active"><i class='bx bx-group nav_icon'></i><span class="nav_name">Doctorants</span> </a>
                    <a href="Professeurs.php" class="nav_link"> <i class='bx bx-book-reader nav_icon'></i> <span class="nav_name">Professeurs</span> </a>
                    <a href="Structure.php" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Structure de Recherche</span> </a>
                </div>
            </div> <a href="Compte.php" class="nav_link"> <i class='bx bxs-user-account nav_icon'></i> <span class="nav_name">Mon Compte</span> </a>
        </nav>
    </div>
    <h3 style="font-family: 'Nunito', sans-serif; color:rgba(24, 103, 211, 1);">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="32" style="fill: rgba(24, 103, 211, 1);">
            <path d="M16.604 11.048a5.67 5.67 0 0 0 .751-3.44c-.179-1.784-1.175-3.361-2.803-4.44l-1.105 1.666c1.119.742 1.8 1.799 1.918 2.974a3.693 3.693 0 0 1-1.072 2.986l-1.192 1.192 1.618.475C18.951 13.701 19 17.957 19 18h2c0-1.789-.956-5.285-4.396-6.952z"></path>
            <path d="M9.5 12c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2zm1.5 7H8c-3.309 0-6 2.691-6 6v1h2v-1c0-2.206 1.794-4 4-4h3c2.206 0 4 1.794 4 4v1h2v-1c0-3.309-2.691-6-6-6z"></path>
        </svg> Doctorants :
    </h3>
    <!--Container Main start-->
    <!-- <div style="margin-top:100px;"> -->
    <div class="container-feild border  rounded shadow-lg p-3 mb-5 bg-body p-2 bd-highlight " style="margin-top: 2%;">
<<<<<<< HEAD
        <div style="text-align: right;">
            <form action="AdminPageRecherche.php" method="POST" id="formDoc">
                <select class="custom-select" id="forme3" name="forme3">
                    <option id="searcharea_expanded_fisrt_option" value="">Etablissemant</option>
                    <option value="ENSA">ENSA</option>
                    <option value="FS"> FS</option>
                    <option value="ENS"> ENS</option>
                    <option value="ENA"> ENA</option>
                </select>
                <select class="custom-select" id="forme1" name="forme1">
                    <option id="searcharea_expanded_fisrt_option" value="">Formation Doctorale</option>
                    <option value="SMPNT">SMPNT</option>
                    <option value="BCG ">BCG</option>
                    <option value="IPDS">IPDS</option>
                    <option value="SI">SI</option>
                </select>
                <select class="custom-select" id="forme2" name="forme2">
                    <option id="searcharea_expanded_fisrt_option" value="">Niveau</option>
                    <option value="1A">1A</option>
                    <option value="2A ">2A</option>
                    <option value="1B">1B</option>
                    <option value="2B">2B</option>
                </select>
                <button class="btn btn-primary" name="submit" type="submit">Rechercher</button>

            </form>
        </div>
        <ul id="resultsList"></ul>
        <center>
            <table class="table table-striped" style="width: 85%;">
=======
        <select class="form-control form-control-user" style="width:17%;position:relative;left:75%;" onchange="Triagedoctorants(this.value)">
            <option value="">Choisir l'etablissement</option>
            <option value="ENSA">ENSA</option>
            <option value="FS"> FS</option>
            <option value="ENS"> ENS</option>
            <option value="ENA"> ENA</option>
        </select>
        <center>
            <table class="table table-striped" style="width: 85%;" id="txtHint">
>>>>>>> 884f2f56503ecdcdadaa3f49602f43f0fe8177fa
                <thead>
                    <tr>
                        <th scope="col">
                            <center>N</center>
                        </th>
                        <th scope="col">
                            <center>Nom</center>
                        </th>
                        <th scope="col">
                            <center>Prénom</center>
                        </th>
                        <th scope="col">
                            <center>CIN</center>
                        </th>
                        <th scope="col">
                            <center>E-mail</center>
                        </th>
                        <th scope="col">
                            <center>Établissemant</center>
                        </th>
                        <th scope="col">
                            <center>Formation Doctorale</center>
                        </th>
                        <th scope="col">
                            <center>Date d'inscription</center>
                        </th>
                        <th scope="col">
                            <center>Soutenance</center>
                        </th>
                        <th scope="col">
                            <center>Supprimer</center>
                        </th>
                        <th scope="col">
                            <center>Modifier</center>
                        </th>
                        <th scope="col">
                            <center>Détails</center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    try {
                        $i = 0;
                        $bdd = new PDO("mysql:host=$serveur;dbname=$base;charset=utf8", $utilisateur, $mdp);

                        $reponse1 = " SELECT * FROM `doctorants` WHERE `id_admin`=? ";
                        $stm1 = $bdd->prepare($reponse1);
                        $donnees1 = array($_SESSION['id']);
                        $stm1->execute($donnees1);
                        while ($result1 = $stm1->fetch(PDO::FETCH_ASSOC)) {
                            $i++;


                    ?>
                            <tr>
                                <td scope="row">
                                    <center><strong><?php echo $i; ?></strong></center>
                                </td>
                                <td scope="row">
                                    <center><strong><?php echo $result1['Nom']; ?></strong></center>
                                </td>
                                <td>
                                    <center><?php echo $result1['Prenom']; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $result1['CIN']; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $result1['adresse_mail']; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $result1['etablissemant']; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $result1['formation_doctorale']; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $result1['date_inscription']; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $result1['soutenance']; ?></center>
                                </td>
                                <td>
                                    <center><a href="SupprimerDoctorals.php?id_doc=<?php echo $result1['id_doc']; ?>"><i class='bx bx-trash' style='color:#ea1818' title="Supprimer"></i></a></center>
                                </td>
                                <td>
                                    <center><a href="ModifierDoctorals.php?id_doc=<?php echo $result1['id_doc']; ?>"><i class='bx bxs-edit' style='color:#39d119' title="Modifier"></i></a></center>
                                </td>
                                <td>
                                    <center><a href="DetialsDoctorals.php?id_doc=<?php echo $result1['id_doc']; ?>"><i class='bx bxs-detail' style='color:#1c30c2' title="Voir les details"></i></a></center>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
<<<<<<< HEAD
                </tbody>
=======
                  
                </tbody>

>>>>>>> 884f2f56503ecdcdadaa3f49602f43f0fe8177fa
            </table>
            <!-- Button trigger modal -->
            <a href="AjouterDoctorants1.php" class="btn btn-primary">
                Ajouter Doctorant
            </a>
            <!-- </div> -->
        </center>
    </div>
<<<<<<< HEAD

=======
    <script>
        function Triagedoctorants(str) {
            var xhttp;
            if (str == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                xhttp = new XMLHttpRequest();


                xhttp.onreadystatechange = function() {

                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "Triagedoctorants.php?Id=" + str, true);
                xhttp.send();
            }
        }
    </script>
>>>>>>> 884f2f56503ecdcdadaa3f49602f43f0fe8177fa
<?php
                    } catch (exception $e) {
                        echo "erreur" . $e->getMessage();
                    } ?>
<script src="sidebar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>