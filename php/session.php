<?php

session_start();

include "./connect.php";

if (isset($_GET['uid'])) {
    $uid = $_GET['uid'];

    $fetch = mysqli_query($con, "SELECT * FROM admin WHERE $uid='{$uid}'");

    $data = mysqli_fetch_assoc($fetch);

    $_SESSION['id'] = $data['uid'];
    $_SESSION['uname'] = $data['uname'];
    $_SESSION['fname'] = $data['fname'];
    $_SESSION['lname'] = $data['lname'];
    $_SESSION['email'] = $data['email'];
    $_SESSION['district'] = $data['District'];
    $_SESSION['province'] = $data['Province'];

    if (isset($_SESSION['id'])) {
        header("location: ../");
    } else {
        header("location: ../signup.php?err=1");
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
<p style="color: #fff; font-family: sans-serif">Loading...</p>

</html>