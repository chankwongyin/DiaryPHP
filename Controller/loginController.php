<?php
session_start();

include "database.php";
include "queryController.php";
include "diaryController.php";

//check if login is set
if (!isset($GET["login"])) {
    //if login is not set
    die("Login failure.<br>");
} else {
    //if login is set
    //get the data
    $email = mysqli_real_escape_string($connect, $GET["email"]);
    // $stayLoggedIn = $_POST["stayLoggedIn"];
    //log in user
    if (logInUser($connect, $email, mysqli_real_escape_string($connect, $_GET["password"]))) {
        //if login success
        // $_SESSION["id"] = getUserId($connect, $email);
        // if ($stayLoggedIn == '1') {
        //     setcookie("id", $_SERVER["id"], time() + 60 * 60 * 24);
        // }
        $diaries = getDiary($connect, getUserId($connect, $email));
        echo "Login success";
        echo getTheView($diaries);
    } else {
        //if login fails
        echo "Login no";
    }

}