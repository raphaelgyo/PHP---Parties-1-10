<!-- Formulaire -->
<header class="site-header container collapse" id="collapseMenu"">

    <h1 class=" mt-5 text-center">Partie 10 : TP 2 : Modèle - Vue - Contrôleur</h1>

    <p>Faire une page pour enregistrer un futur apprenant. On devra pouvoir saisir les informations suivantes :</p>
    <ul>
        <li>Nom</li>
        <li>Prénom</li>
        <li>Date de naissance</li>
        <li>Pays de naissance</li>
        <li>Nationalité</li>
        <li>Adresse</li>
        <li>Email</li>
        <li>Téléphone</li>
        <li>Diplôme (sans, Bac, Bac+2, Bac+3 ou supérieur)</li>
        <li>Numéro pôle emploi</li>
        <li>Nombre de badge</li>
        <li>Liens codecademy</li>
        <li>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</li>
        <li>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</li>
        <li>Avez-vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</li>
    </ul>
    <p>À la validation de ces informations, il faudra les afficher dans la même page à la place du formulaire.</p>

</header>

<div class="row">
    <button class="btn btn-outline-primary mx-auto my-3" type="button" data-toggle="collapse" data-target="#collapseMenu" aria-expanded="false" aria-controls="collapseMenu">
        Sujet du TP
    </button>
</div>

