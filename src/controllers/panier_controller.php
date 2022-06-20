<?php
require_once $ROOT_PATH . 'src/controllers//db_controller.php';

if (get_cookie('LOGGED_USER')) {
    if (isset($_POST['itemid'], $_POST['quantity'], $_SESSION['userId'])) {
        $userId = $_SESSION['userId'];
        $itemId = $_POST['itemid'];
        $quantity = $_POST['quantity'];

        $res = sqlQueryPrepare("SELECT CurrentStock FROM produit WHERE ID = :id", ['id' => $itemId]);

        if ($quantity <= 0) {
            $quantity = 1;
        }

        if ($quantity <= $res[0]['CurrentStock']) {
            # add to card if item exist
            if (!sqlQueryPrepare("INSERT INTO panier VALUES(null, :ClientId, :ItemId, :Quantity);", ['ClientId' => $userId, 'ItemId' => $itemId, 'Quantity' => $quantity]) === false) {
                echo '<script>alert("Produit invalide..."); location="/";</script>';
            }
        }
    }
}