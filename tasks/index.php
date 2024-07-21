<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks | Community Guard Planner</title>
    <!-- <link rel="stylesheet" href="./assets/css/form.css"> -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <style>
        .inp-cont{
            display: flex;
            flex-direction: column;
            gap: 14px;
        }
        input, textarea{
            width: 502px;
            height: 46px;
            border-radius: var(--border-sm);
            border: 1px solid #000;
            padding: 0 10px;
            outline: none;
        }
        input:focus, textarea:focus{
            /* border-color: var(--primary); */
            box-shadow: 0 0 0px 3px rgb(97, 88, 206, 0.4);

        }        

        button[type='submit']{
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


        button[type='submit']:hover{
            background: var(--secondary);
            cursor: pointer;
        }
        button[type='submit']:focus{
            box-shadow: 0 0 0px 3px var(--secondary);
        }
        
    </style>
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
                            <div class="card">
                                <h3>Total Tasks</h3>
                                <i class="bi bi-journal-check"></i>
                                <p>50</p>
                            </div>
                            <div class="card">
                                <h3>Total Tasks</h3>
                                <i class="bi bi-journal-check"></i>
                                <p>50</p>
                            </div>
                            <div class="card">
                                <h3>Total Tasks</h3>
                                <i class="bi bi-journal-check"></i>
                                <p>50</p>
                            </div>
                            <div class="card">
                                <h3>Total Tasks</h3>
                                <i class="bi bi-journal-check"></i>
                                <p>50</p>
                            </div>
                        </div>
                    </div>

                    <div class="task-cont">
                        <div class="filter-cont">
                            <h3>All Tasks</h3>
                            <div class="filter-opt">
                                <input type="search" placeholder="Search...." id="search">
                                <button class="filter-btn"> <i class="bi bi-filter"></i> Status</button>
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
                                    <tr>
                                        <td>1</td>
                                        <td>Making money</td>
                                        <td><span class="badge success">Complete</span></td>
                                        <td>DP Mellow</td>
                                        <td>03/2/2024</td>
                                        <td><a href=""><i class="bi bi-box-arrow-up-right"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Making money</td>
                                        <td><span class="badge primary">Pending</span></td>
                                        <td>DP Mellow</td>
                                        <td>03/2/2024</td>
                                        <td><a href=""><i class="bi bi-box-arrow-up-right"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="right-cont">
                    <a href="javascript:void(0)" onclick="displayModal()" class="btn"> <i class="bi-plus-circle"></i> Add New Task</a>

                    <div class="summary">
                        <div class="top-cont">
                            <h3>Recent Tasks</h3>
                            <p>Thur, 09 May 2024</p>
                        </div>

                        <div class="sum-cont">

                            <div class="badge success">
                                <div class="details">
                                    <h3>Patrol Scheduling</h3>
                                    <p>Patrol scheduling officer</p>
                                    <span class="success" style="color:#079204;">Completed</span>
                                </div>
                                <a href=""><i class="bi bi-box-arrow-up-right"></i></a>
                            </div>

                            <div class="badge primary">
                                <div class="details">
                                    <h3>Patrol Scheduling</h3>
                                    <p>Patrol scheduling officer</p>
                                    <span class="primary" style="color:#0B008D;">Pending</span>
                                </div>
                                <a href=""><i class="bi bi-box-arrow-up-right"></i></a>
                            </div>

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

            <form action="#" style="margin-top: 30px;">

                <div class="inp-cont">
                    <label for="task">Task</label>
                    <input type="text" name="task">
                </div>

                <div class="inp-cont">
                    <label for="task">Task Description</label>
                    <input type="text" name="description">
                </div>

                <div class="inp-cont">
                    <label for="assigned">Assigned to</label>
                    <input type="text" name="assigned">
                </div>

                <div class="inp-cont">
                    <label for="date">Date</label>
                    <input type="date" name="date">
                </div>

                <div class="inp-cont">
                    <button type="submit" name="submit">Submit</button>
                </div>
                
            </form>
        </div>
    </div>
    <script src="../assets/js/main.js"></script>
</body>

</html>