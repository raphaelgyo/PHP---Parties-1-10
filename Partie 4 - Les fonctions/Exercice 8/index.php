<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>PHP - Partie 4 - Exercice 8</title>
</head>

<body>
    <p>
        <?php
        function somme($numb1 = 1, $numb2 = 2, $numb3 = 3) // ou function somme(...$nbr)
        {
            return $numb1 + $numb2 + $numb3;
        }
        echo somme();
        ?>
    </p>
    <a href="http://rgyo-php/"><button type="button" name="button">Accueil</button></a>
</body>

</html>