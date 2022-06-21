<?php
require_once $ROOT_PATH . 'src/controllers/db_controller.php';
require_once $ROOT_PATH . 'src/controllers/auth_controller.php';

if (is_user_login()) {
    $userId = $_SESSION['userId'];
    $allProducts = sqlQueryPrepare("SELECT produit.*, produit.CurrentStock, panier.Quantity, ifnull(CurrentStock - Quantity, CurrentStock) as Diff FROM produit LEFT JOIN (SELECT * FROM panier WHERE Clientid = :userId) as panier ON produit.ID = panier.Itemid", ['userId' => $userId]);
} else {
    $allProducts = sqlQuery("SELECT * FROM produit")->fetchAll();
}

$allCategory = sqlQuery("SELECT * FROM Categorie")->fetchAll();

generateViews();

require $ROOT_PATH . "views/magasin.php";