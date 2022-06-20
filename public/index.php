<?php
session_start();
$ROOT_PATH = dirname($_SERVER["DOCUMENT_ROOT"]) . "/";
$PUBLIC_PATH = $ROOT_PATH . "public/";

$title = "Accueil";

function get_cookie($cookie)
{
    if (isset($_COOKIE[$cookie])) {
        return $_COOKIE[$cookie];
    }

    return false;
}

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
}

if (isset($_SERVER["REDIRECT_URL"]))
    $route = $_SERVER["REDIRECT_URL"];
else
    $route = "/";

switch ($route) {
    case '/':
        $title = "Accueil";
        if (isset($_POST['itemid'])) {
            require $ROOT_PATH . "src/controllers/panier_controller.php";
        }
        require $ROOT_PATH . "src/controllers/index_controller.php";
        break;
    case "/magasin":
        $title = "Magasin";
        if (isset($_POST['itemid'])) {
            require $ROOT_PATH . "src/controllers/panier_controller.php";
        }
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
        $title = "Search";
        require $ROOT_PATH . "src/controllers/search_controller.php";
        break;
    case "/deletecart":
        require $ROOT_PATH . "src/controllers/deletecart_controller.php";
        break;
    case '/admin':
        $title = "Admin";
        require $ROOT_PATH . "src/controllers/control_panel_controller.php";
        break;
    case '/upload_item':
        $title = "Control Panel";
        require $ROOT_PATH . "src/controllers/item_addition_controller.php";
        break;
    case '/delete_item':
        $title = "Control Panel";
        require $ROOT_PATH . "src/controllers/item_removal_controller.php";
        break;
    case '/modify_item':
        $title = "Control Panel";
        require $ROOT_PATH . "src/controllers/item_modif_controller.php";
        break;
    case '/access_mgmt':
        $title = "Control Panel";
        require $ROOT_PATH . "src/controllers/access_mgmt_controller.php";
        break;
    case '/maintenance':
        $title = "Maintenance";
        require $ROOT_PATH . "src/controllers/maintenance_controller.php";
        break;
}
