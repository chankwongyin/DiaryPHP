<?php

function signUpUser($connect, $id, $email, $password)
{
    $query = "INSERT INTO users (id, email, password) VALUES (\"" . $id . "\", \"" . $email . "\", \"" . $password . "\")";
    $result = mysqli_query($connect, $query);

}
function logInUser($connect, $email, $password)
{
    //check if email exists
    if (!isEmailExist($connect, $email)) {
        return false;
    } else {
        $query = "SELECT password FROM users WHERE email=\"" . $email . "\"";
        $result = mysqli_query($connect, $query);
        while ($row = $result->fetch_assoc()) {
            if (password_verify($password, $row["password"])) {
                return true;
            }
        }
    }
}
function insertDiary()
{

}

function isEmailExist($connect, $email)
{
    $query = "SELECT id FROM users WHERE email=\"" . $email . "\"";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }

}

function userCount($connect)
{
    $query = "SELECT id From users";
    $result = mysqli_query($connect, $query);
    return mysqli_num_rows($result);
}