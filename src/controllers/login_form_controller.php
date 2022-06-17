<?php
require_once $ROOT_PATH . 'src/controllers/db_controller.php';
require_once $ROOT_PATH . "src/controllers/auth_controller.php";

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

            $_SESSION['isAdmin'] = $row["isAdmin"];
            $_SESSION['userId'] = $row['ID'];

            create_login_token_cookie($row['ID']);
            break;
        }
    }
}

generateViews();

require $ROOT_PATH . "views/login_form.php";