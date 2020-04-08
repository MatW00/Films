<?php

$title = 'Ajouter Film';

// Condition de validation du formulaire recherche
if (isset($_POST['recherche'])) {
    $result = rechercheFilms($_POST['recherche']);
    // var_dump($result);
}

ob_start();

?>

<!-- Possibilité faire reapparaitre le formulaire recherche (plus facile d'acces pour l'utilisateur) -->
<!-- Utiliser une boucle foreach avec la variable $result pour faire apparaitre les films -->


<?php
$content = ob_get_clean(); //Stocke tout le code HTML dans la variable $content

require('../template.php'); ?>