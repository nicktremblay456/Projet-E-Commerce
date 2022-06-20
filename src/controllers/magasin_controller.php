<?php
require_once $ROOT_PATH . 'src/controllers/db_controller.php';

if (isset($_SESSION['userId'])) {
    $userId = $_SESSION['userId'];
    $allProducts = sqlQueryPrepare("SELECT produit.*, produit.CurrentStock, panier.Quantity, ifnull(CurrentStock - Quantity, CurrentStock) as Diff FROM produit LEFT JOIN (SELECT * FROM panier WHERE Clientid = :userId) as panier ON produit.ID = panier.Itemid", ['userId' => $userId]);
} else {
    $allProducts = sqlQuery("SELECT * FROM produit")->fetchAll();
}

generateViews();

require $ROOT_PATH . "views/magasin.php";