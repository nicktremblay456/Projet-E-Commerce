<?php
require_once $ROOT_PATH . 'src/controllers/db_controller.php';
require_once $ROOT_PATH . 'src/controllers/auth_controller.php';

if (!is_user_login()) {
    echo '<script>alert("Vous devez vous connecter avant..."); location="/";</script>';
}

$quantity = 0;

if(isset($_POST["cartid"])) {
    $cartid = $_POST["cartid"];
    $res = sqlQueryPrepare("SELECT Clientid FROM panier WHERE ID = :cartid;", ['cartid' => $cartid]);
    if (!$res) {
        echo '<script>alert("Erreur lors du chargement du panier..."); location="/";</script>';
        return;
    }
    global $quantity;
    # check if user id is the same as the session
    #var_dump(sqlQueryPrepare("SELECT Clientid FROM panier WHERE ID = :cartid;", ['cartid' => $cartid]));
    if ($_SESSION['userId'] === $res[0]['Clientid']) {
        $quantity = sqlQueryPrepare("SELECT Quantity FROM panier WHERE ID = :cardid;", ['cardid' => $cartid]);
        if ($quantity[0]['Quantity'] > 1) {
            sqlQueryPrepare("UPDATE panier SET Quantity = Quantity - 1 WHERE ID = :cardid", ['cardid' => $cartid]);
            header("location: /checkout");
        } else {
                sqlQueryPrepare("DELETE FROM panier WHERE ID = :cartid", ["cartid" => $cartid]);
                header("location: /checkout");
        }
    }
} else {
    header("location: /checkout");
}