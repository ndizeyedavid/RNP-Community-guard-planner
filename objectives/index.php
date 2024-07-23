<?php
include "../php/connect.php";
include "../php/token.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objectives | Community Guard Planner</title>
    <!-- <link rel="stylesheet" href="./assets/css/form.css"> -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <style>
        .loading-cont {
            width: 100%;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .loading {
            width: 80px;
            height: 80px;
        }
    </style>
</head>

<body style="overflow: hidden;" onload="preloader();">

    <div class="main-container">
        <nav class="side-navigation">
            <div class="logo">
                <img src="../assets/img/logo.png" alt="">
                <p>Administrator</p>
            </div>

            <div class="navs">
                <a href="../"><i class="bi bi-grid-fill"></i> Dashboard</a>
                <a href="../surveys/"><i class="bi bi-journal-check"></i> Surveys</a>
                <a href="../crime"><i class="bi bi-fingerprint"></i> Crime Reports</a>
                <a href="../tasks"><i class="bi bi-clipboard-minus-fill"></i> Tasks</a>
                <a href="../objectives" class="active"><i class="bi bi-bullseye"></i> Objectives</a>
                <a href="../users"><i class="bi bi-people-fill"></i> Users</a>
                <a href="../modules"><i class="bi bi-stack"></i> Modules</a>
                <a href="../logout"><i class="bi bi-power"></i> Logout</a>
            </div>
        </nav>

        <section class="body-container obj">
            <div class="even-cont" style="gap: 34px;">

                <div class="filter-cont" style="justify-content: space-between;">
                    <p style="font-size: 25px;font-weight: 600;">All Districts Structures</p>

                    <!-- radio filters -->

                    <!-- spacings -->
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <!-- spacings -->
                    <div style="display: flex; gap: 10px;">
                        <div class="inp-cont"><input type="radio" name="district" onclick="loadIt('all');" value="all" id="district" checked><label for="district">All</label></div>
                        <div class="inp-cont"><input type="radio" name="district" onclick="loadIt('kigali');" value="kigali" id="district"><label for="district">Kigali</label></div>
                        <div class="inp-cont"><input type="radio" name="district" onclick="loadIt('south');" value="south" id="district"><label for="district">South</label></div>
                        <div class="inp-cont"><input type="radio" name="district" onclick="loadIt('north');" value="north" id="district"><label for="district">North</label></div>
                        <div class="inp-cont"><input type="radio" name="district" onclick="loadIt('east');" value="east" id="district"><label for="district">East</label></div>
                        <div class="inp-cont"><input type="radio" name="district" onclick="loadIt('west');" value="west" id="district"><label for="district">West</label></div>

                    </div>

                </div>

                <div class="top-cont">
                    <h3 style="text-transform: capitalize;"><b id="target">Northern</b> Province</h3>

                    <div class="analytics">
                        <?php
                        function analytics($table)
                        {
                            global $con;
                            $data = mysqli_query($con, "SELECT * FROM $table");

                            return mysqli_num_rows($data);
                        }
                        ?>
                        <div class="survey">
                            <p><?php echo analytics("survey_attendants"); ?> Surveys</p>
                        </div>
                        <div class="crime">
                            <p><?php echo analytics("crime_report"); ?> Crimes</p>
                        </div>
                    </div>
                </div>

                <div class="cards" id="out" style="flex-wrap: wrap; gap: 26px;">
                    <div class="loading-cont">
                        <div class="loading"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="preloader-cont">
        <div class="preloader"></div>
    </div>
    <script src="../assets/js/rwanda.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

</html>