<?php
include "./connect.php";

if (isset($_POST['submit'])) {
    $uname = mysqli_real_escape_string($con, $_POST['uname']);
    $pswd = mysqli_real_escape_string($con, $_POST['pswd']);
    $pswd = md5($pswd);
    $fetch = mysqli_query($con, "SELECT * FROM admin WHERE uname='{$uname}' OR email='{$uname}'");
    if (mysqli_num_rows($fetch) == 1) {
        $data = mysqli_fetch_assoc($fetch);
        $pswd_check = $data['pswd'];
        $id = $data['uid'];
        if ($pswd == $pswd_check) {
            LogThis("$uname logged into the admin dashboard");
            header("location: session.php?uid=$id");
        } else {

            header("location: ../login.php?err=2");
        }
    } else {
        header("location: ../login.php?err=1");
    }
}
?>
<html>
<style>
    html {
        background-color: #060140D6;
    }

    html,
    body {
        color: #fff;
        background-color: black;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        gap: 50px;
        height: 100%;
    }

    .loader {
        width: 84px;
        height: 84px;
        position: relative;
        overflow: hidden;
    }

    .loader:before,
    .loader:after {
        content: "";
        position: absolute;
        left: 50%;
        bottom: 0;
        width: 64px;
        height: 64px;
        border-radius: 50%;
        background: #FFF;
        transform: translate(-50%, 100%) scale(0);
        animation: push 2s infinite ease-in;
    }

    .loader:after {
        animation-delay: 1s;
    }

    @keyframes push {
        0% {
            transform: translate(-50%, 100%) scale(1);
        }

        15%,
        25% {
            transform: translate(-50%, 50%) scale(1);
        }

        50%,
        75% {
            transform: translate(-50%, -30%) scale(0.5);
        }

        80%,
        100% {
            transform: translate(-50%, -50%) scale(0);
        }
    }
</style>
<span class="loader"></span>
<p style="color: #fff; font-family: sans-serif">Authenticating...</p>

</html>