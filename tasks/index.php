<?php
include "../php/connect.php";
include "../php/token.php";
function status($status)
{
    $status = strtolower($status);
    if ($status == "pending") {
        return '<span class="badge primary">Pending</span>';
    } else if ($status == "complete") {
        return '<span class="badge success">Complete</span>';
    } else {
        return '<span class="badge danger">Due reached</span>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks | Community Guard Planner</title>
    <!-- <link rel="stylesheet" href="./assets/css/form.css"> -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/vendor/sweetalert2/dist/sweetalert2.min.css">
    <style>
        .inp-cont {
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        input,
        textarea {
            width: 502px;
            height: 46px;
            border-radius: var(--border-sm);
            border: 1px solid #000;
            padding: 0 10px;
            outline: none;
        }

        input:focus,
        textarea:focus {
            /* border-color: var(--primary); */
            box-shadow: 0 0 0px 3px rgb(97, 88, 206, 0.4);

        }

        button[type='submit'] {
            background: var(--primary);
            /* background: red; */
            font-size: 25px;
            font-weight: 700;
            color: #fff;
            outline: none;
            border: none;
            border-radius: 40px !important;
            margin-top: 20px;
            /* width: 389px; */
            height: 64px;
            border-radius: 30px;

        }


        button[type='submit']:hover {
            background: var(--secondary);
            cursor: pointer;
        }

        button[type='submit']:focus {
            box-shadow: 0 0 0px 3px var(--secondary);
        }

        .inp-cont {
            margin-top: 10px;
        }
    </style>
</head>

<body style="overflow: hidden;" onload="preloader()">

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
                <a href="../tasks" class="active"><i class="bi bi-clipboard-minus-fill"></i> Tasks</a>
                <a href="../objectives"><i class="bi bi-bullseye"></i> Objectives</a>
                <a href="../users"><i class="bi bi-people-fill"></i> Users</a>
                <a href="../modules"><i class="bi bi-stack"></i> Modules</a>
                <a href="../logout"><i class="bi bi-power"></i> Logout</a>
            </div>
        </nav>

        <section class="body-container">
            <div class="main-cont">
                <div class="left-cont">
                    <div class="top-cont">
                        <h3 class="title">Dashboard</h3>
                        <div class="cards" style="flex-wrap: nowrap;">

                            <?php
                            function analytics($status)
                            {
                                global $con;
                                if (!empty($status)) {
                                    $fetch = mysqli_query($con, "SELECT * FROM tasks WHERE status='{$status}'");
                                } else {
                                    $fetch = mysqli_query($con, "SELECT * FROM tasks");
                                }

                                return mysqli_num_rows($fetch);
                            }
                            ?>
                            <div class="card">
                                <h3>Total Tasks</h3>
                                <i class="bi bi-journal-text"></i>
                                <p><?php echo analytics(''); ?></p>
                            </div>
                            <div class="card">
                                <h3>Completed Tasks</h3>
                                <i class="bi bi-journal-check"></i>
                                <p><?php echo analytics('complete'); ?></p>
                            </div>
                            <div class="card">
                                <h3>Pending Tasks</h3>
                                <i class="bi bi-stopwatch"></i>
                                <p><?php echo analytics('pending'); ?></p>
                            </div>
                            <div class="card">
                                <h3>Due Tasks</h3>
                                <i class="bi bi-hourglass-split"></i>
                                <p><?php echo analytics('due'); ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="task-cont">
                        <div class="filter-cont">
                            <h3>All Tasks</h3>
                            <div class="filter-opt">
                                <input type="search" placeholder="Search...." onkeyup="search(this, document.querySelector('table'))" id="search">
                                <button class="filter-btn" onclick="sort(document.querySelector('table'), 2)"> <i class="bi bi-filter"></i> Status</button>
                            </div>
                        </div>

                        <div class="tb-cont">
                            <table>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Task</th>
                                        <th>Status</th>
                                        <th>Assigned to</th>
                                        <th>Date</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $fetch = mysqli_query($con, "SELECT * FROM tasks");
                                    if (mysqli_num_rows($fetch) > 0) {
                                        $count = 0;
                                        while ($row = mysqli_fetch_array($fetch)) {
                                    ?>
                                            <tr>
                                                <td><?php echo ++$count; ?></td>
                                                <td><?php echo $row['taskName']; ?></td>
                                                <td><?php echo status($row['status']); ?></td>
                                                <td><?php echo $row['assigned']; ?></td>
                                                <td><?php echo $row['dueDate'] ?></td>
                                                <td><a href="#"><i class="bi bi-box-arrow-up-right"></i></a></td>
                                            </tr>
                                        <?php }
                                    } else { ?>
                                        <tr>
                                            <td colspan="6" align="center">No Tasks created</td>
                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="right-cont">
                    <a href="javascript:void(0)" onclick="displayModal()" class="btn"> <i class="bi-plus-circle"></i> Add New Task</a>

                    <div class="summary">
                        <div class="top-cont">
                            <h3>Tasks Due Today</h3>
                            <p><?php echo date("D, d M Y") ?></p>
                        </div>

                        <div class="sum-cont">

                            <?php
                            $today = date("Y-m-d");
                            $t_fetch = mysqli_query($con, "SELECT * FROM tasks WHERE dueDate = '{$today}'");
                            function t_status($status)
                            {

                                if ($status == 'pending') {
                                    echo "primary";
                                } else if ($status == "complete") {
                                    echo "success";
                                } else {
                                    echo "danger";
                                }
                            }
                            if (mysqli_num_rows($t_fetch) > 0) {
                                while ($row = mysqli_fetch_array($t_fetch)) {
                            ?>

                                    <div class="badge <?php t_status($row['status']); ?>">
                                        <div class="details">
                                            <h3><?php echo $row['taskName'] ?></h3>
                                            <p><?php echo $row['assigned'] ?></p>
                                            <span class="success" style="color:#000;"><?php echo $row['status'] ?></span>
                                        </div>
                                        <a href=""><i class="bi bi-box-arrow-up-right"></i></a>
                                    </div>
                                <?php }
                            } else { ?>
                                <p class="dim" align="center" style="margin-top: 90px;">No tasks due today</p>
                            <?php } ?>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <div class="modal-container" style="display: none;">
        <div class="modal">
            <h3>Add New Task</h3>
            <a href="javascript:void(0);" onclick="document.querySelector('.modal-container').style.display='none';" style="color: var(--danger); position: absolute; right: 30px; font-size: 30px;"><i class="bi bi-x-lg"></i></a>

            <form method="POST" action="./php/new.php" style="margin-top: 30px;">

                <div class="inp-cont">
                    <label for="task">Task</label>
                    <input type="text" name="task" required>
                </div>

                <div class="inp-cont">
                    <label for="task">Task Description</label>
                    <input type="text" name="description" required>
                </div>

                <div class="inp-cont">
                    <label for="assigned">Assigned to</label>
                    <input type="text" name="assigned" required>
                </div>

                <div class="inp-cont">
                    <label for="date">Due Date</label>
                    <input type="date" name="date" required>
                </div>

                <div class="inp-cont">
                    <button type="submit" name="submit">Submit</button>
                </div>

            </form>
        </div>
    </div>
    <div class="preloader-cont">
        <div class="preloader"></div>
    </div>
    <script src="../assets/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script>
        <?php if (isset($_GET['succ'])) { ?>
            throwNotif("Task assigned successfuly", "success");
        <?php } else if ($_GET['err']) { ?>
            throwNotif("Operation Failed", "error");
        <?php } ?>
    </script>
</body>

</html>