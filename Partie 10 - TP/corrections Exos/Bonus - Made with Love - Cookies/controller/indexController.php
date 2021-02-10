<?php
//ici j'inclus mon fichier regex
include('utils/regex.php');
//J'initialise ma variable $error, à un tableau vide
$error = [];
//Si je POST le formulaire
if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
//Je fais mes vérification (CF: Exercice corrigé du formulaire).
    $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
    if(!empty($lastname)){
        if(!preg_match(REGEX_NO_NUMBER, $lastname)){
            $error['lastname'] = 'Le nom ne peux pas comporter de chiffre.';
        }
    }else{
        $error['lastname'] = 'Le champ est vide';   
    }

    $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
    if(!empty($firstname)){
        if(!preg_match(REGEX_NO_NUMBER, $firstname)){
            $error['firstname'] = 'Le prénom ne peux pas comporter de chiffre.';
        }
    }else{
        $error['firstname'] = 'Le champ est vide';   
    }

    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_STRING);
    $age_int = intval($age);
    if(!empty($age)){
        if(!preg_match(REGEX_NUMBER, $age_int)){
            $error['age'] = 'L\'age doit etre composé de chiffres.';
        }
    }else{
        $error['age'] = 'Le champ est vide';   
    }

    $mail = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL);
    if(!empty($mail)){
        if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
            $error['mail'] = 'L\'email n\'est pas valide';
        }
    }else{
        $error['mail'] = 'Entrer votre Email';  
    }

    $gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_STRING);
    if(!empty($gender)){
        if(!preg_match(REGEX_NO_NUMBER, $gender)){
            $error['gender'] = 'Le genre n\'est pas valide.';
        }
    }else{
        $error['gender'] = 'Le champ est vide';   
    }

    $postal = filter_input(INPUT_POST, 'postal', FILTER_SANITIZE_STRING);
    if(!empty($postal)){
        if(!preg_match(REGEX_POSTAL_CODE, $postal)){
            $error['postal'] = 'Le code postal n\'est pas valide.';
        }
    }else{
        $error['postal'] = 'Le champ est vide';   
    }

    $search = filter_input(INPUT_POST, 'search', FILTER_SANITIZE_STRING);
    if(!empty($search)){
        if(!preg_match(REGEX_NO_NUMBER, $search)){
            $error['search'] = 'Le genre recherché n\'est pas valide.';
        }
    }else{
        $error['search'] = 'Le champ est vide';   
    }
    $date = filter_input(INPUT_POST, 'date');
//Si mon tableau d'erreurs et vide, je set mes cookie et je refresh ma page.
    if(empty($error)){
        setcookie('user_firstname', $firstname, time() + 3600, '/');
        setcookie('user_search', $search, time() + 3600, '/');
        setcookie('user_gender', $gender, time() + 3600, '/');
        setcookie('user_lastname', $lastname, time() + 3600, '/');
        setcookie('user_age', $age, time() + 3600, '/');
        setcookie('user_postal', $postal, time() + 3600, '/');
        setcookie('user_mail', $mail, time() + 3600, '/');
        setcookie('remember', true, time() + 3600, '/');
        header('Refresh:0');
    }
}