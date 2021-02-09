<?php
include('../utils/regex.php');
include('../templates/header.php');
?>
<h2 class="text-center mb-5">💗 Mes informations 💗</h2>

<div class="row justify-content-center align-items-center">
    <div class="col-md-6 mb-3">
        <p>Nom : <?= $_COOKIE['lastname']; ?></p>
        <p>Prénom : <?= $_COOKIE['firstname']; ?></p>
        <p>Date de naissance : <?= $_COOKIE['birthdate']; ?></p>
        <p>Vous êtes : <?= $_COOKIE['profile_gender']; ?></p>
        <p>Code postal : <?= $_COOKIE['zipcode']; ?></p>
        <p>Email : <?= $_COOKIE['mail']; ?></p>
        <p>Vous recherchez : <?= $_COOKIE['search_gender']; ?></p>
    </div>

</div>
<div class="col-md-12 my-5 text-center">
    <a type="reset" href="../controllers/user_controller.php" class="btn btn-danger">EFFACER TOUTES TRACES</a>
</div>

<?php
include('../templates/footer.php');
?>