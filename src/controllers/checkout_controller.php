<?php
require_once $ROOT_PATH . 'views/db_controller.php';
require_once $ROOT_PATH . 'src/controllers/auth_controller.php';

if (is_user_login()) {
    $userId = $_SESSION['userId'];
    $totalPrice = 0;
    
    generateViews();
    
    $panier = sqlQueryPrepare("SELECT panier.ID, Name, Price, Quantity FROM panier INNER JOIN produit ON panier.Itemid = produit.ID WHERE panier.ClientId = :clientId",
                            ['clientId' => $userId]);
    
    for ($i = 0; $i < count($panier); $i++) {
        $totalPrice += $panier[$i]['Price'] * $panier[$i]['Quantity'];
    }
} else {
    echo '<script>alert("Vous devez créer un compte pour accèeder a cette page."); location="/";</script>';
}

require $ROOT_PATH . "views/checkout.php";