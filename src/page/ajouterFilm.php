<?php

$title = 'Ajouter Film';

// Obtenir une clé ici: http://www.omdbapi.com/apikey.aspx
$ombdKey = '6d93f0c4';
$movieTitle = 'GhostBusters';

// Appel de l'api
$resultJson = file_get_contents("http://www.omdbapi.com/?apikey=$ombdKey&t=$movieTitle");
// transforme une chaîne content du JSON en tableau (le true en deuxième paramètre indique qu'on veut un tableau PHP)
$result = json_decode($resultJson, true);

var_dump($result);
ob_start();

// Possibilité de mettre $titre = "Ajouter ou Modifier un film"
$title = "Ajouter ou Modifier un film";
// Définir la variable 'id' par rapport aux id de la table film 
$id = ($_GET["id"]) ? ($_GET["id"]) : 0;
$movie = getOneMovie($id);
// Condition de validation du formulaire de changement en POST?
// Penser a afficher un message d'erreur ou de reussite
if (!empty($_POST)) {
    


}
$categories = getAllCategorys();

// ouveture de la session (ob_start)
ob_start();
?>

<h1>Ajouter ou Modifier un film</h1>

<!-- EMPLACEMENT FORMULAIRE  -->

<form action="" method="post" enctype="multipart/form-data">
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label for="name">Nom du film</label>
                <!-- CREER attribut value= "" -->
                <!-- INSERER VARIABLE PHP pour "nom du film" -->
                <input type="text" id="name" class="form-control" name="name" required>
            </div>

            <!-- Poster -->
            <div class="form-group">
                <div class="custom-file">
                    <label class="custom-file-label" for="photo" data-browse="Parcourir">Affiche du film</label>
                    <input type="file" class="custom-file-input" id="photo" name="photo">
                </div>
            </div>

            <div class="form-group">
                <label for="actors">Acteurs/Actrices</label>
                <!-- CREER attribut value= "" -->
                <!-- INSERER VARIABLE PHP pour "acteurs" -->
                <input type="text" id="actors" class="form-control" name="actors">
            </div>

            <div class="form-group">
                <label for="categorie">Catégorie</label>
                <!-- CREER attribut value= "" -->
                <!-- INSERER VARIABLE PHP pour "nom de la categorie" -->
                <select class="form-control" name="idCategory" id="Category">
                
            </div>
            <!-- Soit valider si l'entrée est dans la table, soit faire menu déroulant -->

            <div class="form-group">
                <label for="description">Synopsis/Description/Plot</label>
                <!-- CREER attribut value= "" -->
                <!-- Ajout entre balise textarea VARIABLE PHP pour "synopsis/plop" -->
                <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="file_path">Chemin vers le fichier</label>
                <input type="text" class="form-control" name="file_path" id="file_path">
            </div>

            <div class="form-group">
                <label for="device">Support</label>
                <input type="text" class="form-control" name="device" id="device">
            </div>
            <!-- PREVOIR DATE DE SORTIE -->
            <!-- PREVOIR SUPPORT -->

            
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-secondary" name="submit">Enregistrer</button>
            <button class="btn btn-success" type="submit" name="update">Modifier</button>
        </div>
    </div>
</form>

<?php
// Nettoyer le contenu (variable = ob_get_clean();)
$content = ob_get_clean();
// Require_once de template.php
require_once "../template.php";
?>