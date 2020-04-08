<?php

/**
 * recherche de films
 */
function rechercheFilms($title)
{
    global $pdo;
    $request = $pdo->prepare("SELECT * FROM movie WHERE mov_title LIKE :title ");
    $request->execute([':title' => $title . '%']);
    return $request->fetchAll();
}
