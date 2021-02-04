<?php

include('controllers/index_controller.php');

if (isset($_COOKIE['firstname'])) {
    include('templates/header.php');
    include('views/lovers.php');
    include('templates/footer.php');
} else {
    include('templates/header.php');
    include('views/form.php');
    include('templates/footer.php');
}
