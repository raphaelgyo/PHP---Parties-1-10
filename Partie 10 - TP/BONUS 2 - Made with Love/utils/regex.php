<?php
// Ici j'utilise la fonction define() qui me permet de nommer des superGlobales que j'utilise ensuite dans mon controller (ici je leur passe les regexs).
define('REGEX_NO_NUMBER', "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/");
define('REGEX_DATE', "/^(19|20[0-9]{2})[-\/.](0[1-9]|1[012])[-\/.](0[1-9]|[12][0-9]|3[01])$/");
define('REGEX_ZIPCODE', "/^(([0-8][0-9])|(9[0-5]))[0-9]{3}$/");
define('REGEX_NUMBER', "/^[1-9]{1}$/");

// Ici je définie une superGLobale que j'appelle BASE_URL qui j'utilise pour ensuite appeler mon css / script dans le header/footer
define('BASE_URL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/PHP/Partie 10 - TP/BONUS 2 - Made with Love/');
