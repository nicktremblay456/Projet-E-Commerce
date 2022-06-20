<?php
require_once $ROOT_PATH . 'src/controllers/db_controller.php';

$accepted = true;

if (isset($_POST['username'], $_POST['email'], $_POST['psw'], $_POST['psw-repeat'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $psw = $_POST['psw'];
    $pswRepeat = $_POST['psw-repeat'];

    # set the admin
    $isAdmin = $_POST['adminAccount'];

    if ($psw === $pswRepeat) {
        $hashPsw = password_hash($psw, PASSWORD_DEFAULT);
        #$hashPsw = hash("sha256", $psw);

        $isAdmin = $_POST['adminAccount'];
        if (isset($isAdmin)) {
            $isAdmin = 1;
        } else {
            $isAdmin = 0;
        }
    }


    if ($psw === $pswRepeat) {
        $hashPsw = password_hash($psw, PASSWORD_DEFAULT);
        #$hashPsw = hash("sha256", $psw);

        # check if it already exist
        $accounts = sqlQuery("SELECT * FROM client;")->fetchAll();
        foreach ($accounts as $row) {
            if ($username === $row["UserName"] || $email === $row["Email"]) {
                $accepted = false;
            }
        }
        # if it doesn't exit, then add it to the db
        if ($accepted) {
            sqlQueryPrepare(
                "INSERT INTO client VALUES(null, :username, :email, :psw, :isAdmin);",
                [':username' => $username, ':email' => $email, ':psw' => $hashPsw, ':isAdmin' => $isAdmin]
            );
        }
    } else {
        $accepted = false;
        echo '<script>alert("Vous devez entrer 2 fois le même mot de passe."); location="/";</script>';
    }
} else {
    echo '<script>alert("Vous devez créez un compte avant de vous connecter..."); location="/";</script>';
}


generateViews();

require $ROOT_PATH . "views/signup_form.php";