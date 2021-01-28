<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>PHP - Partie 4 - Exercice 3</title>
</head>

<body>
    <p>
        <?php
        function akumajo($var1 = 'Vampire', $var2 = 'Killer')
        {
            return $var1 . ' ' . $var2;
        };
        echo akumajo();
        ?>
    </p>
    <a href="http://rgyo-php/"><button type="button" name="button">Accueil</button></a>
</body>

</html>