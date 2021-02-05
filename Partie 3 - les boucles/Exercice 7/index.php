<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>PHP - Partie 3 - Exercice 7</title>
</head>

<body>
    <?php
    $number = 1;
    while ($number < 100) { ?>
        <p><?php echo $number . ' On tient le bon bout' ?></p>
    <?php
        $number += 15;
    }
    ?>
    <a href="http://rgyo-php/PHP/Partie 3 - les boucles/"><button type="button" name="button">Accueil</button></a>
</body>

</html>