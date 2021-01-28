<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>PHP - Partie 4 - Exercice 10</title>
</head>

<body>
    <p>
        <?php
        function factorielle($nbr)
        {
            if ($nbr === 0) { // condition d'arret
                return 1;
            }
            return $nbr * factorielle($nbr - 1);
        }
        echo 'le factoriel de ce nombre est : ' . factorielle(5);
        // Affiche 120
        ?>
    </p>
    <p>
        <?php
        function test($nb)
        {
            if ($nb > 0) {
                $nb--;
                echo "Vous avez appelé test($nb)\n";
                test($nb);
            }
        }
        test(5);
        ?>
    </p>
    <a href="http://rgyo-php/"><button type="button" name="button">Accueil</button></a>
</body>

</html>