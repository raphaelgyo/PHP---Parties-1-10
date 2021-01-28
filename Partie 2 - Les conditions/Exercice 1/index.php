<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>PHP Partie 2 - Exercice 1 : Les conditions</title>
</head>

<body>
    <p>
        <?php
        $age = 20;
        if ($age >= 18) {
            echo 'Vous êtes majeur';
        } else {
            echo 'Vous êtes mineur';
        }
        ?>
    </p>
    <p>
        <?php
        echo ($age >= 18) ? 'Tu es majeur' : 'Tu es mineur';
        ?>
    </p>
</body>

</html>