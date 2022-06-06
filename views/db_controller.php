<?php

# connection string
$_ENV = require $ROOT_PATH . "config.php";
$dsn = "mysql:host=".$_ENV['host'].";dbname=".$_ENV['dbname'].";charset=UTF8";

# connect to db PDO(connection string, root, password)
try {
    $pdo = new PDO($dsn, $_ENV['username'], $_ENV['password']);
} catch (Exception $e) {
    echo 'Exception: ',  $e->getMessage(), "\n";
}

function connectToDB() {
    global $pdo;
    if ($pdo) {
        echo "Connection réussi";
    } else {
        echo "Connection échoué";
    }
}

function sqlQuery($query) {
    global $pdo;
    return $pdo->query($query);
}

function sqlQueryPrepare($query, $array) {
    global $pdo;
    return $pdo->prepare($query)->execute($array);
}