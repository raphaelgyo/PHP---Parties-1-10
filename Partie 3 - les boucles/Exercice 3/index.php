<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>PHP - Partie 3 - Exercice 3</title>
</head>

<body>
    <p>Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris entre 1 et 100.<br>
        Tant que la première variable n'est pas inférieure ou égale à 10 :</p>
    <ul>
        <li>multiplier la première variable avec la deuxième</li>
        <li>afficher le résultat</li>
        <li>décrémenter la première variable</li>
    </ul>
    <!-- on initialise les variables,
    on met le settype sur $number1 pour qu'il ne soit que de type integer,
    on boucle avec while pour que la boucle s'arrete quand $number1 arrive à 10,
    et on décrémente $number1 -->
    <?php
    $number1 = 100.5;
    $number2 = rand(1, 100);
    settype($number1, 'integer');
    while ($number1 >= 10) { ?>
        <p><?php echo $number1 * $number2 . '->' . $number1 ?></p>
    <?php $number1--;
    }
    ?>
    <a href="http://rgyo-php/PHP/Partie 3 - les boucles/"><button type="button" name="button">Accueil</button></a>
</body>

</html>