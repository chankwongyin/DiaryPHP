<?php
session_start();
if (isset($_SESSION["id"]) || isset($_COOKIE["id"])) {
    echo "<script>document.getElementById(\"logoutPage\").style.display=\"block\";</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dairy</title>
    <link rel=" stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">
</head>

<body>
    <div class="container">
        <div class="row" id="logoutPage">
            <div class="col">
                <?php include "./View/logoutPage.php"?>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <header>
                    <h1>Diary</h1>
                    <h2>Created by CHAN Kwong Yin</h2>
                </header>
                <hr>
            </div>
        </div>
        <div class="row" id="loginPage">
            <div class="col-4"></div>
            <div class="col-4 form">
                <?php include "./View/loginPage.php"?>
                <button type="button" class="btn btn-dark">Switch to Sign Up</button>
            </div>
            <div class="col-4"></div>
        </div>
        <div class="row" id="signupPage">
            <div class="col-4"></div>
            <div class="col-4 form">
                <?php include "./View/signupPage.php"?>
                <button type="button" class="btn btn-dark">Switch to Log In</button>
            </div>
            <div class="col-4"></div>
        </div>
        <!-- <div class="row">
            <div class="col">
                <button type="button" class="btn btn-dark">Switch to </button>
            </div>
        </div> -->

        <div class="row" id="diaryPage">
            <div class="col">
                <?php include "./View/diaryPage.php"?>
            </div>
        </div>
    </div>
</body>

</html>