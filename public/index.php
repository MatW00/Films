<?php
require_once('./../src/common.php');

//test si p existe
// On récupére la valeur GET "p" qui se trouve dans le lien
$page = $_GET['p'] ?? "accueil";

//sécurité:empêche de charger n'importe quel fichier donc on fait $page =  à chaque fois que je trouve un "/" je remplace par rien
//$page = str_replace('/', '', $page);

//Les expressions régulière permettent de tester le format d'une chaîne
//Test si $page contient d'autres caractère que des lettres en miniscule et majuscule

if (!preg_match('/^[a-zA-Z_]*$/', $page)) {
    $page = 'accueil';
}

require_once "./../src/page/$page.php"; // Charge la page

require_once '../template.php';
