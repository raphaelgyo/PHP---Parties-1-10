<?php
setlocale(LC_ALL, 'fra.utf8');
if (isset($_GET['month'], $_GET['year'])) {
    $month = $_GET['month'];

    if ($month < 1 || $month > 12) {
        header('Location: http://rgyo-php/Partie 8 - Les dates/TP/');
    }

    $year = $_GET['year'];

    if ($year < 1970 || $year > 9999) {
        header('Location: http://rgyo-php/Partie 8 - Les dates/TP/');
    }
} else {
    $month = date('m');
    $year = date('Y');
}
$all_days_in_a_month = [];
$first_day_of_the_month = date("N", strtotime($year . '/' . $month . '/' . '01'));
$numb_days_in_a_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);
$last_day_of_the_month = date("N", strtotime($year . '/' . $month . '/' . $numb_days_in_a_month));
for ($i = 0; $i < $first_day_of_the_month - 1; $i++) {
    array_push($all_days_in_a_month, null);
}

for ($i = 1; $i <= $numb_days_in_a_month; $i++) {
    array_push($all_days_in_a_month, $i);
}

for ($i = $last_day_of_the_month; $i < 7; $i++) {
    array_push($all_days_in_a_month, null);
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Liens CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <!-- CDNJs -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <!-- Animate -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Feuille de style CSS -->
    <link rel="stylesheet" href="../style.css" />

    <title>PHP : TP - Calendrier</title>

</head>

<body>
    <div class="container">
        <header class="site-header">
            <h1 class="mt-5 text-center animate__animated animate__heartBeat">"Calendrier de ces morts !"</h1>
            <p>Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et la deuxième permet d'avoir l'année.</p>
            <p>En fonction des choix, afficher un calendrier comme celui-ci :</p>
        </header>
        <main class="site-content">
            <div class="row justify-content-center animate__animated animate__zoomInDown">
                <div class="col-10 mt-3 bg-light rounded shadow px-5 text-center">

                    <form action="index.php" method="GET" style="width:25% ;" id="selectors" class="container d-flex justify-content-center my-3">
                        <select class="form-control mr-3" name="month" id="month">
                            <option value="1">Janvier</option>
                            <option value="2">Février</option>
                            <option value="3">Mars</option>
                            <option value="4">Avril</option>
                            <option value="5">Mai</option>
                            <option value="6">Juin</option>
                            <option value="7">Juillet</option>
                            <option value="8">Août</option>
                            <option value="9">Septembre</option>
                            <option value="10">Octobre</option>
                            <option value="11">Novembre</option>
                            <option value="12">Décembre</option>
                        </select>
                        <select class="form-control mx-auto" name="year" id="year">
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>
                        </select>

                        <input class="btn btn-outline-dark ml-3" type="submit" value="OK">
                    </form>
                    <h2 class="MAJ">
                        <?= strftime('%B', strtotime($month . '/01/1970')) . ' ' . $year ?>
                    </h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Lundi</th>
                                <th>Mardi</th>
                                <th>Mercredi</th>
                                <th>Jeudi</th>
                                <th>Vendredi</th>
                                <th>Samedi</th>
                                <th>Dimanche</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $k = 0;
                            for ($j = 0; $j < count($all_days_in_a_month) / 7; $j++) {
                                echo "<tr>";
                                for ($i = 0; $i < 7; $i++) {
                                    echo "<td>" . $all_days_in_a_month[$k] . "</td>";
                                    $k++;
                                }
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </main>
    </div>

    <footer class="site-footer fixed-bottom text-center pt-3">
        <p>
            &copy; 2020 -
            <?php echo date("Y"); ?>
            RG 2DW Prod. @La Manu
        </p>
    </footer>

    <!-- Scripts js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js " integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN " crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js " integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s " crossorigin="anonymous">
    </script>
</body>

</html>