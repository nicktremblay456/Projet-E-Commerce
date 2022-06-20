<?php
require_once $ROOT_PATH . 'src/controllers/db_controller.php';

generateViews();

$result = sqlQuery("SELECT ID, Name, Category FROM produit;");
$results = sqlQuery("SELECT ID, Name, Category FROM produit;");
$usersAccount = sqlQuery("SELECT ID, UserName, isAdmin FROM client;"); 
$allCategory = sqlQuery("SELECT * FROM categorie");

if(isset($_POST['itemModif'])){
$selectedItem = $_POST['itemModif'];
}
if(isset($_POST['itemIDModif'])){
    $selectedItem = $_POST['itemIDModif'];
    }
if(isset($_POST['itemNameModif'])){
    $itemName = $_POST['itemNameModif'];
}
if(isset($_POST['itemDescriptionModif'])){
    $itemDescrip = $_POST['itemDescriptionModif'];
}
if(isset($_POST['itemPriceModif'])){
    $itemPrice = $_POST['itemPriceModif'];
}
if(isset($_POST['itemStockModif'])){
    $itemStock = $_POST['itemStockModif'];
}
if(isset($_POST['itemCategoryModif'])){
    $itemCategory = $_POST['itemCategoryModif'];
}

if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Upload')
{
  if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK)
  {
    // get details of the uploaded file
    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
    $fileName = $_FILES['uploadedFile']['name'];
    $fileSize = $_FILES['uploadedFile']['size'];
    $fileType = $_FILES['uploadedFile']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    // sanitize file-name
    $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

    // check if file has one of the following extensions
    $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc');

    if (in_array($fileExtension, $allowedfileExtensions))
    {
      // directory in which the uploaded file will be moved
      $uploadFileDir = $ROOT_PATH . "public/img/"; //'C:/wamp64/www/Projet-E-Commerce/public/img/';
      $dest_path = $uploadFileDir . $newFileName;

      if(move_uploaded_file($fileTmpPath, $dest_path)) 
      {
        $message ='File is successfully uploaded.';
      }
      else 
      {
        $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
      }
    }
    else
    {
      $message = 'Upload failed. Allowed file types: ' . implode(',', $allowedfileExtensions);
    }
  }
  else
  {
    $message = 'There is some error in the file upload. Please check the following error.<br>';
    $message .= 'Error:' . $_FILES['uploadedFile']['error'];
  }
}



$itemToModify = sqlQueryPrepare("SELECT * FROM produit WHERE ID = :ID",['ID' => $selectedItem]);

if(isset($newFileName)){
    $itemPicture = $newFileName;
} else {
    $itemPicture = $itemToModify[0]['Path'];
}


 if (isset($itemName) && isset($itemDescrip) && isset($itemPrice) && isset($itemStock) && isset($itemCategory) && isset($itemPicture)){
    sqlQueryPrepare("UPDATE produit SET Name = :name, Description = :description, Price = :price, CurrentStock = :currentStock, Category = :category, Path = :path WHERE ID = :ID",
                    ['name' => $itemName, 'description' => $itemDescrip, 'price' => $itemPrice, 'currentStock' => $itemStock, 'category' => $itemCategory,
                    'path' => $itemPicture, 'ID' => $selectedItem]);
 }

require $ROOT_PATH . "views/control_panel_modif.php";