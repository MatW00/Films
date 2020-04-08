<?php

$title = 'Ajouter Film';

// Obtenir une clé ici: http://www.omdbapi.com/apikey.aspx
$ombdKey = '6d93f0c4';
$movieTitle = 'GhostBusters';

// Appel de l'api
$resultJson = file_get_contents("http://www.omdbapi.com/?apikey=$ombdKey&t=$movieTitle");
// transforme une chaîne content du JSON en tableau (le true en deuxième paramètre indique qu'on veut un tableau PHP)
$result = json_decode($resultJson, true);

var_dump($result);
ob_start();

?>











<?php $content = ob_get_clean(); //Stocke tout le code HTML dans la variable $content ?>

<?php require('../template.php'); ?>