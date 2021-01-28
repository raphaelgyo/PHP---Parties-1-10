<?php
// Déclaration des RegEx
define('R_STR_NO_NUMBER', "/^[a-zA-Z ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ-]{2,}$/");

define('R_BIRTHDAY', "/^\d{4}(-)(((0)[0-9])|((1)[0-2]))(-)([0-2][0-9]|(3)[0-1])$/");

define('R_PHONE', "/^((\+)33|0)[1-9](\d{2}){4}$/");

define('R_ZIP', "/^([0-9][0-5][0-9]{3})|(9[7-8][2-578][0-9]{2})$/");

define('R_POLE', "/^[0-9]{7}[A-Z]$/");

define('R_STREET', "/^[a-zA-Z0-9\-\s]{2,}$/");

define('R_NUMBER', "/^[0-9]{1,3}$/");

define('R_TYPE', "/^[a-z]{2,4}$/");

define('R_URL', "/^(http(s)?://)?([\w-])+.{1}([a-zA-Z]{2,63})([/\w-])/???([^#\n\r])?#?([^\n\r])$/");

define('R_DIPLOME', "/^[a-z]{4}|[A-Z]{3}|[A-Z]{3}[+][0-9]|[>=]{2}[A-Z]{3}[+][0-9]$/");
// define('R_DIPLOME', "/^(sans|BAC|BAC\+2|BAC\+3)|>=BAC\+4$/");


// Déclaration de variables

