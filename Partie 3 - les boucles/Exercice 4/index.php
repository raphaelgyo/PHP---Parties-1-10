<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>PHP - Partie 3 - Exercice 4</title>
</head>

<body>
    <p>Créer une variable et l'initialiser à 1.<br>
        Tant que cette variable n'atteint pas 10, il faut :</p>
    <ul>
        <li>l'afficher</li>
        <li>l'incrementer de la moitié de sa valeur</li>
    </ul>
    <!-- on initialise la valeur a 1,
        on boucle avec while, tant que $number n'arrive pas à 10 la boucle continue,
        on incrémente avec *=1.5 pour l'incrementer de la moitié de sa valeur. -->
    <?php
    $number = 1;
    while ($number <= 10) { ?>
        <?php $number *= 1.5 ?>
        <p> <?php echo $number ?></p>
    <?php
    }
    ?>
    <a href="http://rgyo-php/"><button type="button" name="button">Accueil</button></a>
</body>

</html>