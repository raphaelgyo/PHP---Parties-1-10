<?php

// si on appuie sur le bouton effacer toutes traces alors on perd les cookies 

if (isset($_COOKIE['firstname'])) {
    unset($_COOKIE['firstname']); //le supprimer de la variable  $_COOKIE sinon il n'est supprimé qu'au prochain rechargement de page
    //pour supprimer du browser le cookie, lui donner un expire dans le passé ici maintenant - 1h
    setcookie('firstname', false, time() - 3600, '/');
    header('Location:../index.php');
}
if (isset($_COOKIE['lastname'])) {
    unset($_COOKIE['lastname']);
    setcookie('lastname', false, time() - 3600, '/');
    header('Location:../index.php');
}
if (isset($_COOKIE['birthdate'])) {
    unset($_COOKIE['birthdate']);
    setcookie('birthdate', false, time() - 3600, '/');
    header('Location:../index.php');
}
if (isset($_COOKIE['profile_gender'])) {
    unset($_COOKIE['profile_gender']);
    setcookie('profile_gender', false, time() - 3600, '/');
    header('Location:../index.php');
}
if (isset($_COOKIE['zipcode'])) {
    unset($_COOKIE['zipcode']);
    setcookie('zipcode', false, time() - 3600, '/');
    header('Location:../index.php');
}
if (isset($_COOKIE['mail'])) {
    unset($_COOKIE['mail']);
    setcookie('mail', false, time() - 3600, '/');
    header('Location:../index.php');
}
if (isset($_COOKIE['search_gender'])) {
    unset($_COOKIE['search_gender']);
    setcookie('search_gender', false, time() - 3600, '/');
    header('Location:../index.php');
}
