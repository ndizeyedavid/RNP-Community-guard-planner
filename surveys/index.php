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
                        <input type="search" placeholder="Search..." onkeyup="search(this, document.querySelector('table'))" name="search" id="search">
                    </div>
                    <a href="new.php" class="btn"> <i class="bi bi-plus-circle-fill"></i> New Survey </a>
                </div>

                <div class="cards">
                    <!-- Fetching attendants details  -->
                    <?php
                    function analytics($province)
                    {
                        global $con;
                        $province = strtolower($province);
                        $fetch = mysqli_query($con, "SELECT * from survey_attendants WHERE location='{$province}'");

                        return mysqli_num_rows($fetch);
                    }
                    ?>
                    <div class="card">
                        <p class="dim">Kigali</p>
                        <p class="value"><?php echo analytics('kigali') ?></p>
                    </div>

                    <div class="card">
                        <p class="dim">South</p>
                        <p class="value"><?php echo analytics('southern') ?></p>
                    </div>

                    <div class="card">
                        <p class="dim">North</p>
                        <p class="value"><?php echo analytics('Northern') ?></p>
                    </div>

                    <div class="card">
                        <p class="dim">East</p>
                        <p class="value"><?php echo analytics('eastern') ?></p>
                    </div>

                    <div class="card">
                        <p class="dim">west</p>
                        <p class="value"><?php echo analytics('western') ?></p>
                    </div>

                </div>

                <div class="filter-cont">
                    <button class="filter-btn" onclick="sort(document.querySelector('table'), 4)"> District <i class="bi bi-filter"></i></button>
                    <button class="filter-btn" onclick="sort(document.querySelector('table'), 5)"> Survey ID <i class="bi bi-filter"></i></button>
                    <button class="filter-btn" onclick="window.location.assign('./')"> Most recent <i class="bi bi-filter"></i></button>

                    <!-- radio filters -->

                    <!-- spacings -->
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <!-- spacings -->
                    <div class="inp-cont"><input type="radio" name="district" onclick="filter(this.value, document.querySelector('table'))" value="all" id="district" checked><label for="district">All</label></div>
                    <div class="inp-cont"><input type="radio" name="district" onclick="filter(this.value, document.querySelector('table'))" value="kigali" id="district"><label for="district">Kigali</label></div>
                    <div class="inp-cont"><input type="radio" name="district" onclick="filter(this.value, document.querySelector('table'))" value="south" id="district"><label for="district">South</label></div>
                    <div class="inp-cont"><input type="radio" name="district" onclick="filter(this.value, document.querySelector('table'))" value="north" id="district"><label for="district">North</label></div>
                    <div class="inp-cont"><input type="radio" name="district" onclick="filter(this.value, document.querySelector('table'))" value="east" id="district"><label for="district">East</label></div>
                    <div class="inp-cont"><input type="radio" name="district" onclick="filter(this.value, document.querySelector('table'))" value="west" id="district"><label for="district">West</label></div>


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

                            <?php
                            $fetch = mysqli_query($con, "SELECT users.fname, users.lname, users.phone, users.province, users.district, survey_attendants.surveyId FROM survey_attendants INNER JOIN users ON survey_attendants.userId = users.uid;");

                            if (mysqli_num_rows($fetch) > 0) {
                                $count = 0;
                                while ($row = mysqli_fetch_assoc($fetch)) {
                            ?>
                                    <tr>
                                        <td><?php echo ++$count; ?></td>
                                        <td><?php echo $row['fname'] . ' ' . $row['lname']; ?></td>
                                        <td><?php echo $row['phone']; ?></td>
                                        <td><?php echo $row['province']; ?></td>
                                        <td><?php echo $row['district']; ?></td>
                                        <td><?php echo $row['surveyId']; ?></td>
                                        <td><a class="btn" href="view.php?id=<?php echo $row['surveyId']; ?>">View</a></td>
                                    </tr>
                                <?php }
                            } else { ?>
                                <tr>
                                    <td colspan="7" align="center">No Survey Feedback Yet</td>
                                </tr>
                            <?php } ?>

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