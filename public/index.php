<?php

# header user for every page
ob_start();
require('header.php');
$header = ob_get_clean();