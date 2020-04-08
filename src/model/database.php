<?php

// Connexion à la base de données 
$pdo = new PDO('mysql:host=localhost;dbname=wf3_croisiere', 'root', 'root', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
/*
Effacer la ligne ci-dessus ET 'activer' celle de dessous POUR LES UTILISATEUR WINDOWS
$pdo = new PDO('mysql:host=localhost;dbname=wf3_croisiere', 'root', 'root', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
*/
$pdo->exec('SET CHARACTER SET utf8');

// Place pour les page PHP requises pour les codes dont nous auront besoin
// require_once 'LIEN.php'
