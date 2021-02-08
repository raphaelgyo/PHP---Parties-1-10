<?php
session_start();
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Bonjour <?php if (isset($_COOKIE['firstname'])) echo $_COOKIE['firstname'] ?></li>
        <li class="breadcrumb-item"><a href="/controllers/lovers_controller.php/">NOS CELIBATAIRES</a></li>
        <li class="breadcrumb-item"><a href="/controllers/user_controller.php/">MES INFORMATIONS</a></li>
    </ol>
</nav>

<div>

    <!-- Ou mettre le timeout et la déconnexion ? -->

    <!-- Afficher toutes les informations de l'utilisateur lors de l'inscription.
Nom
Prénom
Age
Genre
Code postal
Adresse mail
Votre type de recherche : homme ou femme
Mettre en place 2 boutons
Le premier bouton permettant EFFACER TOUTES TRACES. Celui ci aura pour effet :
De détruire tous les cookies concernant le User.
Retourner sur la page index.php et donc, comme les cookies ont été détruits, afficher le formulaire d'inscription.
Le deuxième avec un lien vers le site Meetic et ayant pour nom = "TAKE MY MONEY" -->
    <button type="reset" class="">EFFACER TOUTES TRACES</button>

</div>