<main class="site-content container">

    <button class="btn btn-dark" onclick="myFunction()" id="buttonSwitchMode"><i class="fas fa-moon"></i></button>

    <form class="row justify-content-center" action="#" method="POST">

        <div class="form-group col-12 col-md-10 col-lg-8 pt-3 mt-3 BG">

            <!---------------------------------------- Identité ---------------------------------------->
            <fieldset class="my-2">
                <legend>Identité</legend>
                <input class="form-control mb-2" type="text" name="firstname" placeholder="Prénom" value="<?= $firstname ?? '' ?>">
                <div class="errorMSG"><?= ($error['firstname']) ?? ''; ?></div>

                <input class="form-control mb-2" type="text" name="lastname" placeholder="Nom" value="<?= $lastname ?? '' ?>">
                <div class="errorMSG"><?= ($error['lastname']) ?? ''; ?></div>

                <div class="form-row mb-2">
                    <div class="col-5">
                        <input class="form-control col" type="date" name="birthday" placeholder="jj/mm/aaaa" value="<?= $birthday ?? '' ?>">

                        <div class="errorMSG"><?= ($error['birthday']) ?? ''; ?></div>
                    </div>

                    <div class="col">
                        <input class="form-control col" type="text" name="birthCountry" placeholder="Pays de naissance" value="<?= $birthCountry ?? '' ?>">

                        <div class="errorMSG"><?= ($error['birthCountry']) ?? ''; ?></div>
                    </div>
                </div>

                <input class="form-control mb-2" type="text" name="nationality" placeholder="Nationalité" value="<?= $nationality ?? '' ?>">

                <div class="errorMSG"><?= ($error['nationality']) ?? ''; ?></div>
            </fieldset>


            <!---------------------------------------- Adresse ---------------------------------------->
            <fieldset class="my-2">
                <legend>Adresse postale</legend>
                <div class="form-row">
                    <div class="col-3">
                        <input class="form-control mb-2" type="number" name="streetNumber" placeholder="N°..." value="<?= $streetNumber ?? '' ?>" min="1">

                        <div class="errorMSG"><?= ($error['streetNumber']) ?? ''; ?></div>
                    </div>

                    <div class="col">
                        <select class="form-control mb-2" name="streetType" id="streetType">
                            <option value="" <?= (isset($streetType) && $streetType == '') ? 'selected' : '' ?>>Sélectionnez... (rue, av., bd...)</option>
                            <option value="rue" <?= (isset($streetType) && $streetType == 'rue') ? 'selected' : '' ?>>rue</option>
                            <option value="av" <?= (isset($streetType) && $streetType == 'av') ? 'selected' : '' ?>>avenue</option>
                            <option value="bd" <?= (isset($streetType) && $streetType == 'bd') ? 'selected' : '' ?>>boulevard</option>
                            <option value="che" <?= (isset($streetType) && $streetType == 'che') ? 'selected' : '' ?>>chemin</option>
                            <option value="imp" <?= (isset($streetType) && $streetType == 'imp') ? 'selected' : '' ?>>impasse</option>
                        </select>

                        <div class="errorMSG"><?= ($error['streetType']) ?? ''; ?></div>
                    </div>
                </div>
                <div class="form-row mb-2">
                    <div class="col">
                        <input class="form-control" type="text" name="streetName" placeholder="Nom de rue" value="<?= $streetName ?? '' ?>">

                        <div class="errorMSG"><?= ($error['streetName']) ?? ''; ?></div>
                    </div>
                </div>
                <div class="form-row mb-2">

                    <div class="col-3">
                        <input class="form-control" type="text" name="zipcode" placeholder="Code postal" value="<?= $zipcode ?? '' ?>">

                        <div class="errorMSG"><?= ($error['zipcode']) ?? ''; ?></div>
                    </div>

                    <div class="col">
                        <input class="form-control" type="text" name="city" placeholder="Ville" value="<?= $city ?? '' ?>">

                        <div class="errorMSG"><?= ($error['city']) ?? ''; ?></div>
                    </div>
                </div>

            </fieldset>


            <!---------------------------------------- Contact ---------------------------------------->
            <fieldset class="my-2">
                <legend>Contact</legend>
                <div class="input-icone">
                    <i class="far fa-envelope"></i>
                    <input class="form-control mb-2" type="email" name="email" placeholder="E-mail (john@doe.com)" value="<?= $email ?? '' ?>">

                    <div class="errorMSG"><?= ($error['email']) ?? ''; ?></div>
                </div>

                <div class="input-icone mb-2">
                    <i class="fas fa-mobile-alt"></i>
                    <input class="form-control" type="phone" name="phone" placeholder="Téléphone (+33 6 12 34 56 78 ou 06 12 34 56 78)" value="<?= $phone ?? '' ?>">

                    <div class="errorMSG"><?= ($error['phone']) ?? ''; ?></div>
                </div>
            </fieldset>


            <!---------------------------------------- Diplômes ---------------------------------------->
            <fieldset class="my-2">
                <legend>Diplômes</legend>

                <select class="form-control mb-2" name="diplome" id="diplomeSelect">
                    <option value="" <?= (isset($diplome) && $diplome == '') ? 'selected' : '' ?>>Sélectionnez...</option>
                    <option value="sans" <?= (isset($diplome) && $diplome == 'sans') ? 'selected' : '' ?>>Aucun diplôme</option>
                    <option value="BAC" <?= (isset($diplome) && $diplome == 'BAC') ? 'selected' : '' ?>>BAC</option>
                    <option value="BAC+2" <?= (isset($diplome) && $diplome == 'BAC+2') ? 'selected' : '' ?>>BAC+2</option>
                    <option value="BAC+3" <?= (isset($diplome) && $diplome == 'BAC+3') ? 'selected' : '' ?>>BAC+3</option>
                    <option value=">=BAC+4" <?= (isset($diplome) && $diplome == '>=BAC+4') ? 'selected' : '' ?>>BAC+4 ou Niveau supérieur</option>

                    <div class="errorMSG"><?= ($error['diplome']) ?? ''; ?></div>

                </select>
            </fieldset>


            <!---------------------------------------- Pôle emploi ---------------------------------------->
            <fieldset class="my-2">
                <legend>Pôle emploi</legend>
                <input class="form-control mb-2" type="text" name="idPoleEmploi" placeholder="Numéro Pôle emploi" value="<?= $idPoleEmploi ?? '' ?>">

                <div class="errorMSG"><?= ($error['idPoleEmploi']) ?? ''; ?></div>
            </fieldset>


            <!---------------------------------------- Nombre de badge codecademy ---------------------------------------->
            <fieldset class="my-2">
                <legend>Nombre de badge codecademy</legend>
                <input class="form-control mb-2 col-4" type="number" name="codecademyBadge" placeholder="Nombre de badge" value="<?= $codecademyBadge ?? '' ?>" min="1">

                <div class="errorMSG"><?= ($error['codecademyBadge']) ?? ''; ?></div>
            </fieldset>


            <!---------------------------------------- Liens codecademy ---------------------------------------->
            <fieldset class="my-2">
                <legend>Liens codecademy</legend>
                <input class="form-control mb-2" type="text" name="codecademyURL" placeholder="Liens codecademy" value="<?= $codecademyURL ?? '' ?>">

                <div class="errorMSG"><?= ($error['codecademyURL']) ?? ''; ?></div>
            </fieldset>


            <!---------------------------------------- Questionnaire Héros ---------------------------------------->
            <fieldset class="my-2">

                <legend>Si vous étiez un super héros / une super héroïne, qui seriez-vous et pourquoi ?</legend>

                <input class="form-control mb-2" id="whichHero" type="text" name="whichHero" placeholder="Quel super héros / héroïne seriez-vous ?" value="<?= $whichHero ?? '' ?>">

                <div class="errorMSG"><?= ($error['whichHero']) ?? ''; ?></div>

                <textarea class="form-control mb-2" name="whyThisHero" id="whyThisHero" rows="3" placeholder="...et pourquoi ?"><?= $whyThisHero ?? '' ?></textarea>

                <div class="errorMSG"><?= ($error['whyThisHero']) ?? ''; ?></div>
            </fieldset>


            <!---------------------------------------- Hacks ---------------------------------------->
            <fieldset class="my-2">

                <legend>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</legend>

                <textarea class="form-control mb-2" name="hacks" id="hacks" rows="3" placeholder="Racontez-nous un de vos hacks..."><?= $hacks ?? '' ?></textarea>

                <div class="errorMSG"><?= ($error['hacks']) ?? ''; ?></div>

            </fieldset>


            <!---------------------------------------- Programmation / Informatique ---------------------------------------->
            <fieldset class="my-2">
                <legend>Avez-vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</legend>

                <div class="form-check pl-5">
                    <div>
                        <input type="radio" id="progYes" name="programmation" value="Oui" <?= (isset($programmation) && $programmation == 'Oui') ? "checked" : '' ?>>
                        <label for="progYes">Oui</label>
                    </div>
                    <div>
                        <input type="radio" id="progNo" name="programmation" value="Non" <?= (isset($programmation) && $programmation == 'Non') ? "checked" : '' ?>>
                        <label for="progNo">Non</label>
                    </div>
                </div>

                <div class="errorMSG"><?= ($error['programmation']) ?? ''; ?></div>

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