$error = [];
$required = "* Le champ est obligatoire";
$ERR_saisie = 'Le format de la donnée saisie est incorrect';
$programmation = '';
$streetType = '';
$diplome = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Série de contrôles pour vérifier si toutes les informations sont connues comme demandées et avertir l'utilisateur en cas de problème.

    // vérification de $firstname
    if (isset($_POST['firstname'])) {
        $firstname = $_POST['firstname'];
        $firstname = filter_var($firstname, FILTER_SANITIZE_STRING);
        if (empty($firstname)) {
            $error['firstname'] = $required;
        } else if (!preg_match(R_STR_NO_NUMBER, $firstname)) {
            $error['firstname'] = $ERR_saisie;
        }
    }

    // vérification de $lastname
    if (isset($_POST['lastname'])) {
        $lastname = $_POST['lastname'];
        $lastname = filter_var($lastname, FILTER_SANITIZE_STRING);
        if (empty($lastname)) {
            $error['lastname'] = $required;
        } else if (!preg_match(R_STR_NO_NUMBER, $lastname)) {
            $error['lastname'] = $ERR_saisie;
        }
    }

    //  vérification de $birthday 
    if (!empty($_POST['birthday'])) {
        $birthday = $_POST['birthday'];
        $birthday = trim(filter_var($birthday, FILTER_SANITIZE_STRING));
        if (empty($birthday)) {
            $error['birthday'] = $required;
        } else if (!preg_match(R_BIRTHDAY, $birthday)) {
            $error['birthday'] = $ERR_saisie;
        }
    }
    // var_dump($birthday);

    // vérification de $birthCountry
    if (isset($_POST['birthCountry'])) {
        $birthCountry = $_POST['birthCountry'];
        $birthCountry = filter_var($birthCountry, FILTER_SANITIZE_STRING);
        if (empty($birthCountry)) {
            $error['birthCountry'] = $required;
        } else if (!preg_match(R_STR_NO_NUMBER, $birthCountry)) {
            $error['birthCountry'] = $ERR_saisie;
        }
    }

    // vérification de $nationality
    if (isset($_POST['nationality'])) {
        $nationality = $_POST['nationality'];
        $nationality = filter_var($nationality, FILTER_SANITIZE_STRING);
        if (empty($nationality)) {
            $error['nationality'] = $required;
        } else if (!preg_match(R_STR_NO_NUMBER, $nationality)) {
            $error['nationality'] = $ERR_saisie;
        }
    }

    //vérification de $streetNumber
    if (isset($_POST['streetNumber'])) {
        $streetNumber = $_POST['streetNumber'];
        $streetNumber = filter_var($streetNumber, FILTER_SANITIZE_STRING);
        if (empty($streetNumber)) {
            $error['streetNumber'] = $required;
        } else if (!preg_match(R_NUMBER, $streetNumber)) {
            $error['streetNumber'] = $ERR_saisie;
        }
    }

    //vérification de $streetType
    if (isset($_POST['streetType'])) {
        $streetType = $_POST['streetType'];
        $streetType = filter_var($streetType, FILTER_SANITIZE_STRING);
        if (empty($streetType)) {
            $error['streetType'] = $required;
        } else if (!preg_match(R_TYPE, $streetType)) {
            $error['streetType'] = $ERR_saisie;
        }
    }
    // var_dump($streetType);

    //vérification de $streetName
    if (isset($_POST['streetName'])) {
        $streetName = $_POST['streetName'];
        $streetName = filter_var($streetName, FILTER_SANITIZE_STRING);
        if (empty($streetName)) {
            $error['streetName'] = $required;
        } else if (!preg_match(R_STREET, $streetName)) {
            $error['streetName'] = $ERR_saisie;
        }
    }

    //vérification de $zipcode
    if (isset($_POST['zipcode'])) {
        $zipcode = $_POST['zipcode'];
        $zipcode = filter_var($zipcode, FILTER_SANITIZE_STRING);
        if (empty($zipcode)) {
            $error['zipcode'] = $required;
        } else if (!preg_match(R_ZIP, $zipcode)) {
            $error['zipcode'] = $ERR_saisie;
        }
    }

    //vérification de $city
    if (isset($_POST['city'])) {
        $city = $_POST['city'];
        $city = filter_var($city, FILTER_SANITIZE_STRING);
        if (empty($city)) {
            $error['city'] = $required;
        } else if (!preg_match(R_STR_NO_NUMBER, $city)) {
            $error['city'] = $ERR_saisie;
        }
    }

    //vérification de $email
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (empty($email)) {
            $error['email'] = $required;
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error['email'] = $ERR_saisie;
        }
    }

    //vérification de $phone
    if (isset($_POST['phone'])) {
        $phone = $_POST['phone'];
        $phone = filter_var($phone, FILTER_SANITIZE_STRING);
        if (empty($phone)) {
            $error['phone'] = $required;
        } else if (!preg_match(R_PHONE, $phone)) {
            $error['phone'] = $ERR_saisie;
        }
    }
    //vérification de $diplome
    if (isset($_POST['diplome'])) {
        $diplome = $_POST['diplome'];
        $diplome = filter_var($diplome, FILTER_SANITIZE_STRING);
        if (empty($diplome)) {
            $error['diplome'] = $required;
        } else if (!preg_match(R_STR_NO_NUMBER, $diplome)) {
            $error['diplome'] = $ERR_saisie;
        }
    }

    //vérification de $idPoleEmploi
    if (isset($_POST['idPoleEmploi'])) {
        $idPoleEmploi = $_POST['idPoleEmploi'];
        $idPoleEmploi = filter_var($idPoleEmploi, FILTER_SANITIZE_STRING);
        if (empty($idPoleEmploi)) {
            $error['idPoleEmploi'] = $required;
        } else if (!preg_match(R_POLE, $idPoleEmploi)) {
            $error['idPoleEmploi'] = $ERR_saisie;
        }
    }

    //vérification de $codecademyBadge
    if (isset($_POST['codecademyBadge'])) {
        $codecademyBadge = $_POST['codecademyBadge'];
        $codecademyBadge = filter_var($codecademyBadge, FILTER_SANITIZE_STRING);
        if (empty($codecademyBadge)) {
            $error['codecademyBadge'] = $required;
        } else if (!preg_match(R_NUMBER, $codecademyBadge)) {
            $error['codecademyBadge'] = $ERR_saisie;
        }
    }
    // var_dump($codecademyBadge);

    //vérification de $codecademyURL
    if (isset($_POST['codecademyURL'])) {
        $codecademyURL = $_POST['codecademyURL'];
        $codecademyURL = filter_var($codecademyURL, FILTER_SANITIZE_URL);
        if (empty($codecademyURL)) {
            $error['codecademyURL'] = $required;
        } else if (!filter_var($codecademyURL, FILTER_VALIDATE_URL)) {
            $error['codecademyURL'] = $ERR_saisie;
        }
    }

    //vérification de $whichHero
    if (isset($_POST['whichHero'])) {
        $whichHero = $_POST['whichHero'];
        $whichHero = filter_var($whichHero, FILTER_SANITIZE_STRING);
        if (empty($whichHero)) {
            $error['whichHero'] = $required;
        } else if (!preg_match(R_STR_NO_NUMBER, $whichHero)) {
            $error['whichHero'] = $ERR_saisie;
        }
    }

    //vérification de $whyThisHero
    if (isset($_POST['whyThisHero'])) {
        $whyThisHero = $_POST['whyThisHero'];
        $whyThisHero = filter_var($whyThisHero, FILTER_SANITIZE_STRING);
        if (empty($whyThisHero)) {
            $error['whyThisHero'] = $required;
        } else if (!preg_match(R_STR_NO_NUMBER, $whyThisHero)) {
            $error['whyThisHero'] = $ERR_saisie;
        }
    }

    //vérification de $hacks
    if (isset($_POST['hacks'])) {
        $hacks = $_POST['hacks'];
        $hacks = filter_var($hacks, FILTER_SANITIZE_STRING);
        if (empty($hacks)) {
            $error['hacks'] = $required;
        } else if (!preg_match(R_STR_NO_NUMBER, $hacks)) {
            $error['hacks'] = $ERR_saisie;
        }
    }

    // vérification de $programmation
    if (isset($_POST['programmation'])) {
        $programmation = $_POST['programmation'];
        $programmation = filter_var($programmation, FILTER_SANITIZE_STRING);
        if (empty($programmation)) {
            $error['programmation'] = $required;
        } else if (!preg_match(R_STR_NO_NUMBER, $programmation)) {
            $error['programmation'] = $ERR_saisie;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />

    <!-- minify -->
    <link href="https://unpkg.com/nes.css@2.3.0/css/nes.min.css" rel="stylesheet" />
    <!-- latest -->
    <link href="https://unpkg.com/nes.css@latest/css/nes.min.css" rel="stylesheet" />
    <!-- core style only -->
    <link href="https://unpkg.com/nes.css/css/nes-core.min.css" rel="stylesheet" />

    <link href="https://unpkg.com/nes.css/css/nes.css" rel="stylesheet" />

    <!-- CDNJs CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <!-- Feuille de style CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />

    <title>PHP - Partie 10 : TP 2</title>

</head>

<body>
    <header class="site-header container collapse" id="collapseMenu"">
    <h1 class=" mt-5 text-center">Partie 10 : TP 2 : Le Formulaire</h1>
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
        <button class="btn btn-outline-warning mx-auto my-3" type="button" data-toggle="collapse" data-target="#collapseMenu" aria-expanded="false" aria-controls="collapseMenu">
            Sujet du TP
        </button>
    </div>
    <main class="site-content container">
        <form class="row justify-content-center" action="#" method="POST">

            <div class="form-group col-12 col-md-10 col-lg-8 pt-3 mt-3 BG">

                <h2 class="mb-3 text-center">Zeu Inkcrédibeul Déïta Formioulère !!!</h2>
                <h3 class="mb-3 text-center">Super Mega Ultra Manusienne Edition Alpha plus v2.0</h3>



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
                                <option value="" <?= ($streetType == '') ? 'selected' : '' ?>>Sélectionnez... (rue, av., bd...)</option>
                                <option value="rue" <?= ($streetType == 'rue') ? 'selected' : '' ?>>rue</option>
                                <option value="av" <?= ($streetType == 'av') ? 'selected' : '' ?>>avenue</option>
                                <option value="bd" <?= ($streetType == 'bd') ? 'selected' : '' ?>>boulevard</option>
                                <option value="che" <?= ($streetType == 'che') ? 'selected' : '' ?>>chemin</option>
                                <option value="imp" <?= ($streetType == 'imp') ? 'selected' : '' ?>>impasse</option>
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
                        <option value="" <?= ($diplome == '') ? 'selected' : '' ?>>Sélectionnez un diplôme...</option>
                        <option value="sans" <?= ($diplome == 'sans') ? 'selected' : '' ?>>Aucun diplôme</option>
                        <option value="BAC" <?= ($diplome == 'BAC') ? 'selected' : '' ?>>BAC</option>
                        <option value="BAC+2" <?= ($diplome == 'BAC+2') ? 'selected' : '' ?>>BAC+2</option>
                        <option value="BAC+3" <?= ($diplome == 'BAC+3') ? 'selected' : '' ?>>BAC+3</option>
                        <option value=">=BAC+4" <?= ($diplome == '>=BAC+4') ? 'selected' : '' ?>>BAC+4 ou Niveau supérieur</option>

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
                            <input type="radio" id="progYes" name="programmation" value="Oui" <?= ($programmation == 'Oui') ? "checked" : '' ?>>
                            <label for="progYes">Oui</label>
                        </div>
                        <div>
                            <input type="radio" id="progNo" name="programmation" value="Non" <?= ($programmation == 'Non') ? "checked" : '' ?>>
                            <label for="progNo">Non</label>
                        </div>
                    </div>

                    <div class="errorMSG"><?= ($error['programmation']) ?? ''; ?></div>

                </fieldset>


                <!---------------------------------------- Reset & Validation ---------------------------------------->
                <div class="row justify-content-center">

                    <div class="text-center my-4">
                        <input type="reset" class="btn mb-2 mr-3 px-5" id="reset" value="Reset">
                    </div>
                    <div class="text-center my-4">
                        <input type="submit" class="btn mb-2 ml-3 px-5" id="submit" value="Valider">
                    </div>

                </div>
            </div>
        </form>
    </main>

    <footer class="site-footer container-fluid d-flex justify-content-center align-items-center mt-5">
        <p class="mb-0 py-3">
            &copy; 2020 -
            <?php echo date("Y"); ?>
            RG 2DW Prod. @La Manu
        </p>
    </footer>

    <!-- Scripts js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous ">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js " integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN " crossorigin="anonymous ">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js " integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s " crossorigin="anonymous ">
    </script>
</body>

</html>