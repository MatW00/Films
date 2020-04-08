<?php

/**
 * Retourne toutes les catégories
 */
function getCategories()
{

    global $pdo;

    $request = $pdo->query('SELECT * FROM category ORDER BY cat_name');

    echo 'test';
    return $request->fetchAll();
}
