<?php
session_start();
// Contrôle de l'existence de l'image 
if ($_FILES['file']['tmp_name'] != '') {

    // Création d'un tableau d'extension valide
    $extvalid = array('jpeg', 'jpg', 'png');
    // Récupération de l'extension du fichier envoyé 
    $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    // Contrôle de l'extension
    if (in_array($extension, $extvalid)) {
        // Contrôle de la taille 
        if ($_FILES['file']['size'] < '1500000') {
            // Redimensionnement de l'image
            $source = imagecreatefromjpeg($_FILES["file"]["tmp_name"]);
            $destination = imagecreatetruecolor(250, 300);
            // Les fonctions imagesx et imagesy renvoient la largeur et la hauteur d'une image
            $largeur_source = imagesx($source);
            $hauteur_source = imagesy($source);
            $largeur_destination = imagesx($destination);
            $hauteur_destination = imagesy($destination);
            // On crée la miniature
            imagecopyresampled($destination, $source, 0, 0, 0, 0, $largeur_destination, $hauteur_destination, $largeur_source, $hauteur_source);

            // On enregistre la miniature dans le dossier image
            $chemin_image = "uploads/image" . time() . "." . $extension;
            if (imagejpeg($destination, $chemin_image)) {

                // On enregistre le nom de l'image dans un tableau 
                $image = array("name" => $chemin_image);
                // On récupère le contenu de notre fichier JSON
                $data = file_get_contents("images_list.json");
                // On décode le JSON en tableau
                $images_list = json_decode($data, true);
                // On ajoute notre image
                $images_list[] = $image;
                // On réencode le fichier 
                $json = json_encode($images_list);
                // On enregistre le JSON
                if (file_put_contents("images_list.json", $json) != 0) {

                    header('Location: profile.php');
                    exit();
                } else {

                    $_SESSION['notification'] = 'La conversion du fichier en JSON a échoué';
                    header('Location: index.php');
                    exit();
                }
            } else {

                $_SESSION['notification'] = 'L\'enregistrement de l\'image a échoué';
                header('Location: index.php');
                exit();
            }
        } else {
            $_SESSION['notification'] = 'Fichier trop lourd';
            header('Location: index.php');
            exit();
        }
    } else {
        $_SESSION['notification'] = 'Extension de fichier incorrect';
        header('Location: index.php');
        exit();
    }
} else {
    $_SESSION['notification'] = 'Veuillez ajouter une image';
    header('Location: index.php');
    exit();
}
