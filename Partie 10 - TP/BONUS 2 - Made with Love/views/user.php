<?php
setlocale(LC_ALL, 'fra.utf8');
$timestamp = strtotime($_COOKIE['birthdate']);
include('../utils/regex.php');
include('../templates/header.php');
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Bonjour <?= $_COOKIE['firstname'] ?></li>
        <li class="breadcrumb-item"><a href="../index.php">NOS CELIBATAIRES</a></li>
        <li class="breadcrumb-item"><a href="user.php">MES INFORMATIONS</a></li>
    </ol>
</nav>

<h2 class="text-center mb-5">💗 Mes informations 💗</h2>

<div class="row justify-content-center align-items-center">
    <div class="col-md-6 mb-3">
        <p>Nom : <?= $_COOKIE['lastname']; ?></p>
        <p>Prénom : <?= $_COOKIE['firstname']; ?></p>
        <p>Date de naissance : <?= strftime("%d %B %Y", $timestamp); ?></p>
        <p>Vous êtes : <?= $_COOKIE['profile_gender']; ?></p>
        <p>Code postal : <?= $_COOKIE['zipcode']; ?></p>
        <p>Email : <?= $_COOKIE['mail']; ?></p>
        <p>Vous recherchez : <?= $_COOKIE['search_gender']; ?></p>
    </div>

</div>
<div class="col-md-12 my-5 text-center">
    <a type="reset" href="../controllers/user_controller.php" class="btn btn-danger">EFFACER TOUTES TRACES</a>
    <a type="submit" href="https://www.meetic.fr/" class="btn btn-success">TAKE MY MONEY !!!</a>
</div>

<?php
include('../templates/footer.php');
?>