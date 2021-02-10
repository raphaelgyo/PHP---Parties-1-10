<?php
//J'inclus ici mes regex, le header et la navbar
include('../utils/regex.php');
include('template/header.php');
include('template/navbar.php'); 
//J'affiche sur cette page les informations conetnu dans les cookies.
?>

<div class="row justify-content-center text-center">
    <div class="col-md-6">
        <h3>Profil de :
            <p><?= $_COOKIE['user_lastname'] . ' ' . $_COOKIE['user_firstname'] ?></p>        
        </h3>
        <p>Vous avez : <?= $_COOKIE['user_age']?> ans</p>
        <p>Vous êtes un/une : <?= $_COOKIE['user_gender']?></p>
        <p>Vous recherchez des : <?= $_COOKIE['user_search']?></p>
        <p>Vous vivez dans le : <?= $_COOKIE['user_postal']?></p>
        <p>Votre e-mail : <?= $_COOKIE['user_mail']?></p>
    </div>
</div>
<!-- Je redirige grâce à ce bouton, sur le controller user_controller.php, qui va nettoyer les cookies
Si ces derniers existe. -->
<a href="../controller/userController.php" class='btn btn-danger'>Deconnexion</a>