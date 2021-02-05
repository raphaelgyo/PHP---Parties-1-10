<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>PHP - Partie 3 - Exercice 6</title>
</head>

<body>
    <?php
    $number = 20;
    while ($number > 0) { ?>
        <p> <?php echo $number . ' C\'est presque bon' ?></p>
    <?php
        $number--;
    }
    if ($number == 0) {
        echo $number . 'C\'est bon';
    }
    ?>
    <a href="http://rgyo-php/PHP/Partie 3 - les boucles/"><button type="button" name="button">Accueil</button></a>
</body>

</html>