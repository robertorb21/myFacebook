<?php

function Post() {
    return $_SERVER['REQUEST_METHOD'] == "POST";
}

function cleanMySQL($var) {
    $var = mysql_real_escape_string($var);
    return $var;
}

function Back() {
    if (isset($_SERVER['HTTP_REFERER'])) {
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
}
function LoggedIn() {
    if(isset($_SESSION['UID']) && $_SESSION['UID'] != '') {
        return true;
    } else {
        return false;
    }
}
?>