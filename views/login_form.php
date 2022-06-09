<?php

if (isset($_SESSION['username']) && isset($_SESSION['psw'])) {
    header('location: /');
} else {
    echo '<script>alert("Nom et/ou mot de passe invalide..."); location="/";</script>';
}