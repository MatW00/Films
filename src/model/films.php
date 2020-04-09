<?php

function getAllMovies()
{
    global $pdo;
    $request = $pdo->query("SELECT * FROM movie");
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


// Ajoute un film à notre BDD
function addMovie($title, $poster, $actors, $plot, $files, $device, $idCategory)
{
    global $pdo;
    // INSERT INTO movie (mov_title, mov_poster, mov_actors, mov_plot, mov_file_path, mov_device, category_cat_id) VALUES (:title, :poster, :actors, :plot, :file, :device, :id_category)
    $request = $pdo->prepare('INSERT INTO movie (mov_title, mov_poster, mov_actors, mov_plot, mov_file_path, mov_device, category_cat_id) 
    VALUES (:title, :poster, :actors, :plot, :file_path, :device, :id_category)');
    $request->bindValue(":title", $title);
    $request->bindValue(":poster", $poster);
    $request->bindValue(":actors", $actors);
    $request->bindValue(":plot", $plot);
    $request->bindValue(":file_path", $files);
    $request->bindValue(":device", $device);
    $request->bindValue(":id_category", $idCategory);

    return $request->execute();
}

// Met à jour un film à modifier.
function editMovie($title, $poster, $actors, $plot, $file_path, $device, $id_category, $id)
{
    global $pdo;
    // UPDATE movie SET mov_title = :title, mov_poster = :poster, mov_actors = :actors, mov_plot = :plot, mov_file_path = :file_path, mov_device = :device, category_cat_id = :id_category WHERE id = :id
    $request = $pdo->prepare("UPDATE movie 
    SET mov_title = :title, mov_poster = :poster, mov_actors = :actors, mov_plot = :plot, mov_file_path = :file_path, mov_device = :device, category_cat_id = :id_category 
    WHERE id = :id");
    $request->bindValue(":title", $title);
    $request->bindValue(":poster", $poster);
    $request->bindValue(":actors", $actors);
    $request->bindValue(":plot", $plot);
    $request->bindValue(":file_path", $file_path);
    $request->bindValue(":device", $device);
    $request->bindValue(":id_category", $id_category);
    $request->bindValue(":id", $id, PDO::PARAM_INT);

    return $request->execute();
}


/**
 * Ajoute ou modifie un film
 */

function saveFilm($id = 0, $title, $poster = [], $actors, $plot, $file_path, $device, $idCategory, $oldPoster = null)
{
    // Ajout ou remplacement du poster via $_FILES
    $posterLink = $oldPoster;
    if ($_FILES['error']["name"] == UPLOAD_ERR_OK) {
        // Met lien pour enregistrer dans la BDD
        $posterLink = "/uploads" . uniqid() . $_FILES["photo"]["name"];
    }
    // var_dump($_FILES);

    global $pdo;

    if ($id == 0) { // Ajoute un film
        $request = $pdo->prepare('INSERT INTO movie (mov_title, mov_poster, mov_actors, mov_plot, mov_file_path, mov_device, category_cat_id) 
    VALUES (:title, :poster, :actors, :plot, :file_path, :device, :id_category)');
    } else { // Modifie un film
        $request = $pdo->prepare("UPDATE movie 
            SET mov_title = :title, mov_poster = :poster, mov_actors = :actors, mov_plot = :plot, mov_file_path = :file_path, mov_device = :device, category_cat_id = :id_category 
            WHERE id = :id");

        $request->bindValue(":id", $id, PDO::PARAM_INT);
    }

    // on est sure que $request contient une requête avec les paramètres suivants
    $request->bindValue(":title", $title);
    $request->bindValue(":poster", $poster);
    $request->bindValue(":actors", $actors);
    $request->bindValue(":plot", $plot);
    $request->bindValue(":file_path", $file_path);
    $request->bindValue(":device", $device);
    $request->bindValue(":id_category", $idCategory);

    // on execute pour savoir si la requete s'est bien passé ou pas apres destination edit
    if ($request->execute()) { // La requête n'a pas d'erreur


        // ensuite sur destinations dans page admin
        // ($posterLink != $oldPoster)

        if ($posterLink != $oldPoster) { //Si la variable $posterLink n'est pas vide => il y a une photo

            // si l'ancienne photo existe
            if (file_exists($oldPoster)) {
                unlink($oldPoster); // Supprime l'ancienne photo

                // Si déplace le fichier temporaire dans le lien généré "uploads/nom_du_fichier"
                move_uploaded_file($_FILES['photo']['tmp_name'], $posterLink);
                // copy();
            }

            return ['type' => 'success', 'message' => 'La destination a bien été enregistrée'];
        }

        var_dump($request->errorInfo());

        return ['type' => 'success', 'message' => 'La destination a bien été enregistrée'];
    }
}
