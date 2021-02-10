<?php
define('REGEX_NO_NUMBER', "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/");
define('REGEX_POSTAL_CODE', "/^(([0-8][0-9])|(9[0-5]))[0-9]{3}$/");
define('REGEX_NUMBER', "/^[1-9]{2}$/");

define('BASE_URL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'].'/cookies');