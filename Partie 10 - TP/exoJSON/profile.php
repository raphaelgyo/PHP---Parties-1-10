<?php
// chemin d'accès au fichier JSON
$file = 'images_list.json';
// On met le contenu du fichier dans une variable
$data = file_get_contents($file);
// On décode le JSON sous forme de tableau
$images_list = json_decode($data, true);
// var_dump($images_list);


?>
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

    <div class="container">

        <div class="row text-center">
            <h1 class="display-3 col-md-12">Galerie d'images</h1>
        </div>

        <div class="col-md-12">
            <div class="row justify-content-center">

                <?php

                foreach ($images_list as $image) {
                    echo '<div class="m-2">';
                    echo '<img src="' . $image["name"] . '">';
                    echo '</div>';
                }

                ?>

            </div>
        </div>

    </div>
    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <!-- Mes scripts -->
    <script src="assets/js/script.js"></script>
    <!-- fin body -->
</body>

</html> <!-- fin HTML -->