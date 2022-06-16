<?php
require_once $ROOT_PATH . 'views/db_controller.php';

$quantity = $_POST['quantity'];

if(isset($_POST["cartid"])) {
    $cartid = $_POST["cartid"];
    if ($quantity > 1) {
        sqlQueryPrepare("UPDATE panier SET Quantity = Quantity - 1 WHERE ID = :cardid", ['cardid' => $cartid]);
        header("location: /checkout");
    } else {
            sqlQueryPrepare("DELETE FROM panier WHERE ID = :cartid", ["cartid" => $cartid]);
            header("location: /checkout");
    }
} else {
    header("location: /checkout");
}