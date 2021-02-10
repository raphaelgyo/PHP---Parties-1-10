<div class="row justify-content-center">
    <div class="col-md-6 text-center">
        <form action="" method="POST" class="form-group row">

            <div class="col-md-6">
                <label class="my-2" for="lastname">Nom :</label>
                <p><input type="text" name="lastname" placeholder="Nom" class="form-control" value="<?= $lastname ?? '' ?>"></p>
                <p><?= $error['lastname'] ?? '' ?></p>
            </div>

            <div class="col-md-6">
                <label class="my-2" for="firstname">Prénom :</label>
                <p><input type="text" name="firstname" placeholder="Prénom" class="form-control" value="<?= $firstname ?? '' ?>"></p>
                <p><?= $error['firstname'] ?? ''  ?></p>
            </div>

            <div class="col-md-6">
                <label class="my-2" for="age">Age :</label>
                <p><input type="text" name="age" placeholder="Age" class="form-control" value="<?= $age ?? '' ?>"></p>
                <p><?= $error['age'] ?? '' ?></p>
            </div>

            <div class="col-md-6">
                <label class="my-2" for="postal">Code postal :</label>
                <p><input type="text" name="postal" placeholder="Code Postal" class="form-control" value="<?= $postal ?? '' ?>"></p>
                <p><?= $error['postal'] ?? '' ?></p>
            </div>

            <div class="col-md-6">
                <label class="my-2" for="mail">E-mail :</label>
                <p><input type="mail" name="mail" placeholder="E-mail" class="form-control" value="<?= $mail ?? '' ?>"></p>
                <p><?= $error['mail'] ?? ''  ?></p>
            </div>

            <label class="my-2" for="gender">Genre :</label>
            <select name="gender" id="" class="form-control">
                <option value="">-- Selectionner votre genre --</option>
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
            </select>
            <p><?= $error['gender'] ?? ''  ?></p>

            <label class="my-2" for="search">Votre type de recherche :</label>
            <select name="search" id="search" class="form-control">
                <option value="">-- Selectionner votre type de recherche --</option>
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
            </select>
            <p><?= $error['search'] ?? ''  ?></p>

            <button type="submit" name="submit" class="btn btn-primary mt-3">Rencontrer nos célibataires</button>
        </form>
    </div>
</div>