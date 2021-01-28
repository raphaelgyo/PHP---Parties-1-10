<?php
// Déclaration de la variable name
$name = 'Raphaël';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>PHP Partie 1 Exercice 6</title>
</head>

<body>
    <p>
        <!--ici on insère le PHP qui est lié à l'affichage-->
        <?php echo 'Bonjour' . ' ' . $name . ', comment vas-tu ?'; ?>
    </p>
</body>

</html>