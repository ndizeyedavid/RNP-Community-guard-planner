<?php

include "./connect.php";

if (isset($_POST["submit"])) {
    $uid = rand();
    $nid = $_POST['nid'];
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $uname = strtolower($fname) . $uid;
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['pswd']);
    $password = md5($password);
    $district = mysqli_real_escape_string($con, $_POST['district']);
    $province = mysqli_real_escape_string($con, $_POST['province']);

    $verify = mysqli_query($con, "SELECT * FROM admin WHERE email='{$email}' OR uname = '{$uname}'");
    if (mysqli_num_rows($verify) == 0) {
        $insert = mysqli_query($con, "INSERT INTO admin(uid, nid, uname, fname, lname, email, District, Province, pswd) 
                VALUES('{$uid}', '{$nid}', '{$uname}', '{$fname}', '{$lname}' , '{$email}' , '{$district}' , '{$province}' , '{$password}')");
        if ($insert) {
            LogThis("$fname $lname created an account to the admin dashboard");
            header("location: session.php?uid=$uid");
        } else {
            header("location: ../signup.php?err=1");
        }
    } else {
        header("location: ../signup.php?err=2");
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
<p style="color: #fff; font-family: sans-serif">Creating Account...</p>

</html>