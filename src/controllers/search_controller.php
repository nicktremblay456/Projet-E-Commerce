<?php

require $ROOT_PATH . 'views/db_controller.php';


if (isset($_POST['search'])) {
    $search = "%{$_POST['search']}%";
    $products = sqlQuery("SELECT * FROM produit WHERE Description LIKE '$search'")->fetchAll();
}

generateViews();

require $ROOT_PATH . "views/search.php";