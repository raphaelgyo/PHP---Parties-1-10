<?php
//ici j'inclus mon controller
include('controller/indexController.php');
//Si le cookie remember n'est pas vide, et qu'il est égal à true
include('view/template/header.php');
if (!empty($_COOKIE['remember']) &&  $_COOKIE['remember'] == true) {
    //j'affiche la page lovers
    include('view/lovers.php');
} else {
    //Sinon j'affiche la page du formulaire.
    include('view/form.php');
}
include('view/template/footer.php');
