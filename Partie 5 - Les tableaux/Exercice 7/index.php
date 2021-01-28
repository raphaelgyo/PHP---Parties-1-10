<?php
$departments = [
    '02' => 'Aisne',
    '59' => 'Nord',
    '60' => 'Oise',
    '62' => 'Pas-de-calais',
    '80' => 'Somme'
];
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>PHP - Partie 5 - Exercice 7</title>
</head>

<body>
    <p>
        <?php
        $departments["51"] = "Marne";
        foreach ($departments as $department) { ?>
            <li><?php echo $department ?></li>
        <?php
        }
        ?>
    </p>
    <a href="http://rgyo-php/"><button type="button" name="button">Accueil</button></a>
</body>

</html>