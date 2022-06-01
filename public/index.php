<?php

# header used for every page
ob_start();
require('header.php');
$header = ob_get_clean();
#footer used for every page
ob_start();
require('footer.php');
$footer = ob_get_clean();

#modals
ob_start();
require('loginModal.php');
$loginModal = ob_get_clean();
ob_start();
require('signupModal.php');
$signupModal = ob_get_clean();

# the body for main page (Accueil)
ob_start();
require('accueil_body.php');
$accueilBody = ob_get_clean();