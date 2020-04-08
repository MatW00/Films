<?php
// 2- on lie le fichier destination dans database.php



// 3- retourne toutes les films variable glogbale $pdo
// donc on a acces à toutes les films de database.php
function getAllCategorys()
{
    global $pdo;
    //3- requête donc SELECT * FROM destination ODER BY name
    // requête sans variable donc on utilise $pdo->query
    $request = $pdo->query('SELECT * FROM category ORDER BY cat_name');

    // et on retourne tout les resultats ensuite on retourne dans acceuil
    return $request->fetchAll(); 

}