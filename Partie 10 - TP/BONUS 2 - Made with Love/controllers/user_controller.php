<?php

// si on appuie sur le bouton effacer toutes traces alors on perd les cookies 

// $expire = 365 * 24 * 3600;
if (isset($_POST['firstnameSuppr'])) {
    //pour supprimer du browser le cookie, lui donner un expire dans le passé ici maintenant - 1h
    setcookie('firstname', $_COOKIE['firstname'], time() - 3600);
    unset($_COOKIE['firstname']); //le supprimer de la variable  $_COOKIE sinon il n'est supprimé qu'au prochain rechargement de page
}
// if (!empty($_POST)) {
//     setcookie('firstname', $_POST['firstname'], time() + $expire);
//     header('Location:index_controller.php');
// }
