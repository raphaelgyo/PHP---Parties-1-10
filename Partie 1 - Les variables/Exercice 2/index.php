<!--ici on insère le PHP qui n'est pas lié à l'affichage-->
<?php
// Déclaration de la variable lastname
$lastname = 'Doe';
// Déclaration de la variable firstname
$firstname = 'John';
// Déclaration de la variable age
$age = 27;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>PHP Partie 1 Exercice 2</title>
</head>

<body>
    <p>
        <!--ici on insère le PHP qui est lié à l'affichage-->
        <?php
        echo $lastname;
        echo $firstname;
        echo $age;
        ?>
    </p>
    <p>
        <!--le point . conrrespond à la concaténation + de JS-->
        <?php
        echo $lastname . ' ' . $firstname . ' ' . $age;
        ?>
    </p>
    <p>
        <?= $lastname . ' ' . $firstname . ' ' . $age; ?>
    </p>
    <p>
        Nom : <?= $lastname; ?>
    </p>
    <p>
        Prénom : <?= $firstname; ?>
    </p>
    <p>
        Âge : <?= $age; ?> ans
    </p>
    <a href="http://rgyo-php/"><button type="button" name="button">Accueil</button></a>

</body>

</html>