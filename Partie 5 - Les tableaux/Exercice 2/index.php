<?php
$months = array();
$months[0] = 'Janvier';
$months[1] = 'Février';
$months[2] = 'Mars';
$months[3] = 'Avril';
$months[4] = 'Mai';
$months[5] = 'Juin';
$months[6] = 'Juillet';
$months[7] = 'Août';
$months[8] = 'Septembre';
$months[9] = 'Octobre';
$months[10] = 'Novembre';
$months[11] = 'Décembre';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>PHP - Partie 5 - Exercice 2</title>
</head>

<body>
    <p>
        <?php
        //on affiche la valeur de la troisième ligne (index 2)
        echo $months[2];
        ?>
    </p>
    <a href="http://rgyo-php/"><button type="button" name="button">Accueil</button></a>
</body>

</html>