<?php
require_once $ROOT_PATH . 'src/controllers//db_controller.php';

$products = [];

if (isset($_POST['search'])) {
    global $products;
    $search = "%{$_POST['search']}%";
    $products = sqlQuery("SELECT * FROM produit WHERE Description LIKE '$search'")->fetchAll();
}

generateViews();

require $ROOT_PATH . "views/search.php";