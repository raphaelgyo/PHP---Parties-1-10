<?php session_start();
$_SESSION['lastname'] = 'Granizo y Oliver';
$_SESSION['firstname'] = 'Raphaël';
$_SESSION['age'] = 42;
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

    <title>PHP : Partie 7 : Exercice 2</title>
</head>

<body>
    <div class="container">
        <h1 class="mt-5">
            Partie 7 : Exercice 2
        </h1>
        <p>Sur la page index, faire un lien vers une autre page. Passer d'une page à l'autre le contenu des variables
            <strong>lastname</strong>, <strong>firstname</strong> et <strong>age</strong> grâce aux sessions.
        <p>Ces variables auront été définies directement dans le code.</p>
        <p>Il faudra afficher le contenu de ces variables sur la deuxième page.</p>
        <hr />
        <div class="row justify-content-center">
            <div class="col-6 my-3 py-3 border bg-light rounded shadow">
                <h2>Première page</h2>
                <a href="page2.php">Page suivante</a>
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