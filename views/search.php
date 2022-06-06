<?php

require $ROOT_PATH . 'views/db_controller.php';


if (isset($_POST['search'])) {
    $search = "%{$_POST['search']}%";
    $products = sqlQuery("SELECT * FROM produit WHERE Description LIKE '$search'")->fetchAll();
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title ?></title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body id="body" class="d-flex flex-column min-vh-100">
    <?= $header ?>
    <?= $loginModal?>
    <?= $signupModal ?>
    <form class="search-bar" action="/search" style="margin:auto;max-width:300px" method="post">
        <input type="text" placeholder="Recherche.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
    <div class="magasin-content">
        <div class="sidebar">
            <label class="filters">Catégorie 1
                <input type="radio" name="radio">
                <span class="checkmark"></span>
            </label>

            <label class="filters">Catégorie 2
                <input type="radio" name="radio">
                <span class="checkmark"></span>
            </label>

            <label class="filters">Catégorie 3
                <input type="radio" name="radio">
                <span class="checkmark"></span>
            </label>

            <label class="filters">Catégorie 4
                <input type="radio" name="radio">
                <span class="checkmark"></span>
            </label>
            <label class="filters">Catégorie 5
                <input type="radio" name="radio">
                <span class="checkmark"></span>
            </label>
            <label class="filters">Catégorie 6
                <input type="radio" name="radio">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class='container-content'>
            <div class='container'>
                <div class='row'>
                    <? foreach ($products as $row) { ?>
                        <div class='col col-content'>
                            <div class='card' style='width: 18rem;'>
                                <img src='../img/<?= $row['Path'] ?>' class='card-img-top' alt='...'>
                                <div class='card-body'>
                                    <h5 class='card-title'><?= $row['Name'] ?></h5>
                                    <p class='card-text'><?= $row['Description'] ?></p>
                                    <a href='#' class='btn btn-primary'>Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    <? } ?>
                </div>
            </div>
        </div>
    </div>

    <?= $footer ?>
</body>

</html>