<?php
// define('BASE_URL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/Partie 10 - TP/TP2 - version MVC');

// Déclaration des RegEx
define('R_STR_NO_NUMBER', "/^[a-zA-Z ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ-]{2,}$/");

define('R_BIRTHDAY', "/^\d{4}(-)(((0)[0-9])|((1)[0-2]))(-)([0-2][0-9]|(3)[0-1])$/");

define('R_PHONE', "/^((\+)33|0)[1-9](\d{2}){4}$/");

define('R_ZIP', "/^([0-9][0-5][0-9]{3})|(9[7-8][2-578][0-9]{2})$/");

define('R_POLE', "/^[0-9]{7}[A-Z]$/");

define('R_STREET', "/^[a-zA-Z0-9\-\s]{2,}$/");

define('R_NUMBER', "/^[0-9]{1,3}$/");

define('R_TYPE', "/^[a-z]{2,4}$/");

define('R_URL', "/^(http(s)?://)?([\w-])+.{1}([a-zA-Z]{2,63})([/\w-])/???([^#\n\r])?#?([^\n\r])$/");

define('R_DIPLOME', "/^[a-z]{4}|[A-Z]{3}|[A-Z]{3}[+][0-9]|[>=]{2}[A-Z]{3}[+][0-9]$/");
// define('R_DIPLOME', "/^(sans|BAC|BAC\+2|BAC\+3)|>=BAC\+4$/");
