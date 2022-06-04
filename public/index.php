<?php
$ROOT_PATH = dirname($_SERVER["DOCUMENT_ROOT"]) . "/";
$PUBLIC_PATH = $ROOT_PATH . "public/";

$title = "Accueil";

# header used for every page
ob_start();
require($ROOT_PATH . 'views/header.php');
$header = ob_get_clean();
#footer used for every page
ob_start();
require($ROOT_PATH . 'views/footer.php');
$footer = ob_get_clean();

#modals
ob_start();
require($ROOT_PATH . 'views/login_modal.php');
$loginModal = ob_get_clean();
ob_start();
require($ROOT_PATH . 'views/signup_modal.php');
$signupModal = ob_get_clean();

# body
ob_start();
require($ROOT_PATH . 'views/accueil_body.php');
$accueilBody = ob_get_clean();
ob_start();
require($ROOT_PATH . 'views/magasin_body.php');
$magasinBody = ob_get_clean();
ob_start();
require($ROOT_PATH . "views/checkout_body.php");
$checkoutBody = ob_get_clean();

if(isset($_SERVER["REDIRECT_URL"]))
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
}