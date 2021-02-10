<?php
//ici j'inclus mon fichier regex, qui contient mon BASE_URL
include('../utils/regex.php');
//si le cookie 'remember' existe, j'unset et supprime tout les cookie, avant de rediriger vers l'index.
if(isset($_COOKIE['remember'])){
    unset($_COOKIE['user_firstname']);
    setcookie('user_firstname', false, time() - 3600, '/');

    unset($_COOKIE['user_search']);
    setcookie('user_search', false, time() - 3600, '/');

    unset($_COOKIE['user_gender']);
    setcookie('user_gender', false, time() - 3600, '/');

    unset($_COOKIE['user_lastname']);
    setcookie('user_lastname', false, time() - 3600, '/');

    unset($_COOKIE['user_age']);
    setcookie('user_age', false, time() - 3600, '/');

    unset($_COOKIE['user_postal']);
    setcookie('user_postal', false, time() - 3600, '/');

    unset($_COOKIE['user_mail']);
    setcookie('user_mail', false, time() - 3600, '/');

    unset($_COOKIE['user_remember']);
    setcookie('remember', false, time() - 3600, '/');
    
}
    //sinon je redirige vers l'index sans supprimer les cookies.
    header('Location:'.BASE_URL);


?>