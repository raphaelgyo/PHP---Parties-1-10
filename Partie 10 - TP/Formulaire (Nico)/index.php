<?php
// ici j'inclus les différents fichiers dont je vais avoir besoin
// Regex => Ce sont mes regex
// Controller => Mon fichier controller
// Header => Ma vue header que je souhaite appeler sur mes pages.
include('utils/regex.php');
include('controller/controller.php');
include('template/header.php');

// Si ma variable $verif (disponible dans le controller) est égal à true, j'affiche la vue data, sinon j'affiche le formulaire
if ($verif == true) {
    include('vue/data.php');
} else {
    include('vue/form.php');
}
// Footer => Ma vue footer que je souhaite appeler sur mes pages.
include('template/footer.php');
