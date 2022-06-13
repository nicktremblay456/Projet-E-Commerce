<?php
require_once $ROOT_PATH . 'views/db_controller.php';

$videoGames = sqlQuery("SELECT * FROM produit WHERE Category = 'Jeux Video'")->fetchAll();
$sports = sqlQuery("SELECT * FROM produit WHERE Category = 'Sports'")->fetchAll();
$clothes = sqlQuery("SELECT * FROM produit WHERE Category = 'Vetements'")->fetchAll();

generateViews();

require $ROOT_PATH . "views/accueil.php";