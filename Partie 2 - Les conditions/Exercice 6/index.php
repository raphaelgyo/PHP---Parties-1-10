<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Part 2 exercice 6</title>
</head>

<body>
    <?php
    $var_a = null;
    echo $var_a ?: 'Je suis une variable sans valeur';
    ?>
    <?php
    $var_a = null;
    if ($var_a == null) {
        echo 'Je suis une variable sans valeur';
    } else {
        echo  'Je suis une variable avec une valeur';
    }
    ?>
</body>

</html>