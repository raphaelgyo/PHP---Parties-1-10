<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Liens CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <!-- Feuille de style CSS -->
    <link rel="stylesheet" href="../style.css" />
    <title>PHP - Partie 6 - Ex 9</title>
</head>

<body>
    <div class="container">
        <h1 class="mt-5">Quel formulaire incroyable !</h1>
        <p>Créer un formulaire de création de profil sur la page <strong>index.php</strong> avec :</p>
        <ul>
            <li>Deux boutons radio pour civilité (Mr ou Mme)</li>
            <li>Un champ texte pour le nom</li>
            <li>Un champ texte pour le prénom</li>
            <li>Un champ date pour la date de naissance</li>
            <li>Un champ d'envoi de fichier pour l'image de profil.</li>
        </ul>
        <p>À la soumission du formulaire, si tous les champs sont correctement renseignés, uploadez l'image de profil
            dans un dossier image que vous auriez créer en amont. Afficher le profil de l'utilisateur dans une page
            <strong>profile.php</strong>
        </p>
        <hr />

        <div class="row justify-content-center">
            <div class="col-6 mt-3 bg-light rounded shadow px-5">
                <form action="profile.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">

                        <!-- Boutons radio M. ou Mme -->
                        <div class="row justify-content-center my-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Monsieur">
                                <label class="form-check-label" for="inlineRadio1">M.</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Madame">
                                <label class="form-check-label" for="inlineRadio2">Mme</label>
                            </div>
                        </div>

                        <!-- Champs nom et prénom -->
                        <div class="row justify-content-center">
                            <input type="text" class="form-control mb-3" name="lastname" placeholder="Votre nom" pattern="[a-zA-Z -\D]+">
                            <input type="text" class="form-control mb-3" name="firstname" placeholder="Votre prénom" pattern="[a-zA-Z -\D]+">
                        </div>

                        <!-- Date de naissance -->
                        <div class="row justify-content-center">
                            <label for="date">Date de naissance : </label>
                            <input type="date" class="mb-3" name="date" id="date">
                        </div>

                        <!-- Input dépôt de fichier -->
                        <div class="row justify-content-center">
                            <label for="fileToUpload">Veuillez joindre un fichier image au format png, jpg, jpeg ou
                                gif</label>
                            <input type="file" class="mb-3" name="fileToUpload" id="fileToUpload">
                        </div>

                        <!-- btn submit -->
                        <div class="row justify-content-center">
                            <input type="reset" class="btn btn-danger px-5 mx-auto" value="Annuler">
                            <input type="submit" class="btn btn-success px-5 mx-auto" value="Confirmer">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- script js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous ">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js " integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN " crossorigin="anonymous ">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js " integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s " crossorigin="anonymous ">
    </script>

</body>

</html>