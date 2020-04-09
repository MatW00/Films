<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/solid.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top text-light">
            <a class="navbar-brand" href="index.php"><i class="fas fa-film  fa-spin"></i> WF3 Movies</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainnavbar" aria-controls="mainnavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>

            </button>
            <div class="collapse navbar-collapse" id="mainnavbar">

                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=accueil">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=recherche">Catégories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?filmEdit">Ajouter un film</a>
                    </li>
                </ul>

                <!-- Ajout de l'action pour atteindre la recherche en methode POST -->
                <form class="form-inline my-2 my-lg-0" action="?p=recherche" method="POST">
                    <input class="form-control mr-sm-2" type="recherche" placeholder="Recherche" aria-label="recherche">
                    <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Ok</button>
                </form>
            </div>
        </nav>
    </header>
    <div class="container">
        <?= $content; ?>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-custom-file-input.min.js"></script>

    <!-- notre js -->
    <script src="assets/js/main.js"></script>
    <script>
        $(document).ready(function() {
            bsCustomFileInput.init()
        })
    </script>

</html>