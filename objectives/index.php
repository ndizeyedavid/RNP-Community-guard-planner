<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objectives | Community Guard Planner</title>
    <!-- <link rel="stylesheet" href="./assets/css/form.css"> -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/vendor/bootstrap-icons/bootstrap-icons.css">
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
                        <div class="inp-cont"><input type="radio" name="district" value="all" id="district"><label for="district">All</label></div>
                        <div class="inp-cont"><input type="radio" name="district" value="kigali" id="district" checked><label for="district">Kigali</label></div>
                        <div class="inp-cont"><input type="radio" name="district" value="south" id="district"><label for="district">South</label></div>
                        <div class="inp-cont"><input type="radio" name="district" value="north" id="district"><label for="district">North</label></div>
                        <div class="inp-cont"><input type="radio" name="district" value="east" id="district"><label for="district">East</label></div>
                        <div class="inp-cont"><input type="radio" name="district" value="west" id="district"><label for="district">West</label></div>
                    </div>

                </div>

                <div class="top-cont">
                    <h3>Northern Province</h3>

                    <div class="analytics">
                        <div class="survey">
                            <p>2,300 Surveys</p>
                        </div>
                        <div class="crime">
                            <p>1,240 Crimes</p>
                        </div>
                    </div>
                </div>

                <div class="cards" style="flex-wrap: wrap; gap: 26px;">

                    <div class="card">
                        <h3>Gicumbi</h3>

                        <table>
                            <tr>
                                <td>Sectors</td>
                                <td class="value">21</td>
                            </tr>
                            <tr>
                                <td>Crimes</td>
                                <td class="value">21</td>
                            </tr>
                            <tr>
                                <td>Surveys</td>
                                <td class="value">691</td>
                            </tr>
                        </table>
                        <a href="view.php?id" class="btn"> View </a>
                    </div>

                    <div class="card">
                        <h3>Musanze</h3>

                        <table>
                            <tr>
                                <td>Sectors</td>
                                <td class="value">21</td>
                            </tr>
                            <tr>
                                <td>Crimes</td>
                                <td class="value">21</td>
                            </tr>
                            <tr>
                                <td>Surveys</td>
                                <td class="value">691</td>
                            </tr>
                        </table>
                        <a href="view.php?id" class="btn"> View </a>
                    </div>

                    <div class="card">
                        <h3>Rulindo</h3>

                        <table>
                            <tr>
                                <td>Sectors</td>
                                <td class="value">21</td>
                            </tr>
                            <tr>
                                <td>Crimes</td>
                                <td class="value">21</td>
                            </tr>
                            <tr>
                                <td>Surveys</td>
                                <td class="value">691</td>
                            </tr>
                        </table>
                        <a href="view.php?id" class="btn"> View </a>
                    </div>

                    <div class="card">
                        <h3>Gakenke</h3>

                        <table>
                            <tr>
                                <td>Sectors</td>
                                <td class="value">21</td>
                            </tr>
                            <tr>
                                <td>Crimes</td>
                                <td class="value">21</td>
                            </tr>
                            <tr>
                                <td>Surveys</td>
                                <td class="value">691</td>
                            </tr>
                        </table>
                        <a href="view.php?id" class="btn"> View </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="../assets/js/main.js"></script>
</body>

</html>