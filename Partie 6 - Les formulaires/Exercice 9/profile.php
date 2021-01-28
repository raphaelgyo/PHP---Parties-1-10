<?php
$target_dir = "uploads/";
// var_dump($_FILES["fileToUpload"]);
if (isset($_FILES["fileToUpload"])) {
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
} else {
    $target_file = 'Pas de fichier';
    echo $target_file;
}

// Vérifie si le fichier image est une image réelle ou une fausse image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "Le fichier est une image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Le fichier n'est pas une image.";
        $uploadOk = 0;
    }
}

// Vérifie si le fichier existe déjà
if (file_exists($target_file)) {
    echo "Désolé, le fichier existe déjà.";
    $uploadOk = 0;
}

// Vérifie la taille du fichier
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Désolé, le fichier est trop grand.";
    $uploadOk = 0;
}

// Autorise certains formats de fichiers
if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
) {
    echo "Désolé, seuls les fichiers au format JPG, JPEG, PNG & GIF sont acceptés. ";
    $uploadOk = 0;
}

// Vérifie si $uploadOk est défini ou non
if ($uploadOk == 0) {
    echo "Désolé, votre fichier n'a pas pu être uploadé. ";

    // Si tout est OK, essaie d'upload un fichier
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Le fichier " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " a été uploadé avec succès. ";
    } else {
        echo "Désolé, il y a une erreur durant le upload de votre fichier. ";
    }
}
if (!empty($_POST['gender']) && !empty($_POST['lastname']) && !empty($_POST['date']) && !empty($_POST['firstname']) && !empty($_FILES['fileToUpload'])) {
    $gender = $_POST['gender'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $date = new DateTime($_POST['date']);
    $nameFile = $_FILES['fileToUpload']['name'];
    $typeFile = $_FILES['fileToUpload']['type']; ?>
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
            <h1 class="mt-5">Profile.PHP</h1>

            <hr />
            <?php
            echo '<br> Bonjour ' . $gender . ' ' . $firstname . ' ' . $lastname . '<br>';
            echo 'Votre date de naissance est le ' . $date->format('d-m-Y') . '<br>';
            echo 'Nom du fichier joint : ' . $nameFile . '<br>';
            echo 'Type de fichier joint : ' . $typeFile . '<br>'; ?>
            <img src="uploads/<?= $nameFile ?>" alt="image uploadée">
        <?php
    } else {   // sinon l'indiquer
        // ouverture formulaire ...
        ?>
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

    <?php
    } // ... fermeture formulaire
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