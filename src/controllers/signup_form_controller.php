<?php
require $ROOT_PATH . 'views/db_controller.php';

$accepted = true;

$username = $_POST['username'];
$email = $_POST['email'];
$psw = $_POST['psw'];
$pswRepeat = $_POST['psw-repeat'];

if (isset($_POST['adminAccount'])){

    $isAdmin = $_POST['adminAccount'];
}

if (isset($isAdmin)){
    $isAdmin = 1;
} else{
    $isAdmin = 0;
}

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
        sqlQueryPrepare("INSERT INTO client VALUES(null, :username, :email, :psw, :isAdmin);",
                        [':username' => $username, ':email' => $email, ':psw' => $hashPsw, ':isAdmin' => $isAdmin]);
    }
} else {
    $accepted = false;
    echo '<script>alert("Vous devez entrer 2 fois le même mot de passe."); location="/";</script>';
}


generateViews();

require $ROOT_PATH . "views/signup_form.php";