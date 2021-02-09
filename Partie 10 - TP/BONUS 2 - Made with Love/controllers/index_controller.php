<?php
$verif = null;
$error = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['OK'])) {
    $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
    if (!empty($lastname)) {
        if (!preg_match(REGEX_NO_NUMBER, $lastname)) {
            $error['lastname'] = 'Le nom ne peux pas comporter de chiffre.';
        }
    } else {
        $error['lastname'] = 'Le champ est vide';
    }

    $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
    if (!empty($firstname)) {
        if (!preg_match(REGEX_NO_NUMBER, $firstname)) {
            $error['firstname'] = 'Le prénom ne peux pas comporter de chiffre.';
        }
    } else {
        $error['firstname'] = 'Le champ est vide';
    }

    $birthdate = filter_input(INPUT_POST, 'birthdate');
    // var_dump(preg_match(REGEX_DATE, $birthdate));
    if (!empty($birthdate)) {
        if (!preg_match(REGEX_DATE, $birthdate)) {
            $error['birthdate'] = 'Votre date de naissance n\'est pas valide.';
        }
    } else {
        $error['birthdate'] = 'Choisissez votre date de naissance';
    }

    $profile_gender = filter_input(INPUT_POST, 'profile_gender', FILTER_SANITIZE_STRING);
    if (!empty($profile_gender)) {
        if (!preg_match(REGEX_NO_NUMBER, $profile_gender)) {
            $error['profile_gender'] = 'Le genre selectionné n\'est pas valide';
        }
    } else {
        $error['profile_gender'] = 'Choisissez votre genre';
    }

    $zipcode = filter_input(INPUT_POST, 'zipcode', FILTER_SANITIZE_STRING);
    if (!empty($zipcode)) {
        if (!preg_match(REGEX_ZIPCODE, $zipcode)) {
            $error['zipcode'] = 'Le code postal n\'est pas valide';
        }
    } else {
        $error['zipcode'] = 'Entrer votre Code postal';
    }

    $mail = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL);
    if (!empty($mail)) {
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $error['mail'] = 'L\'adresse email n\'est pas valide';
        }
    } else {
        $error['mail'] = 'Entrez une adresse email valide';
    }

    $search_gender = filter_input(INPUT_POST, 'search_gender', FILTER_SANITIZE_STRING);
    if (!empty($search_gender)) {
        if (!preg_match(REGEX_NO_NUMBER, $search_gender)) {
            $error['search_gender'] = 'Le type de recherche selectionné n\'est pas valide';
        }
    } else {
        $error['search_gender'] = 'Choisissez votre type de recherche';
    }

    // COOKIES

    if (empty($error)) {
        setcookie('firstname', $firstname, time() + 3600 * 24, '/');
        setcookie('lastname', $lastname, time() + 3600 * 24, '/');
        setcookie('birthdate', $birthdate, time() + 3600 * 24, '/');
        setcookie('profile_gender', $profile_gender, time() + 3600 * 24, '/');
        setcookie('zipcode', $zipcode, time() + 3600 * 24, '/');
        setcookie('mail', $mail, time() + 3600 * 24, '/');
        setcookie('search_gender', $search_gender, time() + 3600 * 24, '/');
        header('Refresh:0');
    } else {
        $verif = false;
    }
}
//fonction pour sécuriser les données
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
