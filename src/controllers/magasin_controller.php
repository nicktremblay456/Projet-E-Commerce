<?php

require $ROOT_PATH . 'views/db_controller.php';

    $allProducts = sqlQuery("SELECT * FROM produit")->fetchAll();

generateViews();

require $ROOT_PATH . "views/magasin.php";