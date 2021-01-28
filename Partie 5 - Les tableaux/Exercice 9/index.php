<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>PHP - Partie 5 - Exercice 9</title>
</head>

<body>
    <p>
        <?php
        $deps = [
            '02' => 'Aisne',
            '59' => 'Nord',
            '60' => 'Oise',
            '62' => 'Pas-de-Calais',
            '80' => 'Somme'
        ];
        foreach ($deps as $dep) { ?>
            <li><?php echo $dep ?></li>
        <?php
        }
        ?>
    </p>
</body>
<a href="http://rgyo-php/"><button type="button" name="button">Accueil</button></a>

</html>