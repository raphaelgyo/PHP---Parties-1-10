<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>PHP - Partie 3 - Exercice 8</title>
</head>

<body>
    <?php
    // à corriger
    $number = 1;
    while ($number < 100) { ?>
        <p>
            <?php
            if ($number % 3 == 0) {
            } else {
                echo $number;
            }
            ?>
        </p>
    <?php
        $number += 1;
    }
    ?>
    <a href="http://rgyo-php/"><button type="button" name="button">Accueil</button></a>
</body>

</html>