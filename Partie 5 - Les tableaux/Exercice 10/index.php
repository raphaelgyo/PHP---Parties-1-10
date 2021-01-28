<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>PHP - Partie 5 - Exercice 10</title>
</head>

<body>
    <?php
    $deps = [
        '02' => 'Aisne',
        '59' => 'Nord',
        '60' => 'Oise',
        '62' => 'Pas-de-Calais',
        '80' => 'Somme'
    ];
    foreach ($deps as $key => $dep) { ?>
        <li><?php echo 'Le département' . ' ' . $dep . ' ' . 'a le numéro' . ' ' . $key ?></li>
    <?php
    }
    ?>
    <a href="http://rgyo-php/"><button type="button" name="button">Accueil</button></a>
</body>

</html>