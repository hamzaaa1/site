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
       
    </style>
</head>

<body id="body-pd">
 <?php
 $_SESSION['i']=3;
 include 'Sidebare.php';  ?>

<h3 style="font-family: 'Nunito', sans-serif; color:rgba(24, 103, 211, 1);">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="32" style="fill: rgba(24, 103, 211, 1)">
            <path d="M15 2.013H9V9H2v6h7v6.987h6V15h7V9h-7z"></path>
            </svg> Ajouter une Structure :
    </h3>

    <div class="content d-flex justify-content-center align-items-center  flex-column bd-highlight mb-3 ">
        <section class="container border border-3 rounded  shadow-lg p-3 mb-5 bg-body p-2 bd-highlight">
            <form action="AjouterStructure2.php" id="formDoc" method="POST">
                <div id="step1">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nom de la Structure</label>
                            <input type="text" class="form-control" id="nom" placeholder="nom de la structure" name="nom" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Responsable de la Structure</label>
                            <input type="text" class="form-control" id="responsable" placeholder="responsable de la structure" name="responsable" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Membres de Structures</label>
<<<<<<< HEAD
                            <input type="text" class="form-control" id="membres" placeholder="membres de structures" name="membres" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Axes de Structure</label>
                            <input type="text" class="form-control" id="axes" placeholder="axes de structures" name="axes" required>
=======
                            <input type="number" class="form-control" id="membres" placeholder="membres de structures" name="membres" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Axes de Structure</label>
                            <input type="number" class="form-control" id="axes" placeholder="axes de structures" name="axes" required>
>>>>>>> 884f2f56503ecdcdadaa3f49602f43f0fe8177fa
                        </div> </div>
                    <div class="float-right">
                    <button class="btn btn-primary" name="submit" type="submit">Ajouter</button>
                    </div>
               
            </form>
        </section>

    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>