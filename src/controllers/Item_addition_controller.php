<?php

require $ROOT_PATH . 'views/db_controller.php';

generateViews();

$itemName = $_POST['itemName'];
$itemDescrip = $_POST['itemDescription'];
$itemPrice = $_POST['itemPrice'];
$itemStock = $_POST['itemStock'];
$itemCategory = $_POST['itemCategory'];
$itemPicturePath = $_POST['itemPicture'];

sqlQueryPrepare("INSERT INTO produit VALUES(null, :itemName, :itemDescription, :itemPrice, :itemStock, :itemCategory, :itemPicturePath);",
                    ['itemName' => $itemName, 'itemDescription' => $itemDescrip, 'itemPrice' => $itemPrice, 'itemStock' => $itemStock,
                    'itemCategory' => $itemCategory, 'itemPicturePath' => $itemPicturePath]);

require $ROOT_PATH . "views/control_panel.php";