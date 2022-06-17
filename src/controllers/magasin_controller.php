<?php
require_once $ROOT_PATH . 'src/controllers/db_controller.php';

$allProducts = sqlQuery("SELECT * FROM produit")->fetchAll();

generateViews();

require $ROOT_PATH . "views/magasin.php";