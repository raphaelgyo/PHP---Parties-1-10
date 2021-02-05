<form class="col-md-12" action="" method="POST">
    <h2 class="text-center mb-5">💗 Bienvenue jeune LOVER 💗</h2>

    <div class="row justify-content-center">

        <div class="col-md-6 mb-3">
            <label for="lastname">Nom</label>
            <input type="text" class="form-control <?= (isset($error['lastname'])) ? 'error_input' : '' ?>" id="lastname" placeholder="Votre nom" value="<?= $lastname ?? '' ?>" name="lastname">

            <p class="error"><?= ($error['lastname']) ?? '' ?></p>
        </div>

        <div class="col-md-6 mb-3">
            <label for="firstname">Prénom</label>
            <input type="text" class="form-control <?= (isset($error['firstname'])) ? 'error_input' : '' ?>" id="firstname" placeholder="Votre prénom" value="<?= $firstname ?? '' ?>" name="firstname">

            <p class="error"><?= ($error['firstname']) ?? '' ?></p>
        </div>

        <div class="col-md-6 mb-3">
            <label for="birthdate">Date de naissance</label>
            <input type="date" class="form-control <?= (isset($error['birthdate'])) ? 'error_input' : '' ?>" id="birthdate" value="<?= $birthdate ?? '' ?>" name="birthdate">

            <p class="error"><?= ($error['birthdate']) ?? '' ?></p>
        </div>

        <div class="col-md-6 mb-3">
            <label for="gender">Vous-êtes ?</label>
            <select class="custom-select d-block w-100 <?= (isset($error['gender'])) ? 'error_input' : '' ?>" id="gender" name="gender">
                <?php
                if ($gender != '') {
                ?>
                    <option value="<?= $gender; ?>"><?= $gender; ?></option>
                <?php
                } else {  ?>
                    <option value="">Votre genre...</option>
                <?php } ?>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
                <option value="Autre">Autre</option>
            </select>

            <p class="error"><?= ($error['gender']) ?? '' ?></p>
        </div>

        <div class="col-md-6 mb-3">
            <label for="zipcode">Code postal</label>
            <input type="text" class="form-control <?= (isset($error['zipcode'])) ? 'error_input' : '' ?>" id="zipcode" placeholder="Votre code postal" value="<?= $zipcode ?? '' ?>" name="zipcode">

            <p class="error"><?= ($error['zipcode']) ?? '' ?></p>
        </div>



        <div class="col-md-6 mb-3">
            <label for="mail">Email</label>
            <input type="mail" class="form-control <?= (isset($error['mail'])) ? 'error_input' : '' ?>" id="mail" placeholder="john.doe@example.com" value="<?= $mail ?? '' ?>" name="mail">

            <p class="error"><?= ($error['mail']) ?? '' ?></p>
        </div>



        <div class="col-md-6 mb-3">
            <label for="searching">Que recherchez vous ?</label>
            <select class="custom-select d-block w-100 <?= (isset($error['searching'])) ? 'error_input' : '' ?>" id="searching" name="searching">
                <?php
                if ($searching != '') {
                ?>
                    <option value="<?= $searching; ?>"><?= $searching; ?></option>
                <?php
                } else {  ?>
                    <option value="">Vous recherchez...</option>
                <?php } ?>
                <option value="un Homme">un Homme</option>
                <option value="une Femme">une Femme</option>
            </select>
            <p class="error"><?= ($error['searching']) ?? '' ?></p>
        </div>


        <div class="col-md-12 my-5 text-center">
            <button class="btn btn-danger px-3" type="submit" name="OK">Rencontrer nos célibataires</button>
        </div>

    </div>
</form>