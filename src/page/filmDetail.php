<?php

$title = "Detail du film";

$id = $_GET['id'];
$oneFilm = getOneMovie($id);

ob_start();

?>
<div class="container">
    <div class="row">
        <div class="col-3 pt-3">
            <div class="d-flex flex-column">
            <!-- <img src="<?= $oneFilm['mov_poster']; ?>" class="card-img" alt="<?= 'Affiche de ' . $oneFilm['mov_title']; ?>"> -->
                <p>Support : PC</p>
            </div>
        </div>
        <div class="col-9">
            <h1><a href="<?= $oneFilm['mov_file_path'] ?>"><?= $oneFilm['mov_title'] ?></a></h1>
            <p><?= $oneFilm['cat_name'] ?></p>

            <p>Résumé : <?= $oneFilm['mov_plot'] ?></p>

            <p>Acteur et Actrices : <?= $oneFilm['mov_actors'] ?></p>


            <a href="<?= $oneFilm['mov_file_path'] ?>">Lien vers fichier sur l'ordi</a>
        </div>
    </div>
</div>


<?php $content = ob_get_clean(); //Stocke tout le code HTML dans la variable $content 
?>

<?php require('../template.php'); ?>