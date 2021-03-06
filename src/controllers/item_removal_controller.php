<?php
require_once $ROOT_PATH . 'src/controllers/db_controller.php';
require_once $ROOT_PATH . 'src/controllers/control_panel_controller.php';

generateViews();

$itemToDelete = $_POST['itemSupp'];
$fileName = sqlQueryPrepare("SELECT Path FROM produit WHERE ID = :ID;",['ID' => $itemToDelete]);
sqlQueryPrepare("DELETE FROM produit WHERE ID = :ID;",['ID' => $itemToDelete]);


$file_name = $fileName[0]['Path']; // file name from front end
$location_with_image_name = $ROOT_PATH . "public/img/" . $file_name;
if(file_exists($location_with_image_name)){
	$delete  = unlink($location_with_image_name);
	if($delete){
		echo "delete success";
	}else{
	echo "delete not success";
	}
}

require $ROOT_PATH . "views/control_panel.php";