<?php

require $ROOT_PATH . 'views/db_controller.php';

generateViews();

$result = sqlQuery("SELECT ID, Name, Category FROM produit;"); 

require $ROOT_PATH . "views/control_panel.php";