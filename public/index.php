<?php

# header user for every page
ob_start();
require('header.php');
$header = ob_get_clean();
#footer for every page
ob_start();
require('footer.php');
$footer = ob_get_clean();

# the body for main page (Accueil)
ob_start();
require('accueil_body.php');
$accueilBody = ob_get_clean();