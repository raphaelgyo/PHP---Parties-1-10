<?php
// Déclaration des variables
$verif = null;
$error = [];
$required = "* Le champ est obligatoire";
$ERR_saisie = 'Le format de la donnée saisie est incorrect';

$ERR_targetFiles = 'Pas de fichier';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Série de contrôles pour vérifier si toutes les informations sont connues comme demandées et avertir l'utilisateur en cas de problème.

    // vérification de $firstname
    if (isset($_POST['firstname'])) {
        $firstname = $_POST['firstname'];
        $firstname = filter_var($firstname, FILTER_SANITIZE_STRING);
        if (empty($firstname)) {
            $error['firstname'] = $required;
        } else if (!preg_match(R_STR_NO_NUMBER, $firstname)) {
            $error['firstname'] = $ERR_saisie;
        }
    }

    // vérification de $lastname
    if (isset($_POST['lastname'])) {
        $lastname = $_POST['lastname'];
        $lastname = filter_var($lastname, FILTER_SANITIZE_STRING);
        if (empty($lastname)) {
            $error['lastname'] = $required;
        } else if (!preg_match(R_STR_NO_NUMBER, $lastname)) {
            $error['lastname'] = $ERR_saisie;
        }
    }

    // UPLOAD D'UNE IMAGE
    $target_dir = "uploads/";
    $nameFile = $_FILES['fileToUpload']['name'];
    $typeFile = $_FILES['fileToUpload']['type'];
    $newName = date('d-m-y');
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

    // JSON
    $JASON = array(
        'Nom du fichier' => $nameFile, 'Type de fichier' => $typeFile
    );
    $array = json_decode(file_get_contents('test.json'), true);
    array_push($array, $JASON);
    // var_dump($array);

    file_put_contents('test.json', json_encode($array));


    // var_dump($error);

    if (empty($error)) {
        $verif = true;
    } else {
        $verif = false;
    }
}
function valid_data($data)
{

    $data = trim($data); // supprime espace devant et derrière chaîne
    $data = stripslashes($data); // supprime slash dans chaîne
    $data = htmlspecialchars($data);

    return $data;
}
