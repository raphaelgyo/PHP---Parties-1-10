<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>PHP - Partie 4 - Exercice 6</title>
</head>

<body>
    <p>
        <?php
        function jesuisvieux($name = 'Raphaël', $lastName = 'Granizo y Oliver', $age = 42)
        {
            return 'Bonjour ' . $name . ' ' . $lastName . ', tu as ' . $age . ' ans';
        }
        echo jesuisvieux();
        ?>
    </p>
    <a href="http://rgyo-php/"><button type="button" name="button">Accueil</button></a>
</body>

</html>