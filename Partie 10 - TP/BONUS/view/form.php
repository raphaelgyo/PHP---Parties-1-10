<!-- Formulaire -->
<header class="site-header container collapse" id="collapseMenu"">

    <h1 class=" mt-5 text-center">Bonus : J-SON</h1>

    <p>Créer un formulaire.</p>
    <p>À la soumission du formulaire, si tous les champs sont correctement renseignés, uploadez l'image de profil
        dans un dossier image que vous auriez créer en amont.</p>

</header>

<div class="row">
    <button class="btn btn-outline-primary mx-auto my-3" type="button" data-toggle="collapse" data-target="#collapseMenu" aria-expanded="false" aria-controls="collapseMenu">
        BONUS
    </button>
</div>

<main class="site-content container">

    <button class="btn btn-dark" onclick="myFunction()" id="buttonSwitchMode"><i class="fas fa-moon"></i></button>

    <form class="row justify-content-center" action="#" method="POST" enctype="multipart/form-data">

        <div class="form-group col-12 col-md-10 col-lg-8 pt-3 mt-3 BG">

            <h1 class="my-3 text-center">Fichier à uploader</h1>

            <!---------------------------------------- Identité ---------------------------------------->
            <fieldset class="my-2">
                <legend>Identité</legend>

                <input class="form-control mb-2" type="text" name="firstname" placeholder="Prénom" value="<?= $firstname ?? '' ?>">
                <div class="errorMSG"><?= ($error['firstname']) ?? ''; ?></div>

                <input class="form-control mb-2" type="text" name="lastname" placeholder="Nom" value="<?= $lastname ?? '' ?>">
                <div class="errorMSG"><?= ($error['lastname']) ?? ''; ?></div>

            </fieldset>

            <!---------------------------------------- Fichier à envoyer ---------------------------------------->
            <fieldset class="my-2">
                <legend>Fichier à envoyer</legend>

                <!-- Input dépôt de fichier -->
                <div class="form-group row justify-content-center">
                    <label for="fileToUpload">Veuillez joindre un fichier image au format png, jpg, jpeg ou
                        gif</label>
                    <input type="file" class="form-control-file p-3 mx-5" name="fileToUpload" id="fileToUpload">
                </div>

            </fieldset>



            <!---------------------------------------- Reset & Validation ---------------------------------------->
            <div class="row justify-content-center">

                <div class="text-center my-4">
                    <input type="reset" class="btn btn-outline-danger mb-2 mr-3 px-5" id="reset" value="Reset">
                </div>
                <div class="text-center my-4">
                    <input type="submit" class="btn btn-outline-success mb-2 ml-3 px-5" id="submit" value="Valider">
                </div>

            </div>
        </div>
    </form>
</main>

<!-- fin main -->
<!-- début footer -->