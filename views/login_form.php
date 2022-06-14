<?php

if (isset($_SESSION['userId'])) {
    header('location: /');
} else {
    echo '<script>alert("Nom et/ou mot de passe invalide..."); location="/";</script>';
}