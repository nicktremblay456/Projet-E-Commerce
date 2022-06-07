<?php
require $ROOT_PATH . 'views/db_controller.php';

$accounts = sqlQuery("SELECT * FROM client")->fetchAll();

$username = $_POST['username'];
$psw = $_POST['psw'];

# verify user input
foreach ($accounts as $row) {
    if ($username == $row["UserName"]) {
        #check if password = to the hashed password
        if (password_verify($psw, $row["Password"])) {
            #echo "Username: " . $username . "<br>";
            #echo "Password: " . $psw . "<br>";
            #echo "HashedPsw: " . $row["Password"];

            $_SESSION['username'] = $username;
            $_SESSION['psw'] = $psw;

            setcookie(
                'LOGGED_USER',
                $row['Email'],
                [
                    'expires' => time() + 365*24*3600,
                    'secure' => true,
                    'httponly' => true,
                ]
            );
            break;
        }
    }
}

generateViews();

require $ROOT_PATH . "views/login_form.php";