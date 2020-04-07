<?php

$title = 'Accueil';



ob_start();

?>
<div class="container">
    <p class="mt-5 text-center my-4 py-4 font-weight-bold">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia laborum est sit minus libero laudantium excepturi nesciunt sunt possimus earum? Ab dicta velit, officia provident corporis ducimus fugit. Temporibus, nostrum. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio repellat voluptatum assumenda dicta, vel dolores in minus, id harum dolor eaque doloremque. Eligendi dignissimos dolor ad eveniet libero hic enim! Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, molestias voluptate earum quas aspernatur nisi eaque iure, error numquam illo consectetur ut, nobis sit rerum repudiandae dignissimos quia eius tempore?</p>
    <form class="form-inline my-4 py-4" action="" method="GET">
        <div class="form-group w-75 mx-sm-3 mb-2">
            <input type="text" class="form-control form-control-lg w-100" id="search" placeholder="Recherche">
        </div>
        <button type="submit" class="btn btn-primary btn-lg mb-2">Recherche</button>
    </form>

    
    <div class="d-flex justify-content-center my-4 py-4">
        <a class="px-3" href="">Science-Fiction (nombre)</a>
        <a class="px-3" href="">Comédie (nombre)</a>
        <a class="px-3" href="">Aventure (nombre)</a>
        <a class="px-3" href="">Thriller (nombre)</a>
    </div>

    <div class="d-flex justify-content-around">
        <p class="border border-danger mx-4 text-center p-5 w-25 h-50">Affiche film sera remplacé par img</p>
        <p class="border border-danger mx-4 text-center p-5 w-25 h-50">Affiche film</p>
        <p class="border border-danger mx-4 text-center p-5 w-25 h-50">Affiche film</p>
        <p class="border border-danger mx-4 text-center p-5 w-25 h-50">Affiche film</p>
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