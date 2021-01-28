<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>PHP Partie 2 Exercice 2 : Les conditions</title>
</head>

<body>
    <p>
        <?php
        $isEasy = true;
        if ($isEasy == true) {
            echo "C'est facile !!";
        } else {
            echo "C'est difficile !!";
        };
        ?>
    </p>
    <p>
        <?php
        $isEasy = (bool) true;
        if (!$isEasy) {
            echo "C'est EZ !!";
        } else {
            echo "It's difficult !!";
        };
        ?>
    </p>
</body>

</html>