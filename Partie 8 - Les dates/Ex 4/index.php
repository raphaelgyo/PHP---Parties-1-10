<?php
// $date = new DateTime();
// echo $date->getTimestamp();
$giveTime = mktime(15, 0, 9, 2, 2016);
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

    <title>PHP : Partie 8 : Exercice 4</title>
</head>

<body>
    <div class="container">
        <h1 class="mt-5">
            Partie 8 : Exercice 4
        </h1>
        <p>Afficher le timestamp du jour. Afficher le timestamp du <strong>mardi 2 août 2016 à 15h00</strong>.</p>
        <hr />
        <div class="row justify-content-center">
            <div class="col-6 mt-5 bg-light rounded shadow px-5 text-center">
                <h2>Timestamp :</h2>
                <p>
                    <?= "le Timestamp actuel " . time() . " et le Timestamp sur mardi 2 août 2016 à 15h00 est " . $giveTime; ?>
                </p>

            </div>
        </div>
    </div>
    <footer class="text-center mt-5 fixed-bottom">
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