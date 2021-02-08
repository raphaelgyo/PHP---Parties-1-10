<?php
// faire un tableau
// chemin d'accès au fichier JSON
$file = 'lovers.json';
// On met le contenu du fichier dans une variable
$data = file_get_contents($file);
// On décode le JSON sous forme de tableau
$tab_lovers = json_decode($data, true);
