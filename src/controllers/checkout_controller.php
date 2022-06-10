<?php
require_once $ROOT_PATH . 'views/db_controller.php';

$userId = $_COOKIE['LOGGED_USER'];
$totalPrice = 0;

$panier = sqlQueryPrepare("SELECT Name, Price FROM panier INNER JOIN produit ON panier.Itemid = produit.ID WHERE panier.ClientId = :clientId",
                        ['clientId' => $userId]);

for ($i = 0; $i < count($panier); $i++) {
    $totalPrice += $panier[$i]['Price'];
}

generateViews();

require $ROOT_PATH . "views/checkout.php";