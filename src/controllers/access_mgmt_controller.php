<?php

require $ROOT_PATH . 'src/controllers/db_controller.php';
require_once $ROOT_PATH . 'src/controllers/control_panel_controller.php';

generateViews();

if (isset($_POST['userID'],$_POST['userAccess'])){

    $userToChange = $_POST['userID'];
    $permission = $_POST['userAccess'];
    
    sqlQueryPrepare("UPDATE client SET isAdmin = :permission WHERE ID = :userID",
    ["permission" => $permission, "userID" => $userToChange]);
    
}


require $ROOT_PATH . "views/control_panel.php";