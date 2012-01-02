<?php

require_once("libs/fb_functions.php");
if (Post ()) {
    require_once("inc/load.inc.php");
    $first = cleanMySQL(ucwords($_POST['firstname']));
    $last = cleanMySQL(ucwords($_POST['lastname']));
    $email = cleanMySQL(strtolower($_POST['email_reg']));
    $email2 = cleanMySQL(strtolower($_POST['email_confirm']));
    $password = sha1($_POST['password'] . "5spoonsOFsalt");
    $sex = cleanMySQL($_POST['sex']);
    $birthdate = cleanMySQL($_POST['birthday_month'] . "/" . $_POST['birthday_day'] . "/" . $_POST['birthday_year']);
    // start PHP validation
    if (!isset($_SESSION)) {
        session_start();
    }
    if (strlen($first) < 3 || strlen($last) < 3 || $email != $email2 || (strlen($sex) > 1 && ($sex != 1 || $sex != 2)) || $_POST['birthday_month'] == 0 || $_POST['birthday_day'] == 0 || $_POST['birthday_year'] == 0) {
        $_SESSION['reg_error'] = "All fields must be filled";
        Back();
        exit();
    }
    // Search for existing user in our "users" table
    $find = mysql_query("SELECT Email FROM Users WHERE Email='$email'", $con) or die(mysql_error());
    if (!mysql_num_rows($find)) {
        $insert = mysql_query("INSERT INTO Users(Email, Pass) VALUES('$email', '$password')", $con) or die(mysql_error());
        if ($insert) {
            $find = mysql_query("SELECT UID FROM Users WHERE Email='$email'", $con) or die(mysql_error());
            $F = mysql_fetch_array($find);
            if ($F) {
                $insert = mysql_query("INSERT INTO Profiles(UID, Firstname, Lastname, Sex, Birthday) VALUES('$F[UID]', '$first', '$last', '$sex', '$birthdate')", $con) or die(mysql_error());
                $_SESSION['account_created'] = "You're account was successfully created.";
                header("Location: login.php");
                exit();
            }
        }
    } else {
        $_SESSION['reg_error'] = "That email address exists.";
        header("Location: login.php");
        exit();
    }
} else {
    header("Location: http://www.facebook.com/");
    exit();
}
?>