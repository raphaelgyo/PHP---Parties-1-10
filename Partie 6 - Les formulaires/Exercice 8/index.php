<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Liens CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <!-- Feuille de style CSS -->
    <link rel="stylesheet" href="../style.css" />
    <title>PHP - Partie 6 - Ex 8</title>
</head>

<body>
    <div class="container">
        <h1 class="mt-5">Partie 6 - Ex 8</h1>
        <p>
            Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédents, vérifier que le
            fichier transmis est bien un fichier <strong>pdf</strong>.
        </p>
        <hr />
        <?php
        // déclaration constante pour type MIME
        define("TYPE", "application/pdf");
        if (!empty($_POST['gender']) && !empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_FILES['file'])) {
            $gender = $_POST['gender'];
            $lastname = $_POST['lastname'];
            $firstname = $_POST['firstname'];
            $nameFile = $_FILES['file']['name'];
            $typeFile = $_FILES['file']['type'];
            //var_dump($typeFile);
            echo '<br> Bonjour ' . $gender . ' ' . $firstname . ' ' . $lastname . '<br>';
            echo 'Nom du fichier : ' . $nameFile . '<br>';
            //Contrôle du MIME
            if ($typeFile === TYPE) {
                echo 'Le type de fichier est un pdf';
            } else {
                echo "ATTENTION !!! Le type de fichier n'est pas un pdf !";
            }
        } else {   // sinon l'indiquer
            // ouverture formulaire ...
        ?>
            <div class="row justify-content-center">
                <div class="col-6 mt-5">
                    <form action="index.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="gender">Civilité</label>
                            <select class="form-control mb-3" id="gender" name="gender">
                                <option></option>
                                <option value="M.">M.</option>
                                <option value="Mme">Mme</option>
                            </select>
                            <input type="text" class="form-control mb-3" name="lastname" placeholder="Votre nom">
                            <input type="text" class="form-control mb-3" name="firstname" placeholder="Votre prénom">

                            <!-- Inout dépôt de fichier -->
                            <label for="file">Veuillez joindre un fichier au format pdf</label>
                            <input type="file" class="mb-3" name="file" id="file">

                            <!-- btn submit -->
                            <div class="text-center">
                                <input type="submit" class="btn btn-danger px-5" value="SUBMIT">
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