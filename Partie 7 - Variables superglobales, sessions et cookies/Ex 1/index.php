<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$ipAddress = $_SERVER['SERVER_ADDR'];
$nameServer = $_SERVER['SERVER_NAME'];
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Liens CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <!-- Feuille de style CSS -->
    <link rel="stylesheet" href="../style.css" />

    <title>PHP : Partie 7 : Exercice 1</title>
</head>

<body>
    <div class="container">
        <h1 class="mt-5">
            Partie 7 : Exercice 1
        </h1>
        <p>Faire une page HTML permettant de donner à l'utilisateur :</p>
        <ul>
            <li>son User Agent</li>
            <li>son adress IP</li>
            <li>le nom du serveur</li>
        </ul>
        <hr />
        <div class="row justify-content-center">
            <div class="col-6 my-3 py-3 border bg-light rounded shadow">
                <p>User Agent : <?= $userAgent ?>
                </p>
                <p>Adresse IP : <?= $ipAddress ?>
                </p>
                <p>Nom du serveur : <?= $nameServer ?>
                </p>
            </div>
        </div>
    </div>
    <footer class="text-center mt-5 shadow bg-info">
        <p>
            &copy; 2020 -
            <?php echo date("Y"); ?>
            RG 2DW Prod. @La Manu
        </p>
    </footer>
    <!-- Scripts js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js " integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN " crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js " integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s " crossorigin="anonymous">
    </script>
</body>

</html>