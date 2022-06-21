<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Sidebare.css">
    <link rel="preconnect" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div> <a class="btn btn-primary" href="deconnecter.php"><i class='bx bx-log-out nav_icon'></i> Déconnexion</a></div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"><img src="../img/1111.ico" style="width:100px;background-color:brown;top:-100px;"><span class="nav_logo-name"></span> </a>
                <div class="nav_list"> <a href="#" class="nav_link active"> <i class='bx bxs-graduation nav_icon'></i><span class="nav_name">Doctorants</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bx-book-reader nav_icon'></i> <span class="nav_name">Professeurs</span> </a>
                    <a href="#" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Structure de Recherche</span> </a>
                </div>
            </div> <a href="#" class="nav_link"> <i class='bx bxs-user-account nav_icon'></i> <span class="nav_name">Mon Compte</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div style="margin-top:100px;">
        <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-3">
                <label for="validationCustom01" class="form-label">Nom</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="nom" required>
            </div>
            <div class="col-md-3">
                <label for="validationCustom02" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="prénom" required>
            </div>
            <div class="col-md-3">
                <label for="validationCustom02" class="form-label">CIN</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="cin" required>
            </div>
            <div class="col-md-3">
                <label for="validationCustom02" class="form-label">CNE</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="cne" required>
            </div>
            <div class="col-md-3">
                <label for="validationCustomUsername" class="form-label">Date de naissance</label>
                <div class="input-group has-validation">
                    <input type="date" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationCustom04" class="form-label">Lieu de Naissance</label>
                <select class="form-select" id="validationCustom04" required>
                    <option id="searcharea_expanded_fisrt_option" value="1005">Tétouan</option>

                    <option value="1013"> Agadir</option>

                    <option value="1017"> Al Hocïema</option>

                    <option value="1014"> Béni Mellal</option>

                    <option value="1007"> El Jadida</option>

                    <option value="1018"> Errachidia</option>

                    <option value="1003"> Fès</option>

                    <option value="1004"> Kénitra</option>

                    <option value="1019"> Khénifra</option>

                    <option value="1001"> Khouribga</option>

                    <option value="1020"> Larache</option>

                    <option value="1068"> Laayoune</option>

                    <option value="1008"> Marrakech</option>

                    <option value="1009"> Meknès</option>

                    <option value="1021"> Nador</option>

                    <option value="1022"> Ouarzazate</option>

                    <option value="1010"> Oujda</option>

                    <option value="1012"> Rabat</option>

                    <option value="1002"> Safi</option>

                    <option value="1023"> Settat</option>

                    <option value="1006"> Salé</option>

                    <option value="1015"> Tanger</option>

                    <option value="1016"> Taza</option>

                    <option value="1011"> Casablanca</option>

                    <option value="other" style="color: red">Choisir une autre ville...</option>
                </select>
                <div class="invalid-feedback">
                    veuillez selectionner une ville
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationCustom03" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="validationCustom03" placeholder="adresse" required>
            </div>
            <div class="col-md-3">
                <label for="validationCustomUsername" class="form-label">E-mail</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationCustom03" class="form-label">Télèphone</label>
                <input type="text" class="form-control" id="validationCustom03" placeholder="télèphone" required>
            </div>
            <div class="col-md-3">
                <label for="validationCustom04" class="form-label">Etablissemant</label>
                <select class="form-select" id="validationCustom04" required>
                    <option id="searcharea_expanded_fisrt_option" value="1005">ENSA</option>
                    <option > FS</option>
                    <option > ENS</option>
                    <option > ENA</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="validationCustomUsername" class="form-label">Date d'inscription</label>
                <div class="input-group has-validation">
                    <input type="date" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationCustom01" class="form-label">Niveau</label>
                <input type="text" class="form-control" id="validationCustom01"  required>
            </div>
            <div class="col-md-3">
                <label for="validationCustom04" class="form-label">Formation doctorale</label>
                <select class="form-select" id="validationCustom04" required>
                    <option id="searcharea_expanded_fisrt_option" value="1005">SI</option>
                    <option > SMPNT</option>
                    <option > BCG</option>
                    <option > IPDS</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="validationCustom01" class="form-label">Sujet de thèse</label>
                <input type="text" class="form-control" id="validationCustom01"  required>
            </div>
            <div class="col-md-3">
                <label for="validationCustom01" class="form-label">Directeur de thèse</label>
                <input type="text" class="form-control" id="validationCustom01"  required>
            </div>
            <div class="col-md-3">
                <label for="validationCustom01" class="form-label">Observation</label>
                <input type="text-area" class="form-control" id="validationCustom01"  required>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Ajouter</button>
            </div>
        </form>
    </div>
    <!--Container Main end-->
    <script src="sidebar.js"></script>
</body>

</html>