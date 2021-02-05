<?php
include('utils/regex.php');
include('controller/controller.php');
include('templates/header.php');

if ($verif == true) {
    include('view/data.php');
} else {
    include('view/form.php');
}
include('templates/footer.php');
