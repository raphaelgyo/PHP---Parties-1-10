<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>PHP - Partie 3 - Exercice 10</title>
</head>

<body>
    <?php
    $altnumber = rand(0, 30)
    ?>
    <p>
        <?php
        for ($nombre_de_lignes = 1; $nombre_de_lignes <= 100; $nombre_de_lignes++) {
            if ($nombre_de_lignes != $altnumber) {
                echo $nombre_de_lignes . '<br />';
            }
        }
        echo 'le nombre aléatoire est : ' . $altnumber;
        ?>
    </p>
    <a href="http://rgyo-php/PHP/Partie 3 - les boucles/"><button type="button" name="button">Accueil</button></a>
</body>

</html>