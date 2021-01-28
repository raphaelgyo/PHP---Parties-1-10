<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>PHP - Partie 4 - Exercice 9</title>
</head>

<body>
    <p>
        <?php
        function compare($numb1 = 1, $numb2 = 2)
        {
            if ($numb1 <= $numb2) {
                return $numb2;
            } else {
                return $numb1;
            }
        }
        echo compare();
        ?>
    </p>
    <a href="http://rgyo-php/"><button type="button" name="button">Accueil</button></a>
</body>

</html>