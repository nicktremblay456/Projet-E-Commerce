<?php

setcookie('LOGGED_USER');
session_unset();

header('location: /');