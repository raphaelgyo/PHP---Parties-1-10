<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Liens CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <!-- Feuille de style CSS -->
    <link rel="stylesheet" href="../style.css" />

    <title>PHP : Partie 7 : Exercice 4</title>
</head>

<body>
    <div class="container">
        <h1 class="mt-5">
            Partie 7 : Exercice 4
        </h1>
        <p>Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiche.</p>
        <hr />
        <div class="row justify-content-center">
            <div class="col-6 mt-5 bg-light rounded shadow px-5">
                <?php if (empty($login) && empty($pass)) { ?>
                    <form action="page2.php" method="GET">
                        <div class="form-group">
                            <p class="mt-3">Veuillez saisir votre Login et votre mot de passe</p>
                            <!-- Champs Login et mot de passe -->
                            <div class="row justify-content-center my-3">
                                <input type="text" class="form-control mb-3" name="login" placeholder="Login" pattern="[a-zA-Z -\D]+">
                                <input type="text" class="form-control mb-3" name="password" placeholder="Mot de passe" pattern="[a-zA-Z -\D]+">
                            </div>
                            <!-- btn submit -->
                            <div class="row justify-content-center">
                                <input type="submit" class="btn btn-primary px-5 mx-auto" value="Connexion">
                            </div>
                        </div>
                    </form>
                <?php
                } else {
                    echo "Salut " . $login . ", ton mot de passe est : " . $pass . "<br>Maintenant arrête YouPorn !";
                }
                ?>
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