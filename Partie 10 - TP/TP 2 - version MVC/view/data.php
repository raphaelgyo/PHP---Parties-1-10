<?php
setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
?>
<!-- Résumé de formulaire -->
<div class="container">
    <div class="row justify-content-center align-items-center">

        <div class="col-12 col-lg-6 pt-3 mt-3 BG">
            <div class="col-12">

                <h1 class="text-center mt-3 mb-3">Validation du formulaire</h1>

                <h2 class="text-center mb-3">Identité</h2>
                <div class="pl-3"><?= $firstname . ' ' . $lastname ?></div>
                <div class="pl-3"><?= 'né le ' . $birthday . ' en ' . $birthCountry ?></div>
                <div class="pl-3 mb-3"><?= 'nationalité ' . $nationality ?></div>

                <h2 class="text-center mb-3">Adresse</h2>
                <div class="pl-3"><?= $streetNumber . ' ' . $streetType . ' ' . $streetName ?></div>
                <div class="pl-3 mb-3"><?= $zipcode . ' ' . $city ?></div>

                <h2 class="text-center mb-3">Contact</h2>
                <div class="pl-3"><?= $email ?></div>
                <div class="pl-3 mb-3"><?= $phone ?></div>

                <h2 class="text-center mb-3">Diplôme</h2>
                <div class="pl-3 mb-3"><?= $diplome ?></div>

                <h2 class="text-center mb-3">Pôle emploi</h2>
                <div class="pl-3 mb-3"><?= $idPoleEmploi ?></div>

                <h2 class="text-center mb-3">Nombre de badge</h2>
                <div class="pl-3 mb-3"><?= $codecademyBadge ?></div>

                <h2 class="text-center mb-3">Liens codecademy</h2>
                <div class="pl-3 mb-3"><?= $codecademyURL ?></div>

                <h2 class="text-center mb-3">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</h2>
                <div class="pl-3"><?= $whichHero ?></div>
                <div class="pl-3 mb-3"><?= $whyThisHero ?></div>

                <h2 class="text-center mb-3">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</h2>
                <div class="pl-3 mb-3"><?= $hacks ?></div>

                <h2 class="text-center mb-3">Avez-vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</h2>
                <div class="pl-3 mb-3"><?= $programmation ?></div>

            </div>
        </div>


    </div>
    <!------------------------------------------ submit ------------------------------------------------>
    <form class="d-flex flex-row justify-content-center text-center my-5">
        <a href="index.php" class="btn btn-outline-secondary px-5 mx-2">Retour</a>
        <!-- <input id="sendFormToMail" type="button" class="btn btn-outline-success px-5 mx-2" value="Envoyer ?"> -->
    </form>
</div>