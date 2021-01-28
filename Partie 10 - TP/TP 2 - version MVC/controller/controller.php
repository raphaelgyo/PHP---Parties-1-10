<?php
// Déclaration des variables
$verif = null;
$error = [];
$required = "* Le champ est obligatoire";
$ERR_saisie = 'Le format de la donnée saisie est incorrect';


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
        } else if (!preg_match(R_DIPLOME, $diplome)) {
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
    // var_dump($error);

    if (empty($error)) {
        $verif = true;
    } else {
        $verif = false;
    }
}
function valid_data($data)
{

    $data = trim($data); // supprime espace devant et derrière chaîne
    $data = stripslashes($data); // supprime slash dans chaîne
    $data = htmlspecialchars($data);

    return $data;
}
