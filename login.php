<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Guard Planner</title>
    <link rel="stylesheet" href="./assets/css/form.css">
    <link rel="stylesheet" href="./assets/css/main.css">
</head>
<body>
    <div class="form-container">
        <div class="form">
            <h3>Sign in</h3>
            <form method="POST" action="#">
                <div class="inp-container">
                    <label for="uname">Username</label>
                    <input type="text" name="uname" id="uname">
                </div>

                <div class="inp-container">
                    <label for="pswd">Password</label>
                    <input type="text" name="pswd" id="pswd">
                </div>
                
                <div class="inp-container">
                    <input type="submit" name="submit" value="Login">
                </div>

                <p>Not a member? <a href="signup.php">Sign up</a></p>
            </form>
        </div>
        <div class="bg" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.4)), url('assets/img/login_bg.jpeg');background-position: center;background-size: cover;background-repeat: no-repeat;"></div>
    </div>
    <script src="./assets/js/main.js"></script>
</body>
</html>