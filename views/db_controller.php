<?php

# connection string
$dsn = "mysql:host=localhost;dbname=e-commerce;charset=UTF8";

# connect to db PDO(connection string, root, password)
try {
    $pdo = new PDO($dsn, "root", "");
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

#$getAllProduct = sqlQuery("SELECT * FROM Produit;")->fetchAll();
