<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>PHP Partie 2 Exercice 5 : Les conditions</title>
</head>

<body>
    <p>
        <?php
        echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
        ?>
    </p>
    <p>
        <?php
        $gender = 'Homme';
        if ($gender != 'Homme') {
            echo 'C\'est une développeuse !!!';
        } else {
            echo 'C\est un développeur !!!';
        }
        ?>
    </p>
</body>

</html>