<?php
session_start();

include "database.php";
include "queryController.php";

//check if login is set
if (!isset($_POST["login"])) {
    //if login is not set
    die("Login failure.<br>");
} else {
    //if login is set
    //get the data
    $email = mysqli_real_escape_string($connect, $_POST["email"]);
    $stayLoggedIn = $_POST["stayLoggedIn"];
    //log in user
    if (logInUser($connect, $email, mysqli_real_escape_string($connect, $_POST["password"]))) {
        //if login success
        $_SESSION["id"] = getUserId($connect, $email);
        if ($stayLoggedIn == '1') {
            setcookie("id", $_SERVER["id"], time() + 60 * 60 * 24);
        }
        echo "Login success";
    } else {
        //if login fails
        echo "Login no";
    }

}