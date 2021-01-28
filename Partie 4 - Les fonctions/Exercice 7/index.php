<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>PHP - Partie 4 - Exercice 7</title>
</head>

<body>
    <p>
        <!-- checkbox -->
    <form method="post">
        <select name="check">
            <option value="homme">Homme</option>
            <option value="femme">Femme</option>
        </select>
        <input type="number" name="age" value="18">
        <input type="submit" name="button" value="Valider">
    </form>
    <?php
    $age = $_POST['age'];
    $gender = $_POST['check'];
    settype($age, 'integer');
    function genre($gender, $age)
    {
        if (isset($_POST['button'])) {
            if ($gender == 'homme' && $age < 18) {
                return 'Vous êtes un homme et vous êtes mineur';
            } elseif ($gender == 'homme' && $age >= 18) {
                return 'Vous êtes un homme et vous êtes majeur';
            } elseif ($gender == 'femme' && $age < 18) {
                return 'Vous êtes une femme et vous êtes mineur';
            } else {
                return 'Vous êtes une femme et vous êtes majeur';
            }
        }
    }
    echo genre($gender, $age);
    ?>
    </p>
    <a href="http://rgyo-php/"><button type="button" name="button">Accueil</button></a>
</body>

</html>