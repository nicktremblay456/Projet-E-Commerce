<?php
require_once $ROOT_PATH . 'views/db_controller.php';

$userId = $_SESSION['userId'];
$totalPrice = 0;

generateViews();

$panier = sqlQueryPrepare("SELECT panier.ID, Name, Price FROM panier INNER JOIN produit ON panier.Itemid = produit.ID WHERE panier.ClientId = :clientId",
                        ['clientId' => $userId]);

for ($i = 0; $i < count($panier); $i++) {
    $totalPrice += $panier[$i]['Price'];
}

require $ROOT_PATH . "views/checkout.php";