<!-- <form action="./Controller/loginController.php" method="POST"> -->
<form action="" name="loginForm">
    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
            placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" name="stayLoggedIn" id="stayLoggedIn">
        <label class="form-check-label" for="stayLoggedIn">Keep Me Logged In</label>
    </div>
    <button type="submit" class="btn btn-primary" name="login" id="login" onclick="ajax()">Login</button>
</form>