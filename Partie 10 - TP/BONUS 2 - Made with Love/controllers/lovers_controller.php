<?php
// Ici j'utilise la fonction define() qui me permet de nommer des superGlobales que j'utilise ensuite dans mon controller (ici je leur passe les regexs).
define('REGEX_NO_NUMBER', "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/");
define('REGEX_DATE', "/^(19|20[0-9]{2})[-\/.](0[1-9]|1[012])[-\/.](0[1-9]|[12][0-9]|3[01])$/");
define('REGEX_ZIPCODE', "/^(([0-8][0-9])|(9[0-5]))[0-9]{3}$/");
define('REGEX_NUMBER', "/^[1-9]{1}$/");
$verif = null;

$error = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['OK'])) {
    //Si c'est le cas je recupère mes valeurs gràçe à la fonction filter_input() en précisant la method utilisé pour l'envoi  (premier paramètre)
    //ainsi que le name de l'input que je veux récupérer (deuxième paramètre), en troisième paramètre je lui passe le filter sanitize que je souhaite
    //disponible dans la doc PHP 
    $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
    //Ensuite je vérifie si l'input est vide ou non
    if (!empty($lastname)) {
        //S'il n'est pas vide je teste ma regex défini dans le fichier regex.php avec ma super globale REGEX_NO_NUMBER
        if (!preg_match(REGEX_NO_NUMBER, $lastname)) {
            //Si la regex ne passe pas, j'ajoute a mon tableau d'erreur la phrase 'Le nom ne peux pas comporter de chiffre.',
            //à la clef 'lastname'
            $error['lastname'] = 'Le nom ne peux pas comporter de chiffre.';
        }
    } else {
        //Si l'input est vide j'ajoute à mon tableau d'erreur la phrase 'Le champ est vide' à la clef 'lastname'
        $error['lastname'] = 'Le champ est vide';
    }

    //Je répète la même chose pour chaque input (en changeant mes regex et les sanitize suivant l'input).
    $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
    if (!empty($firstname)) {
        if (!preg_match(REGEX_NO_NUMBER, $firstname)) {
            $error['firstname'] = 'Le prénom ne peux pas comporter de chiffre.';
        }
    } else {
        $error['firstname'] = 'Le champ est vide';
    }

    $birthdate = filter_input(INPUT_POST, 'birthdate');
    if (!empty($birthdate)) {
        if (!preg_match(REGEX_DATE, $birthdate)) {
            $error['birthdate'] = 'Votre date de naissance n\'est pas valide.';
        }
    } else {
        $error['birthdate'] = 'Choisissez votre date de naissance';
    }

    if (empty($error)) {
        $verif = true;
    } else {
        $verif = false;
    }
};
