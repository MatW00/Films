<?php
// Possibilité de mettre $titre = "Ajouter ou Modifier une catégorie"

// Définir la variable 'id' par rapport aux id de la table categories 

// Condition de validation du formulaire de changement en POST?
// Penser a afficher un message d'erreur ou de reussite

// ouveture de la session (ob_start)
?>

<h1>Ajouter ou Modifier une catégorie</h1>

<!-- EMPLACEMENT Menu déroulant (boucle pour avoir les categorie?)  -->

<!-- EMPLACEMENT FORMULAIRE  -->

<form action="" method="post">
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label for="name">Catégorie</label>
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
// Nettoyer le contenu (variable = ob_get_clean();)

// Require_once de template.php
?>