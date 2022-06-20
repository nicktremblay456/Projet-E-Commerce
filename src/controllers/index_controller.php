<?php
require_once $ROOT_PATH . 'src/controllers/db_controller.php';
require_once $ROOT_PATH . 'src/controllers/auth_controller.php';

if (is_user_login()) {
    $userId = $_SESSION['userId'];
    $videoGames = sqlQueryPrepare("SELECT produit.*, produit.CurrentStock, panier.Quantity, ifnull(CurrentStock - Quantity, CurrentStock) as Diff FROM produit LEFT JOIN (SELECT * FROM panier WHERE Clientid = :userId) as panier ON produit.ID = panier.Itemid WHERE Category = 3;", ['userId' => $userId]);
    $sports = sqlQueryPrepare("SELECT produit.*, produit.CurrentStock, panier.Quantity, ifnull(CurrentStock - Quantity, CurrentStock) as Diff FROM produit LEFT JOIN (SELECT * FROM panier WHERE Clientid = :userId) as panier ON produit.ID = panier.Itemid WHERE Category = 7;", ['userId' => $userId]);
    $clothes = sqlQueryPrepare("SELECT produit.*, produit.CurrentStock, panier.Quantity, ifnull(CurrentStock - Quantity, CurrentStock) as Diff FROM produit LEFT JOIN (SELECT * FROM panier WHERE Clientid = :userId) as panier ON produit.ID = panier.Itemid WHERE Category = 8;", ['userId' => $userId]);
} else {
    $videoGames = sqlQuery("SELECT * FROM produit WHERE Category = 3")->fetchAll();
    $sports = sqlQuery("SELECT * FROM produit WHERE Category = 7")->fetchAll();
    $clothes = sqlQuery("SELECT * FROM produit WHERE Category = 8")->fetchAll();
}

generateViews();

require $ROOT_PATH . "views/accueil.php";