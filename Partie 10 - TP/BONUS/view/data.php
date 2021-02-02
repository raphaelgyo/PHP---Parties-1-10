<!-- Résumé de formulaire -->
<div class="container">
    <div class="row justify-content-center align-items-center">

        <div class="col-12 col-md-10 col-lg-8 pt-3 mt-3 BG">
            <div class="col-12">

                <h1 class="text-center mt-3 mb-3">Validation du formulaire</h1>

                <h2 class="text-center mb-3">Identité</h2>
                <div class="pl-3"><?= $firstname . ' ' . $lastname ?></div>
                <h2 class="text-center mb-3">Votre fichier</h2>
                <div class="img-thumbnail my-3">
                    <img class="img-fluid rounded" src="uploads/<?= $nameFile ?>" alt="image uploadée">
                    <div class="pl-3"><?= 'Nom du fichier joint : ' . $nameFile ?></div>
                    <div class="pl-3"><?= 'Type de fichier joint : ' . $typeFile ?></div>
                </div>

            </div>
        </div>


    </div>
    <!------------------------------------------ submit ------------------------------------------------>
    <form class="d-flex flex-row justify-content-center text-center my-5">
        <a href="index.php" class="btn btn-outline-secondary px-5 mx-2">Retour</a>
        <!-- <input id="sendFormToMail" type="button" class="btn btn-outline-success px-5 mx-2" value="Envoyer ?"> -->
    </form>
</div>