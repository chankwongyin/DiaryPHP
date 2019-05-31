<?php
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

    //log in user
    if (logInUser($connect, $email, mysqli_real_escape_string($connect, $_POST["password"]))) {
        //if login success
        echo "Login success";
    } else {
        //if login fails
        echo "Login no";
    }

}