<?php
include('controllers/lovers_controller.php');
?>

<!-- page qui apparait une fois le form complété et validé OK -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Bonjour <?= $_COOKIE['firstname'] ?></li>
        <li class="breadcrumb-item"><a href="#">NOS CELIBATAIRES</a></li>
        <li class="breadcrumb-item"><a href="views/user.php">MES INFORMATIONS</a></li>
    </ol>
</nav>

<h2 class="text-center mb-5">💗 Nos célibataires 💗</h2>

<div class="col-md-12">
    <div class="row justify-content-center my-3">
        <?php
        foreach ($tab_lovers as $tab_lover) {
        ?>
            <div class="col-12 col-md-6 my-3">
                <div class="card">
                    <div class="position-relative">
                        <img src="<?= $tab_lover['picture']; ?>" class="card-img-top" alt="Une photo de <?= $tab_lover['firstname']; ?>">
                        <div class="card-img-overlay d-flex justify-content-end align-items-end">
                            <button type="button" class="btn btn-light rounded-circle" data-toggle="button" aria-pressed="false" autocomplete="off"><i class="far fa-heart"></i></button>
                        </div>
                    </div>
                    <div class="card-body px-3">
                        <h5 class="card-title text-dark"><small>Prénom : <?= $tab_lover['firstname']; ?></small></h5>
                        <h5 class="card-title text-dark"><small>Nom : <?= $tab_lover['lastname']; ?></small></h5>
                        <h5 class="card-title text-dark"><small>Âge : <?= $tab_lover['age']; ?> ans</small></h5>
                        <h5 class="card-title text-dark"><small>Code postal : <?= $tab_lover['address']; ?></small></h5>
                        <h5 class="card-title text-dark"><small>À propos : <?= $tab_lover['about']; ?></small></h5>
                        <p class="card-text"><strong class="text-danger">Contacter</strong></p>
                    </div>
                </div>
            </div>
        <?php
        } ?>
    </div>
</div>