<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Liens CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <!-- Feuille de style CSS -->
    <link rel="stylesheet" href="../style.css" />
    <title>PHP - Partie 6 - Ex 1</title>
</head>

<body>
    <div class="container">
        <h1 class="mt-5">Partie 6 - Ex 1</h1>
        <p>Créer un formulaire demandant <strong>le nom</strong> et <strong>le prénom</strong>. Ce formulaire doit rediriger
            vers la page <strong>user.php</strong> avec la méthode <strong>GET</strong>.</p>
        <hr />
        <div class="row justify-content-center">
            <div class="col-6 mt-5">
                <form action="user.php" method="GET">
                    <input type="text" class='form-control mb-3' name="lastname" placeholder="Votre nom">
                    <input type="text" class='form-control mb-3' name="firstname" placeholder="Votre prénom">
                    <div class="text-center">
                        <input type="submit" class="btn btn-primary px-5" value="SUBMIT">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- script js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js " integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s " crossorigin="anonymous ">
    </script>
</body>

</html>