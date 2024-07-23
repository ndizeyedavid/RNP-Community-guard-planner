<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Guard Planner</title>
    <link rel="stylesheet" href="./assets/css/form.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/vendor/toastify/toast.css">
    <style>
    </style>
</head>

<body>
    <div class="form-container">
        <div class="form" style="gap: 10px;">
            <h3>Create Account</h3>
            <form class="signup" method="POST" action="./php/signup.php">

                <div class="inp-container">
                    <label for="nid">National Id</label>
                    <input type="text" name="nid" maxlength="16" id="nid" onkeyup="validate(this)">
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
                    <label for="pswd">Password</label>
                    <input type="password" name="pswd" id="pswd">
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
                    <input type="submit" name="submit" value="Sign Up" onclick="this.value='Loading...'">
                </div>

                <p style="margin-top: 10px;">Already have an account? <a href="login.php">Login</a></p>
            </form>
        </div>
        <div class="bg" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.4)), url('assets/img/signup_bg.jpeg');background-position: center;background-size: cover;background-repeat: no-repeat;">
            <h3>Community guard planner</h3>
            <p>Join us in promoting community safety Excellence</p>
        </div>
    </div>
    <!-- <script src="./assets/js/main.js"></script> -->
    <script src="./assets/vendor/toastify/toast.js"></script>

    <?php
    if (isset($_GET['err'])) {
        $err = $_GET['err'] ?? '1';
    ?>
        <script>
            Toastify({
                <?php if ($err == 1) { ?>
                    text: "Operation Failed.\nPlease try again",
                <?php } else { ?>
                    text: "User already exists",
                <?php } ?>

                duration: 3000,
                newWindow: true,
                // close: true,
                gravity: "top", // `top` or `bottom`
                position: "left", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "red",
                    textAlign: "center"
                },
                onClick: function() {} // Callback after click
            }).showToast();
        </script>
    <?php } ?>
    <script>
        function validate(inp) {
            if (isNaN(inp.value)) {
                inp.style.background = 'red';
            } else {
                inp.style.background = 'white';
            }
        }
    </script>
</body>

</html>