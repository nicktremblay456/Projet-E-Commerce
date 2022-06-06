<?php
session_start();
$ROOT_PATH = dirname($_SERVER["DOCUMENT_ROOT"]) . "/";
$PUBLIC_PATH = $ROOT_PATH . "public/";

$title = "Accueil";

function generateViews()
{
    global $ROOT_PATH;
    
    # header used for every page
    ob_start();
    require($ROOT_PATH . 'views/header.php');
    $GLOBALS["header"] = ob_get_clean();
    #footer used for every page
    ob_start();
    require($ROOT_PATH . 'views/footer.php');
    $GLOBALS["footer"] = ob_get_clean();

    #modals
    ob_start();
    require($ROOT_PATH . 'views/login_modal.php');
    $GLOBALS["loginModal"] = ob_get_clean();
    ob_start();
    require($ROOT_PATH . 'views/signup_modal.php');
    $GLOBALS["signupModal"] = ob_get_clean();

    # body
    ob_start();
    require($ROOT_PATH . 'views/accueil_body.php');
    $GLOBALS["accueilBody"] = ob_get_clean();
    ob_start();
    require($ROOT_PATH . 'views/magasin_body.php');
    $GLOBALS["magasinBody"] = ob_get_clean();
    ob_start();
    require($ROOT_PATH . "views/checkout_body.php");
    $GLOBALS["checkoutBody"] = ob_get_clean();
}

if (isset($_SERVER["REDIRECT_URL"]))
    $route = $_SERVER["REDIRECT_URL"];
else
    $route = "/";

switch ($route) {
    case '/':
        $title = "Accueil";
        require $ROOT_PATH . "src/controllers/index_controller.php";
        break;
    case "/magasin":
        $title = "Magasin";
        require $ROOT_PATH . "src/controllers/magasin_controller.php";
        break;
    case "/contact":
        $title = "Contact";
        require $ROOT_PATH . "src/controllers/contact_controller.php";
        break;
    case "/checkout":
        $title = "Paiement";
        require $ROOT_PATH . "src/controllers/checkout_controller.php";
        break;
    case "/signup":
        $title = "Inscription";
        require $ROOT_PATH . "src/controllers/signup_form_controller.php";
        break;
    case "/login":
        $title = "Connexion";
        require $ROOT_PATH . "src/controllers/login_form_controller.php";
        break;
    case '/logout':
        require $ROOT_PATH . "src/controllers/logout.php";
        break;
    case '/search':
        require $ROOT_PATH . "src/controllers/search_controller.php";
        break;
}