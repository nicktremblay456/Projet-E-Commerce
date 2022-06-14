<?php
require_once $ROOT_PATH . 'views/db_controller.php';


function is_user_login() {
    if (isset($_SESSION['userId'])) {
        return true;
    }

    return try_login();
}

function try_login() {
    if (isset($_COOKIE['LOGGED_USER'])) {
        $parts = $_COOKIE['LOGGED_USER'];
        $token = explode(":", $parts);
        if ($token && count($token) == 2) {
            $selector = $token[0];
            $hash_val = $token[1];

            $res = sqlQueryPrepare("SELECT user_id, hashed_validator, expiry FROM user_tokens WHERE selector = :selector and expiry >= now() LIMIT 1",
                                    [':selector' => $selector]);
            if (count($res) > 0) {
                if (password_verify($hash_val, $res[0]['hashed_validator'])) {
                    $_SESSION['userId'] = $res[0]['user_id'];
                    return true;
                }
            }
        }
    }

    return false;
}

function create_login_token_cookie($userId) {
    $selector = bin2hex(random_bytes(16));
    $validator = bin2hex(random_bytes(32));
    $expired_seconds = time() + 60 * 60 * 24 * 30;
    $expiry = date('Y-m-d H:i:s', $expired_seconds);
    
    $res = sqlQueryPrepare("INSERT INTO user_tokens (selector, hashed_validator, user_id, expiry) VALUES(:selector, :validator, :userId, :expiry);",
                    [':selector' => $selector, ':validator' => password_hash($validator, PASSWORD_DEFAULT), ':userId' => $userId, ':expiry' => $expiry]);
    if ($res !== false) {
        setcookie('LOGGED_USER', $selector.':'.$validator, $expired_seconds);

    } else {
        // pleure
    }
}

function get_username() {
    if (isset($_SESSION['userId'])) {
        $username = sqlQueryPrepare("SELECT UserName FROM client WHERE ID = :id", [':id' => $_SESSION['userId']])[0]['UserName'];
        if ($username) return $username;
    }
}

function get_selector() {
    if (get_cookie('LOGGED_USER') !== false) {
        $parts = get_cookie('LOGGED_USER');
        $token = explode(":", $parts);
        $res = sqlQueryPrepare("SELECT * FROM user_tokens WHERE selector = :selector", [':selector' => $token[0]]);
        if (count($res) > 0) {
            return $token[0];
        }
    }

    return false;
}

function delete_token_cookie() {
    $selector = get_selector();
    if ($selector) {
        $res = sqlQueryPrepare("DELETE FROM user_tokens WHERE selector = :selector", [':selector' => $selector]);
        if ($res !== false) {
            setcookie('LOGGED_USER');
        }
    }
}
?>