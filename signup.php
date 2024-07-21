<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Guard Planner</title>
    <link rel="stylesheet" href="./assets/css/form.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <style>
    </style>
</head>
<body>
    <div class="form-container">
        <div class="form" style="gap: 10px;">
            <h3>Create Account</h3>
            <form class="signup" method="POST" action="#">

                <div class="inp-container">
                    <label for="nid">National Id</label>
                    <input type="text" name="nid" id="nid">
                </div>

                <div class="inp-container">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname">
                </div>

                <div class="inp-container">
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname">
                </div>

                <div class="inp-container">
                    <label for="email">Email Address</label>
                    <input type="text" name="email" id="email">
                </div>

                <div class="inp-container">
                    <label for="phone">Phone Number</label>
                    <input type="text" name="phone" id="phone">
                </div>

                <div class="inp-container">
                    <label for="district">District</label>
                    <input type="text" name="district" id="district">
                </div>

                <div class="inp-container">
                    <label for="province">Province</label>
                    <input type="text" name="province" id="province">
                </div>
                
                <div class="inp-container">
                    <input type="submit" name="submit" value="Sign Up">
                </div>

                <p style="margin-top: 10px;">Already have an account? <a href="login.php">Login</a></p>
            </form>
        </div>
        <div class="bg" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.4)), url('assets/img/signup_bg.jpeg');background-position: center;background-size: cover;background-repeat: no-repeat;">
            <h3>Community guard planner</h3>
            <p>Join us in promoting community safety Excellence</p>
        </div>
    </div>
    <script src="./assets/js/main.js"></script>
</body>
</html>