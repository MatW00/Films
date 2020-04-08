<?php

// Connexion à la base de données 
$pdo = new PDO('mysql:host=localhost;dbname=manage_movies', 'root', '', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
/*
Effacer la ligne ci-dessus ET 'activer' celle de dessous POUR LES UTILISATEUR WINDOWS
$pdo = new PDO('mysql:host=localhost;dbname=wf3_croisiere', 'root', '', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
*/
$pdo->exec('SET CHARACTER SET utf8');

// Place pour les page PHP requises pour les codes dont nous auront besoin
// require_once 'LIEN.php'

// 2- on inclus le nouveau fichier catalogue.php ensuite on va aller chercher la variable pdo dans catalogue.php
require_once 'category.php';//reviens à copier/coller le code de catalogue.php
