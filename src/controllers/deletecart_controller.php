<?php
require_once $ROOT_PATH . 'views/db_controller.php';

if(isset($_GET["cartid"])) {
    $cartid = $_GET["cartid"];
    sqlQueryPrepare("DELETE FROM panier WHERE ID=:cartid", ["cartid" => $cartid]);
    header("location: /checkout");
} else {
    header("location: /checkout");
}
