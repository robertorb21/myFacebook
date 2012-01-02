<?php

if (!isset($_SESSION)) {
    session_start();
}

define("DB_SERVER", "localhost");
define("DB_USER", "FBadm1n");
define("DB_PASS", "123qwe");
define("DB_NAME", "facebook");
$con = @mysql_connect(DB_SERVER, DB_USER, DB_PASS);
@mysql_select_db(DB_NAME, $con);
if (!$con) {
    die('Could not connect to the Database' . mysql_error());
}
?>