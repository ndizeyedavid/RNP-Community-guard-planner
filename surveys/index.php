<?php
include "../php/connect.php";
include "../php/token.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surveys | Community Guard Planner</title>
    <!-- <link rel="stylesheet" href="./assets/css/form.css"> -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/vendor/sweetalert2/dist/sweetalert2.min.css">
</head>

<body style="overflow: hidden;">

    <div class="main-container">
        <nav class="side-navigation">
            <div class="logo">
                <img src="../assets/img/logo.png" alt="">
                <p>Administrator</p>
            </div>

            <div class="navs">
                <a href="../"><i class="bi bi-grid-fill"></i> Dashboard</a>
                <a href="../surveys/" class="active"><i class="bi bi-journal-check"></i> Surveys</a>
                <a href="../crime"><i class="bi bi-fingerprint"></i> Crime Reports</a>
                <a href="../tasks"><i class="bi bi-clipboard-minus-fill"></i> Tasks</a>
                <a href="../objectives"><i class="bi bi-bullseye"></i> Objectives</a>
                <a href="../users"><i class="bi bi-people-fill"></i> Users</a>
                <a href="../modules"><i class="bi bi-stack"></i> Modules</a>
                <a href="../logout"><i class="bi bi-power"></i> Logout</a>
            </div>
        </nav>

        <section class="body-container">
            <div class="even-cont">
                <div class="top-cont">
                    <h3>All Survey Feedbacks</h3>
                    <div class="inp-cont">
                        <i class="bi bi-search"></i>
                        <input type="search" placeholder="Search..." name="search" id="search">
                    </div>
                    <a href="new.php" class="btn"> <i class="bi bi-plus-circle-fill"></i> New Survey </a>
                </div>

                <div class="cards">

                    <div class="card">
                        <p class="dim">Kigali</p>
                        <p class="value">1,200</p>
                    </div>

                    <div class="card">
                        <p class="dim">South</p>
                        <p class="value">670</p>
                    </div>

                    <div class="card">
                        <p class="dim">North</p>
                        <p class="value">2,300</p>
                    </div>

                    <div class="card">
                        <p class="dim">East</p>
                        <p class="value">890</p>
                    </div>

                    <div class="card">
                        <p class="dim">west</p>
                        <p class="value">400</p>
                    </div>

                </div>

                <div class="filter-cont">
                    <button class="filter-btn"> District <i class="bi bi-filter"></i></button>
                    <button class="filter-btn"> Survey ID <i class="bi bi-filter"></i></button>
                    <button class="filter-btn"> Most recent <i class="bi bi-filter"></i></button>

                    <!-- radio filters -->

                    <!-- spacings -->
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <!-- spacings -->
                    <div class="inp-cont"><input type="radio" name="district" value="all" id="district"><label for="district">All</label></div>
                    <div class="inp-cont"><input type="radio" name="district" value="kigali" id="district" checked><label for="district">Kigali</label></div>
                    <div class="inp-cont"><input type="radio" name="district" value="south" id="district"><label for="district">South</label></div>
                    <div class="inp-cont"><input type="radio" name="district" value="north" id="district"><label for="district">North</label></div>
                    <div class="inp-cont"><input type="radio" name="district" value="east" id="district"><label for="district">East</label></div>
                    <div class="inp-cont"><input type="radio" name="district" value="west" id="district"><label for="district">West</label></div>

                </div>

                <div class="tb-cont">

                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Names</th>
                                <th>Phone</th>
                                <th>Province</th>
                                <th>District</th>
                                <th>Survey Id</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>Mellow Junior</td>
                                <td>0784146662</td>
                                <td>Kigali city</td>
                                <td>Gasabo</td>
                                <td>S001</td>
                                <td><a class="btn" href="view.php?id">View</a></td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Mellow Junior</td>
                                <td>0784146662</td>
                                <td>Kigali city</td>
                                <td>Gasabo</td>
                                <td>S001</td>
                                <td><a class="btn" href="view.php?id">View</a></td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Mellow Junior</td>
                                <td>0784146662</td>
                                <td>Kigali city</td>
                                <td>Gasabo</td>
                                <td>S001</td>
                                <td><a class="btn" href="view.php?id">View</a></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>

    <script src="../assets/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script>
        <?php if (isset($_GET['succ'])) { ?>
            throwNotif("Survey Created", "success");
        <?php } else if ($_GET['err']) { ?>
            throwNotif("Operation Failed", "error");
        <?php } ?>
    </script>
</body>

</html>