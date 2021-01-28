<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>PHP - Partie 4 - Exercice 5</title>
</head>

<body>
    <p>
        <?php
        function impatient($var1 = 'Breath of the Wild', $var2 = 2)
        {
            return $var1 . ' ' . $var2;
        };
        echo impatient();
        ?>
    </p>
    <a href="http://rgyo-php/"><button type="button" name="button">Accueil</button></a>
</body>

</html>