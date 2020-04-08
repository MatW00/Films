<?php
// Placer un require pour avoir acces a la database pour lancer fontion
require_once '../../model/database.php';

$title = 'Ajouter ou Modifier une catégorie';

// Définir la variable 'id' par rapport aux id de la table categories 

// Condition de validation du formulaire de changement en POST?
// Penser a afficher un message d'erreur ou de reussite
$categories = getAllCategorys();

?>

<h1><?= $title; ?></h1>

<!-- EMPLACEMENT Menu déroulant (boucle pour avoir les categorie?)  -->

<!-- EMPLACEMENT FORMULAIRE  -->

<form action="" method="post">
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <select name="category" class="form-control">
                    <option value="0">--Catégorie--</option>
                    <!-- Options affichées sur la boucle -->
                    <?php foreach ($categories as $category) : ?>
                        <option value="<?= $category['cat_id']; ?>"><?= $category['cat_name']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="name">Modifier nom de la catégorie</label>
                <!-- CREER attribut value= "" -->
                <!-- INSERER VARIABLE PHP pour "nom de la categorie" -->
                <input type="text" id="name" class="form-control" name="name" required>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-secondary">Enregistrer</button>
            </div>
        </div>
</form>

<?php

?>