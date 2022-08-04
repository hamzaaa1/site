

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

    <?php
    if($_SESSION['i']==1){
    ?>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo-icon"> <i class='bx bxs-graduation nav_logo'></i> <span class="nav_logo-name">UAEDOC</span> </a>
                <div class="nav_list"> 
                    <a href="AdminPage.php" class="nav_link active" style="text-decoration:none;"><i class='bx bx-group nav_icon'></i><span class="nav_name">Doctorants</span> </a>
                    <a href="Professeurs.php" class="nav_link" style="text-decoration:none;"> <i class='bx bx-book-reader nav_icon'></i> <span class="nav_name">Professeurs</span> </a>
                    <a href="Structure.php" class="nav_link" style="text-decoration:none;"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Structure de Recherche</span> </a>
                </div>
            </div> <a href="Compte.php" class="nav_link"> <i class='bx bxs-user-account nav_icon'></i> <span class="nav_name">Mon Compte</span> </a>
        </nav>
    </div>
    <?php }
    elseif($_SESSION['i']==2){
    ?>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo-icon"> <i class='bx bxs-graduation nav_logo'></i> <span class="nav_logo-name">UAEDOC</span> </a>
                <div class="nav_list"> 
                    <a href="AdminPage.php" class="nav_link" style="text-decoration:none;"><i class='bx bx-group nav_icon'></i><span class="nav_name">Doctorants</span> </a>
                    <a href="Professeurs.php" class="nav_link active" style="text-decoration:none;"> <i class='bx bx-book-reader nav_icon'></i> <span class="nav_name">Professeurs</span> </a>
                    <a href="Structure.php" class="nav_link" style="text-decoration:none;"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Structure de Recherche</span> </a>
                </div>
            </div> <a href="Compte.php" class="nav_link"> <i class='bx bxs-user-account nav_icon'></i> <span class="nav_name">Mon Compte</span> </a>
        </nav>
    </div>
    <?php }
    elseif($_SESSION['i']==3){
    ?>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo-icon"> <i class='bx bxs-graduation nav_logo'></i> <span class="nav_logo-name">UAEDOC</span> </a>
                <div class="nav_list"> 
                    <a href="AdminPage.php" class="nav_link" style="text-decoration:none;"><i class='bx bx-group nav_icon'></i><span class="nav_name">Doctorants</span> </a>
                    <a href="Professeurs.php" class="nav_link" style="text-decoration:none;"> <i class='bx bx-book-reader nav_icon'></i> <span class="nav_name">Professeurs</span> </a>
                    <a href="Structure.php" class="nav_link active" style="text-decoration:none;"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Structure de Recherche</span> </a>
                </div>
            </div> <a href="Compte.php" class="nav_link"> <i class='bx bxs-user-account nav_icon'></i> <span class="nav_name">Mon Compte</span> </a>
        </nav>
    </div>
    <?php }
    elseif($_SESSION['i']==4){
    ?>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo-icon"> <i class='bx bxs-graduation nav_logo'></i> <span class="nav_logo-name">UAEDOC</span> </a>
                <div class="nav_list"> 
                    <a href="AdminPage.php" class="nav_link" style="text-decoration:none;"><i class='bx bx-group nav_icon'></i><span class="nav_name">Doctorants</span> </a>
                    <a href="Professeurs.php" class="nav_link" style="text-decoration:none;"> <i class='bx bx-book-reader nav_icon'></i> <span class="nav_name">Professeurs</span> </a>
                    <a href="Structure.php" class="nav_link" style="text-decoration:none;"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Structure de Recherche</span> </a>
                </div>
            </div> <a href="Compte.php" class="nav_link active"> <i class='bx bxs-user-account nav_icon'></i> <span class="nav_name">Mon Compte</span> </a>
        </nav>
    </div>
    <?php } ?>
    <!--Container Main start-->
    <!-- <div style="margin-top:100px;"> -->
<script src="sidebar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>