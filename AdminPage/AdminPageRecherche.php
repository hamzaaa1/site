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
if($_POST['forme1']=="" && $_POST['forme2']=="" && $_POST['forme3']==""){
    header('location: ../AdminPage/AdminPage.php');
    }else{
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
        <div class="header_toggle"> <a type="button" class="btn btn-primary" href="AdminPage.php">
                <i class='bx bx-left-arrow-alt'></i> Retour
            </a>
         </div>
       
    </header>
    <!-- <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo-icon"> <i class='bx bxs-graduation nav_logo'></i> <span class="nav_logo-name">UAEDOC</span> </a>
                <div class="nav_list"> <a href="#" class="nav_link active"><i class='bx bx-group nav_icon'></i><span class="nav_name">Doctorants</span> </a>
                    <a href="Professeurs.php" class="nav_link"> <i class='bx bx-book-reader nav_icon'></i> <span class="nav_name">Professeurs</span> </a>
                    <a href="Structure.php" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Structure de Recherche</span> </a>
                </div>
            </div> <a href="Compte.php" class="nav_link"> <i class='bx bxs-user-account nav_icon'></i> <span class="nav_name">Mon Compte</span> </a>
        </nav>
    </div> -->
    <h3 style="font-family: 'Nunito', sans-serif; color:rgba(24, 103, 211, 1);">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="32" style="fill: rgba(24, 103, 211, 1);">
            <path d="M16.604 11.048a5.67 5.67 0 0 0 .751-3.44c-.179-1.784-1.175-3.361-2.803-4.44l-1.105 1.666c1.119.742 1.8 1.799 1.918 2.974a3.693 3.693 0 0 1-1.072 2.986l-1.192 1.192 1.618.475C18.951 13.701 19 17.957 19 18h2c0-1.789-.956-5.285-4.396-6.952z"></path>
            <path d="M9.5 12c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2zm1.5 7H8c-3.309 0-6 2.691-6 6v1h2v-1c0-2.206 1.794-4 4-4h3c2.206 0 4 1.794 4 4v1h2v-1c0-3.309-2.691-6-6-6z"></path>
        </svg> Doctorants :
    </h3>
    <!--Container Main start-->
    <!-- <div style="margin-top:100px;"> -->
    <div class="container-feild border  rounded shadow-lg p-3 mb-5 bg-body p-2 bd-highlight " style="margin-top: 2%;">
        
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
                            <center>Niveau </center>
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
                        if($_POST['forme1']!="" && $_POST['forme2']=="" && $_POST['forme3']=="") {
                        $reponse1 = " SELECT * FROM `doctorants` WHERE `id_admin`=? AND `formation_doctorale`=? ";
                        $stm1 = $bdd->prepare($reponse1);
                        $donnees1 = array($_SESSION['id'], $_POST['forme1']);
                        $stm1->execute($donnees1);
                    }elseif($_POST['forme1']=="" && $_POST['forme2']!="" && $_POST['forme3']==""){
                        $reponse1 = " SELECT * FROM `doctorants` WHERE `id_admin`=? AND `niveau`=? ";
                        $stm1 = $bdd->prepare($reponse1);
                        $donnees1 = array($_SESSION['id'], $_POST['forme2']);
                        $stm1->execute($donnees1);
                    }elseif($_POST['forme1']=="" && $_POST['forme2']=="" && $_POST['forme3']!=""){
                        $reponse1 = " SELECT * FROM `doctorants` WHERE `id_admin`=? AND `etablissemant`=? ";
                        $stm1 = $bdd->prepare($reponse1);
                        $donnees1 = array($_SESSION['id'], $_POST['forme3']);
                        $stm1->execute($donnees1);
                    }
                    elseif($_POST['forme1']!="" && $_POST['forme2']!="" && $_POST['forme3']==""){
                        $reponse1 = " SELECT * FROM `doctorants` WHERE `id_admin`=? AND `formation_doctorale`=? AND `niveau`=? ";
                        $stm1 = $bdd->prepare($reponse1);
                        $donnees1 = array($_SESSION['id'], $_POST['forme1'], $_POST['forme2']);
                        $stm1->execute($donnees1);
                    }
                    elseif($_POST['forme1']!="" && $_POST['forme2']=="" && $_POST['forme3']!=""){
                        $reponse1 = " SELECT * FROM `doctorants` WHERE `id_admin`=? AND `formation_doctorale`=? AND `etablissemant`=? ";
                        $stm1 = $bdd->prepare($reponse1);
                        $donnees1 = array($_SESSION['id'], $_POST['forme1'], $_POST['forme3']);
                        $stm1->execute($donnees1);
                    }
                    elseif($_POST['forme1']=="" && $_POST['forme2']!="" && $_POST['forme3']!=""){
                        $reponse1 = " SELECT * FROM `doctorants` WHERE `id_admin`=? AND `niveau`=? AND `etablissemant`=? ";
                        $stm1 = $bdd->prepare($reponse1);
                        $donnees1 = array($_SESSION['id'], $_POST['forme2'], $_POST['forme3']);
                        $stm1->execute($donnees1);
                    }else{
                        $reponse1 = " SELECT * FROM `doctorants` WHERE `id_admin`=? AND `niveau`=? AND `formation_doctorale`=? AND `etablissemant`=?  ";
                        $stm1 = $bdd->prepare($reponse1);
                        $donnees1 = array($_SESSION['id'], $_POST['forme2'], $_POST['forme1'], $_POST['forme3']);
                        $stm1->execute($donnees1);
                    }
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
                                    <center><?php echo $result1['niveau']; ?></center>
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
                </tbody>
            </table>
            <?php
   
?>
        </center>
    </div>
<?php
                    } catch (exception $e) {
                        echo "erreur" . $e->getMessage();
                    }} ?>
<script src="sidebar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>