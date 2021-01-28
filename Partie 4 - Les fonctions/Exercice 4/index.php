<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>PHP - Partie 4 - Exercice 4</title>
</head>

<body>
    <p>
        <?php
        $numb1 = rand(1, 10);
        $numb2 = rand(1, 10);
        settype($numb1, 'integer');
        settype($numb2, 'integer');
        function number($numb1, $numb2)
        {
            switch (true) {
                case $numb1 < $numb2:
                    return 'Le premier nombre est plus petit ';
                    break;
                case $numb1 > $numb2:
                    return 'Le premier nombre est plus grand';
                    break;
                case $numb1 == $numb2:
                    return 'Les deux nombres sont identiques';
                    break;
            }
        }
        echo number($numb1, $numb2);
        ?>
    </p>
    <a href="http://rgyo-php/"><button type="button" name="button">Accueil</button></a>
</body>

</html>