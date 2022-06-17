<?php
require_once $ROOT_PATH . 'src/controllers/db_controller.php';

generateViews();

$result = sqlQuery("SELECT ID, Name, Category FROM produit;");
$usersAccount = sqlQuery("SELECT ID, UserName, isAdmin FROM client;"); 

require $ROOT_PATH . "views/control_panel.php";