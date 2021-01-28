<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Liens CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <!-- Feuille de style CSS -->
    <link rel="stylesheet" href="../style.css" />
    <title>PHP - Partie 6 - Ex 6</title>
</head>

<body>
    <div class="container">
        <h1 class="mt-5">Partie 6 - Ex 6</h1>
        <p>
            Avec le formulaire de l'exercice 5, Si des données sont passées en <strong>POST</strong> ou en
            <strong>GET</strong>, affichez-les à la place du formulaire. Sinon affichez le formulaire.
        </p>
        <p>Utiliser qu'une seule page.</p>
        <hr />
        <?php
        if (!isset($_POST['submit']) || empty($_POST['firstname']) || empty($_POST['lastname'])) { ?>
            <div class="row justify-content-center">
                <div class="col-6 mt-5">
                    <form action="index.php" method="POST">
                        <div class="form-group rounded p-5 bg-light shadow">
                            <label for="gender">Civilité</label>
                            <select class="form-control mb-3" id="gender" name="gender">
                                <option></option>
                                <option value="M.">M.</option>
                                <option value="Mme">Mme</option>
                            </select>
                            <input type="text" class='form-control mb-3' name="lastname" placeholder="Votre nom">
                            <input type="text" class='form-control mb-3' name="firstname" placeholder="Votre prénom">
                            <div class="text-center">
                                <input type="submit" class="btn btn-secondary px-5" value="OK">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        <?php
        } else {
            echo "Bonjour " . $_POST['gender'] . " " . $_POST['firstname'] . " " . $_POST['lastname'];
        }
        ?>
        <!-- script js -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous ">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js " integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN " crossorigin="anonymous ">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js " integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s " crossorigin="anonymous ">
        </script>

</body>

</html>