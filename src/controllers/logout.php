<?php
require_once $ROOT_PATH . 'src/controllers/auth_controller.php';

delete_token_cookie();
session_unset();

header('location: /');