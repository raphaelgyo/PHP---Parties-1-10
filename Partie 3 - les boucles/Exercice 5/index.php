<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>PHP - Partie 3 - Exercice 5</title>
</head>

<body>
    <p>En allant de 1 à 15 avec un pas de 1, afficher le message "On y arrive presque".</p>
    <!-- on initialise la valeur à 1
    on boucle avec while tant que $number est en dessous de 15 -->
    <?php
    $number = 1;
    while ($number < 15) { ?>
        <p><?php echo $number . ' On y arrive presque.' ?></p>
    <?php
        $number++;
    }
    if ($number == 15) { ?>
    <?php echo $number . ' On y est';
    }
    ?>
    <a href="http://rgyo-php/PHP/Partie 3 - les boucles/"><button type="button" name="button">Accueil</button></a>
</body>

</html>