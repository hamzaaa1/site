<?php
session_start();
$serveur = "localhost";
$base = "uaedoc";
$utilisateur = "root";
$mdp = "";

?>


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
                        if($_GET['Id']=="ENSA"){
                        $reponse1 = " SELECT * FROM `doctorants` WHERE `id_admin`=? AND `etablissemant`=? ";
                        $stm1 = $bdd->prepare($reponse1);
                        $donnees1 = array($_SESSION['id'],"ENSA");
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
                        }}
if($_GET['Id']=="ENS"){
                        $reponse1 = " SELECT * FROM `doctorants` WHERE `id_admin`=? AND `etablissemant`=? ";
                        $stm1 = $bdd->prepare($reponse1);
                        $donnees1 = array($_SESSION['id'],"ENS");
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
                        }}
                        if($_GET['Id']=="FS"){
                            $reponse1 = " SELECT * FROM `doctorants` WHERE `id_admin`=? AND `etablissemant`=? ";
                            $stm1 = $bdd->prepare($reponse1);
                            $donnees1 = array($_SESSION['id'],"FS");
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
                            }}
                            if($_GET['Id']=="ENA"){
                                $reponse1 = " SELECT * FROM `doctorants` WHERE `id_admin`=? AND `etablissemant`=? ";
                                $stm1 = $bdd->prepare($reponse1);
                                $donnees1 = array($_SESSION['id'],"ENA");
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
                                }}
                        ?>

                </tbody>

            </table>
            <!-- Button trigger modal -->
            <!-- </div> -->
        </center>
<?php
                    } catch (exception $e) {
                        echo "erreur" . $e->getMessage();
                    } ?>
<script src="sidebar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>