<?php
require_once $ROOT_PATH . 'views/db_controller.php';

if (get_cookie('LOGGED_USER')) {
    $userId = $_SESSION['userId'];
    $itemId = $_POST['itemid'];
    $quantity = $_POST['quantity'];

    # add to card if item exist
    if (!sqlQueryPrepare("INSERT INTO panier VALUES(null, :ClientId, :ItemId, :Quantity);", ['ClientId' => $userId, 'ItemId' => $itemId, 'Quantity' => $quantity]) === false) {
        echo '<script>alert("Produit invalide..."); location="/";</script>';
    }
}