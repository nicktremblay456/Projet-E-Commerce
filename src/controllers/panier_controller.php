<?php
require_once $ROOT_PATH . 'views/db_controller.php';

$userId = $_COOKIE['LOGGED_USER'];
$itemId = $_POST['itemid'];

sqlQueryPrepare("INSERT INTO panier VALUES(null, :ClientId, :ItemId, :Quantity);",
                ['ClientId' => $userId, 'ItemId' => $itemId, 'Quantity' => 1]);