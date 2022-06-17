<?php

require $ROOT_PATH . 'views/db_controller.php';

generateViews();

$userToChange = $_POST['userID'];
$permission = $_POST['userAccess'];

sqlQueryPrepare("UPDATE client SET isAdmin = :permission WHERE ID = :userID",
["permission" => $permission, "userID" => $userToChange]);

$result = sqlQuery("SELECT ID, Name, Category FROM produit;");
$usersAccount = sqlQuery("SELECT ID, UserName, isAdmin FROM client;"); 


require $ROOT_PATH . "views/control_panel.php";