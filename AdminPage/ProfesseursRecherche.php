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
if ($_POST['forme'] == "") {
    header('location: ../AdminPage/Professeurs.php');
} else {
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
    <style>
        .header2 {
            width: 110%;
            height: 8%;
            position: relative;
            top: 0;
            left: -7%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 1rem;
            background-color: var(--white-color);
            z-index: var(--z-fixed);
            transition: .5s
        }
    </style>

    <body id="body-pd">
        <header class="header2" id="header2">
            <div class="header_toggle"> <a type="button" class="btn btn-primary" href="Professeurs.php">
                    <i class='bx bx-left-arrow-alt'></i> Retour
                </a>
            </div>

        </header>
        <h3 style="font-family: 'Nunito', sans-serif; color:rgba(24, 103, 211, 1);">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="32" style="fill: rgba(24, 103, 211, 1);">
                <path d="M21 8c-.202 0-4.85.029-9 2.008C7.85 8.029 3.202 8 3 8a1 1 0 0 0-1 1v9.883a1 1 0 0 0 .305.719c.195.188.48.305.729.28l.127-.001c.683 0 4.296.098 8.416 2.025.016.008.034.005.05.011.119.049.244.083.373.083s.254-.034.374-.083c.016-.006.034-.003.05-.011 4.12-1.928 7.733-2.025 8.416-2.025l.127.001c.238.025.533-.092.729-.28.194-.189.304-.449.304-.719V9a1 1 0 0 0-1-1zM4 10.049c1.485.111 4.381.48 7 1.692v7.742c-3-1.175-5.59-1.494-7-1.576v-7.858zm16 7.858c-1.41.082-4 .401-7 1.576v-7.742c2.619-1.212 5.515-1.581 7-1.692v7.858z"></path>
                <circle cx="12" cy="5" r="3"></circle>
            </svg> Professeurs :
        </h3>
        <!--Container Main start-->
        <!-- <div style="margin-top:100px;"> -->
        <div class="container-feild border  rounded shadow-lg p-3 mb-5 bg-body p-2 bd-highlight " style="margin-top: 2%;">
            <div style="text-align: right;">
                <ul id="resultsList"></ul>
                <center>
                    <table class="table table-striped" style="width: 85%;">
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
                                    <center>Département</center>
                                </th>
                                <th scope="col">
                                    <center>Spécialité</center>
                                </th>
                                <th scope="col">
                                    <center>Structure de recherche</center>
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

                                $reponse1 = " SELECT * FROM `professeur` WHERE `id`=? AND `departement`=? ";
                                $stm1 = $bdd->prepare($reponse1);
                                $donnees1 = array($_SESSION['id'], $_POST['forme']);
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
                                            <center><?php echo $result1['departement']; ?></center>
                                        </td>
                                        <td>
                                            <center><?php echo $result1['specialite']; ?></center>
                                        </td>
                                        <td>
                                            <center><?php echo $result1['structure_de_recherche']; ?></center>
                                        </td>
                                        <td>
                                            <center><a href="SupprimerProfesseur.php?id_professeur=<?php echo $result1['id_professeur']; ?>"><i class='bx bx-trash' style='color:#ea1818' title="Supprimer"></i></a></center>
                                        </td>
                                        <td>
                                            <center><a href="ModifierProfesseur.php?id_professeur=<?php echo $result1['id_professeur']; ?>"><i class='bx bxs-edit' style='color:#39d119' title="Modifier"></i></a></center>
                                        </td>
                                        <td>
                                            <center><a href="DetialsProfesseur.php?id_professeur=<?php echo $result1['id_professeur']; ?>"><i class='bx bxs-detail' style='color:#1c30c2' title="Voir les details"></i></a></center>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                        </tbody>
                    </table>
                </center>
            </div>
    <?php
                            } catch (exception $e) {
                                echo "erreur" . $e->getMessage();
                            }
                        } ?>
    <script src="sidebar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    </body>

    </html>