<?php
require_once $ROOT_PATH . 'views/db_controller.php';
require_once $ROOT_PATH . 'src/controllers/auth_controller.php';

$userId = "";
$panier = [];

if (is_user_login()) {
    global $panier;
    global $userId;

    $userId = $_SESSION['userId'];
    $panier = sqlQueryPrepare("SELECT Name, Price FROM panier INNER JOIN produit ON panier.Itemid = produit.ID WHERE panier.ClientId = :clientId",
                            ['clientId' => $userId]);
}

?>

<header class="accueil_header">
    <ul class="header">
        <li><a href="/">Accueil</a></li>
        <li><a href="/magasin">Magasin</a></li>
        <li><a href="/contact">Contact</a></li>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <? if (!is_user_login()) { ?>
                <button class="btn btn-primary header-button" onclick="document.getElementById('id01').style.display='block'">Connexion</button>
                <button class="btn btn-primary header-button" onclick="document.getElementById('id02').style.display='block'">Inscription</button>
            <? } else { ?>
                <p class="h6" style="border-right: 2px solid white; padding: 0 16px; margin-top: 8px; color: white; align-self: center;"><strong>Utilisateur: <?= get_username() ?></strong></p>
                <a href="/logout" class="btn btn-primary header-button" style="width: 120px;">Déconnexion</a>
                <a href="/checkout" class="btn btn-primary header-button"> <?= count($panier) ?> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                    </svg>
                </a> 
            <? } ?>
        </div>
    </ul>
</header>