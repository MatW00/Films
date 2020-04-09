<?php

$title = 'Rechercher un film';

// Condition de validation du formulaire recherche
if (!isset($_POST['recherche'])) {
    $result = rechercheFilms($_POST['recherche']);
    // var_dump($result);
}

ob_start();

?>

<!-- Possibilité faire reapparaitre le formulaire recherche (plus facile d'acces pour l'utilisateur) -->
<!-- Utiliser une boucle foreach avec la variable $result pour faire apparaitre les films -->
<h1>Résultat de la recherche</h1>

<?php foreach ($result as $resul) : ?>
    <div class="card mb-1">

        <div class="row no-gutters">
            <div class="col-md-2">
            <img src="<?= $resul['mov_poster']; ?>" class="card-img" alt="<?= 'Affiche de ' . $resul['mov_title']; ?>">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $resul['mov_title']; ?></h5>
                    <p class="card-text"><?= $resul['mov_actors']; ?></p>
                    <p class="card-text"><?= $resul['mov_plot']; ?></p>
                </div>
            </div>
            <div class="col-md-2 mt-2">
                <p><button type="button" class="btn btn-primary btn-lg ml-3 ">Details</button> </p>
                <p><button type="button" class="btn btn-primary btn-lg ml-3 ">Modifier</button> </p>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?php
$content = ob_get_clean(); //Stocke tout le code HTML dans la variable $content

require('../template.php'); ?>