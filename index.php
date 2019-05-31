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
                <button type="button" class="btn btn-dark" onclick="toSignUpPage()">Switch to Sign Up</button>
            </div>
            <div class="col-4"></div>
        </div>
        <div class="row" id="signupPage">
            <div class="col-4"></div>
            <div class="col-4 form">
                <?php include "./View/signupPage.php"?>
                <button type="button" class="btn btn-dark" onclick="toLogInPage()">Switch to Log In</button>
            </div>
            <div class="col-4"></div>
        </div>
        <div class="row" id="diaryPage">
            <div class="col">
                <!-- <?php include "./View/diaryPage.php"?> -->

            </div>
        </div>
    </div>

    <script>
    function toSignUpPage() {
        document.getElementByID("#loginPage").style.display = "none";
        document.getElementByID("#signupPage").style.display = "block";

    }

    function toLogInPage() {
        document.getElementByID("#signupPage").style.display = "none";
        document.getElementByID("#loginPage").style.display = "block";
        // $("#loginPage").show();
        // $("#signupPage").hide();
    }
    function ajax(){
     var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            }
        };
        xmlhttp.open("GET", "./Controller/loginController.php?email=test%40test.com&password=123456&login=", true);
        xmlhttp.send();
    }
    </script>

    <script src="./js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    </script>
</body>

</html>