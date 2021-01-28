<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>PHP - Partie 3 - Exercice 1</title>
</head>

<body>
    <p>Créer une variable et l'initialiser à 0.<br>
        Tant que cette variable n'atteint pas 10, il faut :</p>
    <ul>
        <li>l'afficher</li>
        <li>l'incrémenter</li>
    </ul>
    <!-- on définit la variable number à zéro,
    on utilise while pour faire une boucle,
    on dit que la boucle doit continuer tant que $number n'arrive pas a 10,
    et $number++ sert a incrémenter de 1 -->
    <?php
    $number = 0;
    while ($number <= 10) { ?>
        <p> <?php echo $number++ ?> </p>
    <?php
    } ?>
    <!-- for ($i = 0; $i <= 10; $i++){
      echo '<p>' . $i . '</p>';
    } -->
    <a href="http://rgyo-php/"><button type="button" name="button">Accueil</button></a>
</body>

</html>