<?php
// J'initialise ma variable $verif à null pour que dans mon index, il selectionne la vue formulaire
$verif = null;
// Je créer des tableaux $country, $diplomes, $badges contenant les informations que je souhaite afficher dans mon formulaire (select)
$country = ["Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe"];
$diplomes =  ['Bac', 'BTS', 'Bac Pro', 'BUT', 'Licence', 'Licence Pro', 'Master', 'CAP'];
$badges = ['1', '2','3', '4','5', '6'];
// J'initialise un tableau d'erreur à vide
$error = [];

//Ici je vérifie si ma page à été envoyer en post et si le formulaire à été envoyé.
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form_manu'])){
//Si c'est le cas je recupère mes valeurs gràçe à la fonction filter_input() en précisant la method utilisé pour l'envoi  (premier paramètre)
//ainsi que le name de l'input que je veux récupérer (deuxième paramètre), en troisième paramètre je lui passe le filter sanitize que je souhaite
//disponible dans la doc PHP 
    $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
    //Ensuite je vérifie si l'input est vide ou non
    if(!empty($lastname)){
        //S'il n'est pas vide je test ma regex défini dans le fichier regex.php avec ma super global REGEX_NO_NUMBER
        if(!preg_match(REGEX_NO_NUMBER, $lastname)){
            //Si la regex ne passe pas, j'ajoute a mon tableau d'erreur la phrase 'Le nom ne peux pas comporter de chiffre.',
            //à la clef 'lastname'
            $error['lastname'] = 'Le nom ne peux pas comporter de chiffre.';
        }
    }else{
        //Si l'input est vide j'ajoute à mon tableau d'erreur la phrase 'Le champ est vide' à la clef 'lastname'
        $error['lastname'] = 'Le champ est vide';   
    }

    //Je répète la même chose pour chaque input (en changeant mes regex et les sanitize suivant l'input).
    $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
    if(!empty($firstname)){
        if(!preg_match(REGEX_NO_NUMBER, $firstname)){
            $error['firstname'] = 'Le prénom ne peux pas comporter de chiffre.';
        }
    }else{
        $error['firstname'] = 'Le champ est vide';   
    }

    $birthday = filter_input(INPUT_POST, 'birthday');
    if(!empty($birthday)){
        if(!preg_match(REGEX_DATE, $birthday)){
            $error['birthday'] = 'Votre date de naissance n\'est pas valide.';
        }
    }else{
        $error['birthday'] = 'Choisissez votre date de naissance';  
    }

    $birthCountry = filter_input(INPUT_POST, 'birthCountry', FILTER_SANITIZE_STRING);
    if(!empty($birthCountry)){
        //En plus de ma regex, ici je vérifie que la donnée envoyer est bien présente dans le tableau que j'ai créer au debut de mon script.
        if(!preg_match(REGEX_NO_NUMBER, $birthCountry) || !in_array($birthCountry, $country)){
            $error['birthCountry'] = 'Le pays n\'est pas valide';
        }
    }else{
        $error['birthCountry'] = 'Choisissez votre Pays de naissance';  
    }

    $nationality = filter_input(INPUT_POST, 'nationality', FILTER_SANITIZE_STRING);
    if(!empty($nationality)){
        if(!preg_match(REGEX_NO_NUMBER, $nationality)){
            $error['nationality'] = 'La nationalité n\'est pas valide';
        }
    }else{
        $error['nationality'] = 'Entrer votre nationalité';  
    }

    $postalCode = filter_input(INPUT_POST, 'postalCode', FILTER_SANITIZE_STRING);
    if(!empty($postalCode)){
        if(!preg_match(REGEX_POSTAL_CODE, $postalCode)){
            $error['postalCode'] = 'Le code postal n\'est pas valide';
        }
    }else{
        $error['postalCode'] = 'Entrer votre Code postal';  
    }

    $numberAddress = filter_input(INPUT_POST, 'numberAddress', FILTER_SANITIZE_STRING);
    if(!empty($numberAddress)){
        if(!preg_match(REGEX_NUMBER_ADD, $numberAddress)){
            $error['numberAddress'] = 'Le numéro n\'est pas valide';
        }
    }else{
        $error['numberAddress'] = 'Entrer votre N° de rue';  
    }

    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
    if(!empty($address)){
        if(!preg_match(REGEX_NO_NUMBER, $address)){
            $error['address'] = 'La rue n\'est pas correct';
        }
    }else{
        $error['address'] = 'Entrer le nom de votre rue';  
    }

    $city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING);
    if(!empty($city)){
        if(!preg_match(REGEX_NO_NUMBER, $city)){
            $error['city'] = 'La ville n\'est pas correct';
        }
    }else{
        $error['city'] = 'Entrer le nom de votre Ville';  
    }

    $mail = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL);
    if(!empty($mail)){
        //ici j'utilise une superglobal 'FILTER_VALIDATE_EMAIL qui me permet de vérifier si l'email correspond bien au format d'email.
        //Ce filter viens de la doc PHP
        if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
            $error['mail'] = 'L\'email n\'est pas valide';
        }
    }else{
        $error['mail'] = 'Entrer votre Email';  
    }

    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    if(!empty($phone)){
        if(!preg_match(REGEX_PHONE, $phone)){
            $error['phone'] = 'Le numéro de téléphone n\'est pas valide';
        }
    }else{
        $error['phone'] = 'Entrer votre numéro de téléphone';  
    }

    $degree = filter_input(INPUT_POST, 'degree', FILTER_SANITIZE_STRING);
    if(!empty($degree)){
        if(!preg_match(REGEX_NO_NUMBER, $degree) || !in_array($degree, $diplomes)){
            $error['degree'] = 'Le diplome selectionné n\'est pas valide';
        }
    }else{
        $error['degree'] = 'Choisissez votre niveau d\'études';  
    }

    $poleEmploi = filter_input(INPUT_POST, 'poleEmploi', FILTER_SANITIZE_STRING);
    if(!empty($poleEmploi)){
        if(!preg_match(REGEX_EMPLOI, $poleEmploi)){
            $error['poleEmploi'] = 'L\'identifiant de Pole Emploi n\'est pas valide';
        }
    }else{
        $error['poleEmploi'] = 'Entrer votre identifiant de Pole Emploi';  
    }

    $badge = filter_input(INPUT_POST, 'badge', FILTER_SANITIZE_NUMBER_INT);
    if(!empty($badge)){
        if(!preg_match(REGEX_NUMBER, $badge) || !in_array($badge, $badges)){
            $error['badge'] = 'Le nombre de badges selectionné n\'est pas valide';
        }
    }else{
        $error['badge'] = 'Choisissez le nombre de badge obtenus';  
    }

    $codecademy = filter_input(INPUT_POST, 'codecademy', FILTER_SANITIZE_URL);
    if(!empty($codecademy)){
        if(!filter_var($codecademy, FILTER_VALIDATE_URL)){
            $error['codecademy'] = 'Le lien n\'est pas valide';
        }
    }else{
        $error['codecademy'] = 'Entrer le lien Codecademy';  
    }

    $hero = filter_input(INPUT_POST, 'hero', FILTER_SANITIZE_STRING);
    if(empty($hero)){
        $error['hero'] = 'Entrer votre histoire de héro';  
    }
    $hack = filter_input(INPUT_POST, 'hack', FILTER_SANITIZE_STRING);
    if(empty($hack)){
        $error['hack'] = 'Entrer votre experience de hack';  
    }
    $experience = filter_input(INPUT_POST, 'experience', FILTER_SANITIZE_STRING);
    if(empty($experience)){
        $error['experience'] = 'Entrer votre experience dans le code';  
    }

    //Si mon tableau d'erreur est vide, je passe ma variable $verif à true, sinon je la passe à false.
    //Ce qui permet dans mon index d'afficher la page data ou la page form.
    if(empty($error)){
        $verif = true;
    }else{
        $verif = false;
    }

}
