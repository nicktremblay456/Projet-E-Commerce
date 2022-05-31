<?php

# connection string TO DO -> change the dbname by the official name
$dsn = "mysql:host=localhost;dbname=...;charset=UTF8";

# connect to db PDO(connection string, root, password)
try {
    $pdo = new PDO($dsn, "root", "");
} catch (Exception $e) {
    echo 'Exception: ',  $e->getMessage(), "\n";
}

function sqlQuery($query) {
    global $pdo;
    return $pdo->query($query)->fetchAll();
}

$getAllProduct = sqlQuery("SELECT * FROM ...;");