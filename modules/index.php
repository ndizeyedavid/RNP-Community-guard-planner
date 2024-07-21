<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modules  | Community Guard Planner</title>
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
                <a href="../crime/"><i class="bi bi-fingerprint"></i> Crime Reports</a>
                <a href="../tasks"><i class="bi bi-clipboard-minus-fill"></i> Tasks</a>
                <a href="../objectives/"><i class="bi bi-bullseye"></i> Objectives</a>
                <a href="../users"><i class="bi bi-people-fill"></i> Users</a>
                <a href="javascript:void(0)"  class="active"><i class="bi bi-stack"></i> Modules</a>
                <a href="../logout"><i class="bi bi-power"></i> Logout</a>
            </div>
        </nav>

        <section class="body-container">

            <div class="even-cont">
                <div class="top-cont">
                    <h3>Skills & Trainings Modules</h3>
                    <div class="inp-cont">
                        <i class="bi bi-search"></i>
                        <input type="search" placeholder="Search..." name="search" id="search">
                    </div>
                    <a href="new.php" class="btn"> <i class="bi bi-plus-circle-fill"></i> New Module </a>
                </div>


                <style>
                    .card{
                        max-width: 350px;
                        height: fit-content;
                        padding: 10px;
                        position: relative;
                    }
                    .link{
                        position: absolute;
                        bottom: 30px;
                        right: 30px;
                        font-size: 40px;
                    }
                    .card .img-cont{
                        width: 100%;
                        height: 175px;
                        border-radius: 20px;
                        background-color: var(--primary);
                    }
                    .card .img-cont img{
                        width: 100%;
                        height: 100%;
                        border-radius: 20px;
                        object-fit: cover;
                        filter: brightness(0.7);
                    }
                    .card .details{
                        /* background-color: red; */
                        width: 100%;
                        display: flex;
                        flex-direction: column;
                        gap: 10px;
                    }
                    .card .details h3{
                        color: var(--primary);
                    }
                    .card .details p{
                        font-weight: 600;
                    }
                    
                </style>
                
                
                <div class="cards" style="flex-wrap: wrap;">

                    <div class="card">
                        <div class="img-cont">
                            <img src="../assets/img/module1.jpeg" alt="Modul Image">
                        </div>
                        <div class="details">
                            <h3>Terrorist Fighting</h3>
                            <p>10 lessons</p>
                            <p class="dim" style="font-size: 14px;font-weight: 400;">0/10</p>
                        </div>
                        <a href="view.php" class="link"><i class="bi bi-box-arrow-up-right"></i></a>
                    </div>
                    
                    <div class="card">
                        <div class="img-cont">
                            <img src="../assets/img/module1.jpeg" alt="Modul Image">
                        </div>
                        <div class="details">
                            <h3>Terrorist Fighting</h3>
                            <p>10 lessons</p>
                            <p class="dim" style="font-size: 14px;font-weight: 400;">0/10</p>
                        </div>
                        <a href="view.php" class="link"><i class="bi bi-box-arrow-up-right"></i></a>
                    </div>
                    
                    <div class="card">
                        <div class="img-cont">
                            <img src="../assets/img/module1.jpeg" alt="Modul Image">
                        </div>
                        <div class="details">
                            <h3>Terrorist Fighting</h3>
                            <p>10 lessons</p>
                            <p class="dim" style="font-size: 14px;font-weight: 400;">0/10</p>
                        </div>
                        <a href="view.php" class="link"><i class="bi bi-box-arrow-up-right"></i></a>
                    </div>
                    
                    <div class="card">
                        <div class="img-cont">
                            <img src="../assets/img/module1.jpeg" alt="Modul Image">
                        </div>
                        <div class="details">
                            <h3>Terrorist Fighting</h3>
                            <p>10 lessons</p>
                            <p class="dim" style="font-size: 14px;font-weight: 400;">0/10</p>
                        </div>
                        <a href="view.php" class="link"><i class="bi bi-box-arrow-up-right"></i></a>
                    </div>
                    
                </div>
            </div>
            

        </section>
    </div>

    <script src="../assets/js/main.js"></script>
</body>

</html>