<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>PHP Partie 2 Exercice 8 : les conditions</title>
</head>

<body>

    <?php
    $number = 11;
    echo ($number % 5 == 0 && $number % 3 == 0)
        ? 'FizzBuzz'
        : ($number % 3 == 0
            ? 'Fizz'
            : ($number % 5 == 0 ? 'Buzz' : $number));
    ?>
    <?php
    $number = 15;
    if ($number % 5 == 0 && $number % 3 == 0) {
        echo 'FizzBuzz';
    } elseif ($number % 3 == 0 && $number % 5 != 0) {
        echo 'Fizz';
    } elseif ($number % 5 == 0 && $number % 3 != 0) {
        echo 'Buzz';
    } else {
        echo $number;
    }
    ?>
</body>

</html>