<?php
require_once $ROOT_PATH . 'views/db_controller.php';

$videoGames = sqlQuery("SELECT * FROM produit WHERE Category = 3")->fetchAll();
$sports = sqlQuery("SELECT * FROM produit WHERE Category = 7")->fetchAll();
$clothes = sqlQuery("SELECT * FROM produit WHERE Category = 8")->fetchAll();

generateViews();

require $ROOT_PATH . "views/accueil.php";