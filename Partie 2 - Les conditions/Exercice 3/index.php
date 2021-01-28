<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>PHP Partie 2 Exercice 2 : Les conditions</title>
</head>

<body>
    <p>
        <?php
        $age = 17;
        $gender = 'homme';
        if ($age >= 18 and $gender == 'homme') {
            echo 'Vous êtes un homme et vous êtes majeur';
        } elseif ($age < 18 and $gender == 'homme') {
            echo 'Vous êtes un homme et vous êtes mineur';
        }
        if ($age >= 18 and $gender == 'femme') {
            echo 'Vous êtes une femme et vous êtes majeur';
        } elseif ($age < 18 and $gender == 'femme') {
            echo 'Vous êtes une femme et vous êtes mineur';
        }
        ?>
    </p>
</body>

</html>