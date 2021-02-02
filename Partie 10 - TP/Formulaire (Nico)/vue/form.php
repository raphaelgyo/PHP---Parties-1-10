<!-- Je n'ai pas besoin de préciser d'action car mon formulaire est compris dans le fichier index avec mon controller -->
<form class="col-md-12" action="" method="POST">
    <div class="row">
        <div class="col-md-6 my-2">
            <label for="lastname">Nom :</label>
            <!-- Dans la classe de mon input je fais un ternaire pour vérifier si la clef 'lastname' de mon tableau d'erreur est vide.
            Si c'est le cas, je ne fais rien, sinon j'ajout la classe 'error_input'. -->
            <!-- Dans la value de mon input, je vérifie grace à mon Null coalescing ('??') si la variable $lastname exist, si c'est le cas, je l'affiche, sinon je n'affiche rien. -->
            <input type="text" name="lastname" class="form-control <?= (isset($error['lastname'])) ? 'error_input' : '' ?>" placeholder="Nom" value="<?= $lastname ?? '' ?>">
            <!-- Ici je crée un paragraphe error dans lequel j'utilise une nouvelle fois le '??', si la clef lastname existe dans mon tableau, j'affiche sa valeur -->
            <p class="error"><?= ($error['lastname']) ?? '' ?></p>
        </div>
        <!-- Je répète cela pour tout mes inputs -->
        <div class="col-md-6 my-2">
            <label for="firstname">Prénom :</label>
            <input type="text" name="firstname" class="form-control <?= (isset($error['firstname'])) ? 'error_input' : '' ?>" placeholder="Prénom" value="<?= $firstname ?? '' ?>">
            <p class="error"><?= ($error['firstname']) ?? '' ?></p>
        </div>
        <div class="col-md-6 my-2">
            <label for="birthday">Date de naissance :</label>
            <input type="date" name="birthday" class="form-control <?= (isset($error['birthday'])) ? 'error_input' : '' ?>" value="<?= $birthday ?? '' ?>">
            <p class="error"><?= ($error['birthday']) ?? '' ?></p>
        </div>
        <div class="col-md-6 my-2">
            <label for="birthCountry">Pays de naissance :</label>
            <select class="form-control <?= (isset($error['birthCountry'])) ? 'error_input' : '' ?>" name="birthCountry" id="">
                <?php
                // Ici je vérifie si la variable $birthCountry existe, si c'est le cas je crée une option dans mon select qui affichera cette valeur
                if ($birthCountry != '') { ?>
                    <option value="<?= $birthCountry ?>"><?= $birthCountry ?></option>
                <?php
                } else {
                    // Sinon j'affiche cette option ci dessous
                ?>
                    <option value="">-- Choisissez votre pays de naissance --</option>
                <?php
                }
                // pour le reste des options je boucle dans mon tableau $country créé dans mon controller pour afficher toutes les options dans ce tableau
                foreach ($country as $countrys) { ?>
                    <option value="<?= $countrys ?>"><?= $countrys ?></option>
                <?php
                }
                ?>

            </select>
            <p class="error"><?= ($error['birthCountry']) ?? '' ?></p>
        </div>
        <div class="col-md-6 my-2">
            <label for="nationality">Nationalité :</label>
            <input type="text" name="nationality" class="form-control <?= (isset($error['nationality'])) ? 'error_input' : '' ?>" placeholder="Nationalité" value="<?= $nationality ?? '' ?>">
            <p class="error"><?= ($error['nationality']) ?? '' ?></p>
        </div>
        <div class="col-md-6 my-2">
            <label for="postalCode">Code Postal :</label>
            <input type="text" name="postalCode" class="form-control <?= (isset($error['postalCode'])) ? 'error_input' : '' ?>" placeholder="ex : 80000" value="<?= $postalCode ?? '' ?>">
            <p class="error"><?= ($error['postalCode']) ?? '' ?></p>
        </div>
        <div class="col-md-6 my-2">
            <label for="numbreAddress">N° de rue :</label>
            <input type="text" name="numberAddress" class="form-control <?= (isset($error['numberAddress'])) ? 'error_input' : '' ?>" placeholder="ex : 80bis" value="<?= $numberAdress ?? '' ?>">
            <p class="error"><?= ($error['numberAddress']) ?? '' ?></p>
        </div>
        <div class="col-md-6 my-2">
            <label for="address">Rue :</label>
            <input type="text" name="address" class="form-control <?= (isset($error['address'])) ? 'error_input' : '' ?>" placeholder="ex : Rue des Jacobins" value="<?= $address ?? '' ?>">
            <p class="error"><?= ($error['address']) ?? '' ?></p>
        </div>
        <div class="col-md-6 my-2">
            <label for="city">Ville :</label>
            <input type="text" name="city" class="form-control <?= (isset($error['city'])) ? 'error_input' : '' ?>" placeholder="ex : Amiens" value="<?= $city ?? '' ?>">
            <p class="error"><?= ($error['city']) ?? '' ?></p>
        </div>
        <div class="col-md-6 my-2">
            <label for="mail">E-mail :</label>
            <input type="mail" name="mail" class="form-control <?= (isset($error['mail'])) ? 'error_input' : '' ?>" placeholder="ex : toto@amiens.fr" value="<?= $mail ?? '' ?>">
            <p class="error"><?= ($error['mail']) ?? '' ?></p>
        </div>
        <div class="col-md-6 my-2">
            <label for="phone">Téléphone :</label>
            <input type="text" name="phone" class="form-control <?= (isset($error['phone'])) ? 'error_input' : '' ?>" placeholder="ex : 0102030405" value="<?= $phone ?? '' ?>">
            <p class="error"><?= ($error['phone']) ?? '' ?></p>
        </div>
        <div class="col-md-6 my-2">
            <label for="degree">Diplôme :</label>
            <select class="form-control <?= (isset($error['degree'])) ? 'error_input' : '' ?>" name="degree" id="">
                <?php
                if ($degree != '') { ?>
                    <option value="<?= $degree ?>"><?= $degree ?></option>
                <?php
                } else {
                ?>
                    <option value="">-- Choisissez votre niveau --</option>
                <?php
                }
                foreach ($diplomes as $diploma) { ?>
                    <option value="<?= $diploma ?>"><?= $diploma ?></option>
                <?php
                }
                ?>
            </select>
            <p class="error"><?= ($error['degree']) ?? '' ?></p>
        </div>
        <div class="col-md-6 my-2">
            <label for="poleEmploi">N° Pôle emploi :</label>
            <input type="text" name="poleEmploi" class="form-control <?= (isset($error['poleEmploi'])) ? 'error_input' : '' ?>" placeholder="ex : 0123456N" value="<?= $poleEmploi ?? '' ?>">
            <p class="error"><?= ($error['poleEmploi']) ?? '' ?></p>
        </div>
        <div class="col-md-6 my-2">
            <label for="badge">Nombre de badges obtenus :</label>
            <select class="form-control <?= (isset($error['badge'])) ? 'error_input' : '' ?>" name="badge" id="">
                <?php
                if ($badge != '') { ?>
                    <option value="<?= $badge ?>"><?= $badge ?></option>
                <?php
                } else {
                ?>
                    <option value="">-- Choisissez le nombre de badges --</option>
                <?php
                }
                foreach ($badges as $badge) { ?>
                    <option value="<?= $badge ?>"><?= $badge ?></option>
                <?php
                }
                ?>
            </select>
            <p class="error"><?= ($error['badge']) ?? '' ?></p>
        </div>
        <div class="col-md-6 my-2">
            <label for="codecademy">Liens Codecademy :</label>
            <input type="text" name="codecademy" class="form-control <?= (isset($error['codecademy'])) ? 'error_input' : '' ?>" placeholder="ex : https://www.codecademy.com/profiles/johndoe" value="<?= $codecademy ?? '' ?>">
            <p class="error"><?= ($error['codecademy']) ?? '' ?></p>
        </div>
        <div class="col-md-12 my-2">
            <label for="hero">Si vous étiez un super héros / une super héroïne, qui seriez-vous et pourquoi ?</label>
            <textarea class="form-control textarea-control  <?= (isset($error['hero'])) ? 'error_input' : '' ?>" name="hero" id="" rows="5" placeholder="Votre Hero .."><?= $hero ?? '' ?></textarea>
            <p class="error"><?= ($error['hero']) ?? '' ?></p>
        </div>
        <div class="col-md-12 my-2">
            <label for="hack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) :</label>
            <textarea class="form-control  textarea-control <?= (isset($error['hack'])) ? 'error_input' : '' ?>" name="hack" id="" rows="5" placeholder="Vos Hack ..."><?= $hack ?? '' ?></textarea>
            <p class="error"><?= ($error['hack']) ?? '' ?></p>
        </div>
        <div class="col-md-12 my-2">
            <label for="experience">Avez-vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
            <textarea class="form-control textarea-control <?= (isset($error['experience'])) ? 'error_input' : '' ?>" name="experience" id="" rows="5" placeholder="Vos expériences ..."><?= $experience ?? '' ?></textarea>
            <p class="error"><?= ($error['experience']) ?? '' ?></p>
        </div>
        <button type="submit" name="form_manu">Envoyer</button>
    </div>
</form>