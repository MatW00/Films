<?php

$title = 'Accueil';



ob_start();

?>

<div class="container">
    <p class="mt-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia laborum est sit minus libero laudantium excepturi nesciunt sunt possimus earum? Ab dicta velit, officia provident corporis ducimus fugit. Temporibus, nostrum.</p>
    <form action="index.php" method="GET">
    <div class="input-group py-5 mb-3">
        <input type="text" class="form-control py-5 font-weight-bold" aria-describedby="button-addon2">
    <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Recherche</button>
    </div>
    </form>

    
    <div class="d-flex justify-content-center mb-4">
        <a class="px-3" href="">Science-Fiction</a>
        <a class="px-3" href="">Comédie</a>
        <a class="px-3" href="">Aventure</a>
        <a class="px-3" href="">Thriller</a>
    </div>

    <div class="d-flex justify-content-around">
        <p>Affiche film</p>
        <p>Affiche film</p>
        <p>Affiche film</p>
        <p>Affiche film</p>
    </div>
    <div class="d-flex justify-content-around">
        <a href="">Titre</a>
        <a href="">Titre</a>
        <a href="">Titre</a>
        <a href="">Titre</a>
    </div>




</div>
<?php $content = ob_get_clean(); //Stocke tout le code HTML dans la variable $content ?>

<?php require('../template.php'); ?>