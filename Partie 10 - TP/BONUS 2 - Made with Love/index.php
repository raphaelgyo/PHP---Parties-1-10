<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />

    <!-- CDNJs CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <!-- Feuille de style CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />

    <title>💗 Made with Love 💗</title>
</head>

<body>
    <!-- début body -->
    <div class="container">

        <div class="row justify-content-center bloc mt-3">
            <video autoplay="autoplay" muted loop="infinite" src="assets/video/elie-semoun-mercedes-et-janine-les-petites-annonces.mp4">
            </video>
        </div>

        <div class="row text-center">
            <h1 class="col-md-12 mt-3">Made with Love</h1>
            <h1 class="col-md-12 mb-3">💗</h1>
        </div>

        <form class="col-md-12" action="lovers_controller.php" method="POST">
            <h2 class="text-center mb-5">💗 Bienvenue jeune LOVER 💗</h2>

            <div class="row justify-content-center">

                <div class="col-md-6 mb-3">
                    <label for="lastname">Nom</label>
                    <!-- Dans la classe de mon input je fais un ternaire pour vérifier si la clef 'lastname' de mon tableau d'erreur est vide. Si c'est le cas, je ne fais rien, sinon j'ajoute la classe 'error_input'. -->
                    <!-- Dans la value de mon input, je vérifie grace à mon Null coalescing ('??') si la variable $lastname existe, si c'est le cas, je l'affiche, sinon je n'affiche rien. -->
                    <input type="text" class="form-control <?= (isset($error['lastname'])) ? 'error_input' : '' ?>" id="lastname" placeholder="Votre nom" value="<?= $lastname ?? '' ?>" name="lastname">
                    <!-- Ici je crée un paragraphe error dans lequel j'utilise une nouvelle fois le '??', si la clef lastname existe dans mon tableau, j'affiche sa valeur -->
                    <p class="error"><?= ($error['lastname']) ?? '' ?></p>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="firstname">Prénom</label>
                    <input type="text" class="form-control <?= (isset($error['firstname'])) ? 'error_input' : '' ?>" id="firstname" placeholder="Votre prénom" value="<?= $firstname ?? '' ?>" name="firstname">

                    <p class="error"><?= ($error['firstname']) ?? '' ?></p>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="birthdate">Date de naissance</label>
                    <input type="date" class="form-control <?= (isset($error['birthdate'])) ? 'error_input' : '' ?>" id="birthdate" value="<?= $birthdate ?? '' ?>" name="birthdate">

                    <p class="error"><?= ($error['birthdate']) ?? '' ?></p>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="gender">Genre</label>
                    <select class="custom-select d-block w-100 <?= (isset($error['gender'])) ? 'error_input' : '' ?>" id="gender" name="gender">
                        <?php
                        if ($gender != '') {
                        ?>
                            <option value="<?= $gender; ?>"><?= $gender; ?></option>
                        <?php
                        } else {  ?>
                            <option value="">Votre genre...</option>
                        <?php } ?>
                        <option value="Homme">Homme</option>
                        <option value="Femme">Femme</option>
                        <option value="Autre">Autre</option>
                    </select>

                    <p class="error"><?= ($error['gender']) ?? '' ?></p>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="zipcode">Code postal</label>
                    <input type="text" class="form-control <?= (isset($error['zipcode'])) ? 'error_input' : '' ?>" id="zipcode" placeholder="Votre code postal" value="<?= $zipcode ?? '' ?>" name="zipcode">

                    <p class="error"><?= ($error['zipcode']) ?? '' ?></p>
                </div>



                <div class="col-md-6 mb-3">
                    <label for="mail">Email</label>
                    <input type="mail" class="form-control <?= (isset($error['mail'])) ? 'error_input' : '' ?>" id="mail" placeholder="john.doe@example.com" value="<?= $mail ?? '' ?>" name="mail">

                    <p class="error"><?= ($error['mail']) ?? '' ?></p>
                </div>



                <div class="col-md-6 mb-3">
                    <label for="interestedIn">Type de recherche...</label>
                    <select class="custom-select d-block w-100 <?= (isset($error['interestedIn'])) ? 'error_input' : '' ?>" id="interestedIn" name="interestedIn">
                        <?php
                        if ($interestedIn != '') {
                        ?>
                            <option value="<?= $interestedIn; ?>"><?= $interestedIn; ?></option>
                        <?php
                        } else {  ?>
                            <option value="">Vous êtes interessé par...</option>
                        <?php } ?>
                        <option value="Hommes">Hommes</option>
                        <option value="Femmes">Femmes</option>
                    </select>
                    <p class="error"><?= ($error['interestedIn']) ?? '' ?></p>
                </div>


                <div class="col-md-12 my-5 text-center">
                    <button class="btn btn-danger px-3" type="submit" name="OK">Rencontrer nos célibataires</button>
                </div>

            </div>
        </form>
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