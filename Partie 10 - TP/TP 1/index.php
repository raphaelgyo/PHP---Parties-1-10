<?php
$stringBasic = "/^[A-Za-z-\D]+$/";
$error = array();
$NOK = "incorrect !";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Série de contrôles pour vérifier si toutes les informations sont connues comme demandées et avertir l'utilisateur en cas de problème.
    // vérification de $gender
    if (!empty($_POST['gender'])) {
        $gender = $_POST['gender'];
        $gender = trim(filter_var($gender, FILTER_SANITIZE_STRING));
        if (!preg_match($stringBasic, $gender)) {
            $error['gender'] = $NOK;
        }
    }

    // vérification de $lastname
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        if (!preg_match($stringBasic, $name)) {
            $error['name'] = $NOK;
        }
    }

    // vérification de $firstname
    if (isset($_POST['firstname']) && !empty($_POST['firstname'])) {
        $firstname = $_POST['firstname'];
        $firstname = filter_var($firstname, FILTER_SANITIZE_STRING);
        if (!preg_match($stringBasic, $firstname)) {
            $error['firstname'] = $NOK;
        }
    }
    //  vérification de $age 
    if (!empty($_POST['age'])) {
        $age = $_POST['age'];
        $age = trim(filter_var($age, FILTER_SANITIZE_STRING));
    }

    // vérification de $society
    if (isset($_POST['society'])) {
        $society = $_POST['society'];
        $society = filter_var($society, FILTER_SANITIZE_STRING);
        if (!preg_match($stringBasic, $society)) {
            $error['society'] = $NOK;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <!-- CDNJs CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <!-- Feuille de style CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />

    <title>PHP - Partie 10 : TP 1</title>

</head>

<body>
    <header class="container site-header">
        <h1 class="mt-5 text-center">Partie 10 : TP 1</h1>
        <p>Faire une page permettant de saisir les informations suivantes :</p>
        <ul>
            <li>Civilité (liste déroulante)</li>
            <li>Nom</li>
            <li>Prénom</li>
            <li>Âge</li>
            <li>Société</li>
        </ul>
    </header>
    <main class="container site-content">

        <form class="row justify-content-center" action="#" method="post">
            <div class="form-group col-12 col-md-10 col-lg-6 pt-3 mt-3 bg-light rounded">

                <h2 class="mb-2">Formulaire d'informations</h2>
                <!------------------------------------------ Civilité ---------------------------------------->
                <fieldset class="mb-2">
                    <legend>Civilité</legend>

                    <select class="form-control col-3 mb-2" name="gender" id="gender" value="<?= $gender ?? '' ?>">
                        <option value="NULL">...</option>
                        <option value="Monsieur">M.</option>
                        <option value="Madame">Mme</option>
                        <option value="Autre">Autre</option>
                    </select>

                </fieldset>

                <!------------------------------------------ Identité ---------------------------------------->
                <fieldset class="mb-2">
                    <legend>Identité</legend>

                    <input class="form-control mb-2" type="text" name="lastname" placeholder="Nom" value="<?= $lastname ?? '' ?>">

                    <input class="form-control mb-2" type="text" name="firstname" placeholder="Prénom" value="<?= $firstname ?? '' ?>">

                </fieldset>

                <!------------------------------------------ Age ------------------------------------------>
                <fieldset class="mb-2">
                    <legend>Âge</legend>
                    <div class="row">
                        <div class="col-4">
                            <input class="form-control mb-2" type="number" name="age" placeholder="Votre âge..." value="<?= $age ?? '' ?>" min="1">
                        </div>

                    </div>
                </fieldset>

                <!------------------------------------------ Société ---------------------------------------->
                <fieldset class="mb-2">
                    <legend>Société</legend>

                    <input class="form-control" type="text" name="society" placeholder="Société" value="<?= $society ?? '' ?>">

                </fieldset>

                <!-- Bouton validation -->
                <div class="text-center my-4">
                    <input type="submit" class="btn btn-outline-dark mb-5 px-5" value="Valider">
                </div>


            </div>
        </form>
    </main>

    <footer class="container-fluid site-footer fixed-bottom bg-dark text-white text-center pt-3">
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