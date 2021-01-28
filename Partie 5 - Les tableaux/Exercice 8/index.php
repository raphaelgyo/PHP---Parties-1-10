<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>PHP - Partie 5 - Exercice 8</title>
</head>

<body>
    <p>
        <?php
        $months = [
            'Janvier', 'Février', 'Mars',
            'Avril', 'Mai', 'Juin',
            'Juillet', 'Août', 'Septembre',
            'Octobre', 'Novembre', 'Décembre'
        ];
        foreach ($months as $month) { ?>
            <li><?php echo $month ?></li>
        <?php
        }
        ?>
    </p>
    <a href="http://rgyo-php/"><button type="button" name="button">Accueil</button></a>
</body>

</html>