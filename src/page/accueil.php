<?php

$title = 'Accueil';

// -4 on charge les films
$categorys = getAllCategorys();

ob_start();

?>
<div class="container">
    <p class="mt-5 text-center my-4 py-4 font-weight-bold">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia laborum est sit minus libero laudantium excepturi nesciunt sunt possimus earum? Ab dicta velit, officia provident corporis ducimus fugit. Temporibus, nostrum. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio repellat voluptatum assumenda dicta, vel dolores in minus, id harum dolor eaque doloremque. Eligendi dignissimos dolor ad eveniet libero hic enim! Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, molestias voluptate earum quas aspernatur nisi eaque iure, error numquam illo consectetur ut, nobis sit rerum repudiandae dignissimos quia eius tempore?</p>
    <form class="form-inline my-4 py-4" action="index.php" method="GET">
        <div class="form-group w-75 mx-sm-3 mb-2">
            <input type="text" class="form-control form-control-lg w-100" id="search" placeholder="Recherche">
        </div>
        <button type="submit" class="btn btn-primary btn-lg mb-2">Recherche</button>
        <select name="category" class="form-control">
            <option value="">categorie</option>
            <!-- 1-donc boucle sur les films( on a pas de variable php qui contient les flims)-->
            <!--1- donc requete donc on va dans model -on cree un nouveau fichier dans model movie.php-->
            <!-- 5- boucle ensuite on va faire un recherche donc on va rajouter toutes les films qui correspondent à la recherche donc page recherche.php-->
            <!-- 5   --> <?php foreach ($categorys as $category) : ?>
                <!-- 5-->
                <option value="<?= $category['cat_id']; ?>"><?= $category['cat_name']; ?></option>
                <!-- 5--> <?php endforeach; ?>
        </select>
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
<?php $content = ob_get_clean(); //Stocke tout le code HTML dans la variable $content 
?>

<?php require('../template.php'); ?>