<?php
require $ROOT_PATH . 'views/db_controller.php';

$accepted = true;

$username = $_POST['username'];
$email = $_POST['email'];
$psw = $_POST['psw'];
$pswRepeat = $_POST['psw-repeat'];

if ($psw === $pswRepeat) {
    $hashPsw = password_hash($psw, PASSWORD_DEFAULT);
    #$hashPsw = hash("sha256", $psw);
    
    $accounts = sqlQuery("SELECT * FROM client;")->fetchAll();
    foreach ($accounts as $row) {
        if ($username === $row["UserName"] || $email === $row["Email"]) {
            $accepted = false;
        }
    }
    if ($accepted) {
        sqlQueryPrepare("INSERT INTO client VALUES(null, :username, :email, :psw);",
                        [':username' => $username, ':email' => $email, ':psw' => $hashPsw]);
    }
} else {
    $accepted = false;
    echo '<script>alert("Vous devez entrer 2 fois le même mot de passe."); location="/";</script>';
}


generateViews();

require $ROOT_PATH . "views/signup_form.php";