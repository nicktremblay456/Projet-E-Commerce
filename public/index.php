<?php

# header used for every page
ob_start();
require('header.php');
$header = ob_get_clean();
#footer used for every page
ob_start();
require('footer.php');
$footer = ob_get_clean();

# the body for main page (Accueil)
ob_start();
require('accueil_body.php');
$accueilBody = ob_get_clean();

# the body for main page (Magasin)
ob_start();
require('magasin_body.php');
$magasinBody = ob_get_clean();