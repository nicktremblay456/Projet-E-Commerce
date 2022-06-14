<?php
require_once $ROOT_PATH . 'views/db_controller.php';

if(isset($_POST["cartid"])) {
    $cartid = $_POST["cartid"];
    sqlQueryPrepare("DELETE FROM panier WHERE ID=:cartid", ["cartid" => $cartid]);
    header("location: /checkout");
} else {
    header("location: /checkout");
}
