<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
    <!-- CDNJs CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <!-- Feuille de style CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />

    <title>JSON</title>
</head>

<body>
    <header class="site-header container collapse" id="collapseMenu"">

    <h1 class=" mt-5 text-center">Bonus : J-SON</h1>

        <p>Créer un formulaire pour uploader une image</p>
        <p>L'image devra être réduite, renommée et un fichier JSON créé en PHP</p>
        <p>Afficher les images sous forme de galerie grâce au JSON</p>

    </header>

    <div class="row">
        <button class="btn btn-outline-primary mx-auto my-3" type="button" data-toggle="collapse" data-target="#collapseMenu" aria-expanded="false" aria-controls="collapseMenu">
            BONUS
        </button>
    </div>


    <?php
    if (array_key_exists('notification', $_SESSION)) {
        echo ' <div class="alert alert-primary text-center" role="alert"> ';
        echo '<p>' . $_SESSION['notification'] . '</p>';
        echo ' </div> ';
    }
    ?>
    <div class="container">

        <button class="btn btn-dark" onclick="myFunction()" id="buttonSwitchMode"><i class="fas fa-moon"></i></button>

        <div class="row text-center">
            <h1 class="display-3 col-md-12">Exo Bonus Formulaire JSON</h1>
        </div>
        <form action="controller.php" method="POST" enctype="multipart/form-data" class="col-md-12">

            <div class="row justify-content-center">
                <div class="form-group col-md-6 rounded p-3 text-center">
                    <label for="file">Veuillez joindre une image au format .jpg, .jpeg ou .png</label>
                    <input type="file" name="file" id="file" class="form-control-file">
                </div>
            </div>
            <div class="row justify-content-center p-3">
                <button class="btn btn-outline-dark">Enregistrer</button>
            </div>
            <div class="row justify-content-center p-3">
                <a href="profile.php" class="btn btn-info px-3" role="button">
                    Galerie d'images
                </a>
            </div>
        </form>
    </div>

    <?php
    session_destroy();
    ?>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <!-- Mes scripts -->
    <script src="assets/js/script.js"></script>
    <!-- fin body -->
</body>

</html> <!-- fin HTML -->