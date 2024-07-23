<?php
include "./php/connect.php";
include "./php/token.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Guard Planner</title>
    <!-- <link rel="stylesheet" href="./assets/css/form.css"> -->
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/vendor/bootstrap-icons/bootstrap-icons.css">
</head>

<body style="overflow: hidden;" onload="preloader()">

    <div class="main-container">
        <nav class="side-navigation">
            <div class="logo">
                <img src="./assets/img/logo.png" alt="">
                <p>Administrator</p>
            </div>

            <div class="navs">
                <a href="#" class="active"><i class="bi bi-grid-fill"></i> Dashboard</a>
                <a href="surveys/"><i class="bi bi-journal-check"></i> Surveys</a>
                <a href="crime/"><i class="bi bi-fingerprint"></i> Crime Reports</a>
                <a href="tasks"><i class="bi bi-clipboard-minus-fill"></i> Tasks</a>
                <a href="objectives/"><i class="bi bi-bullseye"></i> Objectives</a>
                <a href="users"><i class="bi bi-people-fill"></i> Users</a>
                <a href="modules"><i class="bi bi-stack"></i> Modules</a>
                <a href="logout"><i class="bi bi-power"></i> Logout</a>
            </div>
        </nav>

        <section class="body-container">
            <div class="cards">

                <div class="card">
                    <table>
                        <tr>
                            <td>Total Crimes:</td>
                            <td>5879</td>
                        </tr>
                        <tr>
                            <td>Crime Rate</td>
                            <td>3.6</td>
                        </tr>
                    </table>
                </div>

                <div class="card">
                    <div class="categories">

                        <div class="cat">
                            <div class="value" style="background-color: #05EE00;">2,450</div>
                            <p>Others</p>
                        </div>

                        <div class="cat">
                            <div class="value" style="background-color: #1300EE;">1,745</div>
                            <p>Robbery</p>
                        </div>

                        <div class="cat">
                            <div class="value" style="background-color: #EE000E;">1,000</div>
                            <p>Drug</p>
                        </div>

                        <div class="cat">
                            <div class="value" style="background-color: #620090;">684</div>
                            <p>Violence</p>
                        </div>
                    </div>
                </div>

                <div class="dim card" style="align-items: center; justify-content: center; height: 200px;">Graph loading...</div>
                <div class="dim card" style="align-items: center; justify-content: center; height: 200px;">Graph loading...</div>

                <div class="dim card" style="align-items: center; justify-content: center; height: 200px;">Graph loading...</div>
                <div class="dim card" style="align-items: center; justify-content: center; height: 200px;">Graph loading...</div>

            </div>
        </section>
    </div>

    <div class="preloader-cont">
        <div class="preloader"></div>
    </div>
    <script src="./assets/js/main.js"></script>
</body>

</html>