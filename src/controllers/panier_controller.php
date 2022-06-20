<?php
require_once $ROOT_PATH . 'src/controllers//db_controller.php';

if (get_cookie('LOGGED_USER')) {
    if (isset($_POST['itemid'], $_POST['quantity'], $_SESSION['userId'])) {
        $userId = $_SESSION['userId'];
        $itemId = $_POST['itemid'];
        $quantity = $_POST['quantity'];

        # check if the item id exist
        $res = sqlQueryPrepare("SELECT ID, CurrentStock FROM produit WHERE ID = :id", ['id' => $itemId]);

        if ($res) {
            # check if the quantity is <= to the currentstock in db
            if ($quantity <= 0) {
                $quantity = 1;
            }
    
            if ($quantity <= $res[0]['CurrentStock']) {
                $item = sqlQueryPrepare("SELECT ID, Quantity FROM panier WHERE Itemid = :id AND Clientid = :userId", ['id' => $itemId, 'userId' => $userId]);
                if (count($item) > 0) {
                    $item[0]['Quantity'] += $quantity;
                    if ($item[0]['Quantity'] <= $res[0]['CurrentStock']) {
                        if (sqlQueryPrepare("UPDATE panier SET Quantity = :quantity", [':quantity' => $item[0]['Quantity']]) === false) {
                            echo '<script>alert("Produit invalide..."); location="/";</script>';
                        }
                    } else {
                        echo '<script>alert("Quantité invalide..."); location="/";</script>';
                    }
                } else {
                    if ($quantity <= $res[0]['CurrentStock']) {
                        # add to card if the item is in stock
                        if (sqlQueryPrepare("INSERT INTO panier VALUES(null, :ClientId, :ItemId, :Quantity);", ['ClientId' => $userId, 'ItemId' => $itemId, 'Quantity' => $quantity]) === false) {
                            echo '<script>alert("Produit invalide..."); location="/";</script>';
                        }
                    } else {
                        echo '<script>alert("Quantité invalide..."); location="/";</script>';
                    }
                }
            }
        }
    }
}