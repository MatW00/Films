<?php 

function getAllMovies()
{
    global $pdo;
    $request = $pdo->query("SELECT * FROM movie ORDER BY categories");
    $request->execute();

    return $request->fetchAll();
}

/**
 * Recherche un film
*/

function getOneMovie($id)
{
    global $pdo;
    $request = $pdo->prepare("SELECT m.mov_title, m.mov_actors, m.mov_plot, m.mov_file_path, c.cat_name 
    FROM movie AS m
    INNER JOIN category AS c
    ON c.cat_id = m.category_cat_id
    WHERE mov_id = :id");
    $request->bindValue(":id", $id, PDO::PARAM_INT); // la fonction va tester si $id est bien un entier
    $request->execute(); // execute la requête préparé

    return $request->fetch(); // Retourne le film trouvé sous forme de tableau PHP

    var_dump($request->errorInfo());
}

?>