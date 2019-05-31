<?php
session_start();

include "database.php";
include "queryController.php";
include "../Model/user.php";

//check if the form signup is sent
if (!isset($_POST["signup"])) {
    //if not set
    die("Sign up failure.");
} else {

    //get the sign up data
    $email = mysqli_real_escape_string($connect, $_POST["email"]);
    $password = password_hash(mysqli_real_escape_string($connect, $_POST["password"]), PASSWORD_DEFAULT);

    //check if the email exists
    if (isEmailExist($connect, $email)) {
        //if it exists
        echo "That email address is taken.<br>";
    } else {
        //if it does not exist, create the user
        $user_id = userCount($connect) + 1;
        $user = new User($user_id, $email, $password);

        //insert the data to DB
        $_SESSION["id"] = signUpUser($connect, $user_id, $email, $password);

    }

}