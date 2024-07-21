<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action Plans | Community Guard Planner</title>
    <!-- <link rel="stylesheet" href="./assets/css/form.css"> -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/sub.css">
    <link rel="stylesheet" href="../assets/css/form.css">
    <link rel="stylesheet" href="../assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <style>
        input {
            width: 60%;
            height: 38px;
            outline: none;
            border-radius: 35px;
            border: 1px solid rgb(0, 0, 0, 0.2);
            background: none;
            padding: 10px;
        }
    </style>
</head>

<body style="overflow: hidden;background-color: var(--primary_dk);">
    <section class="body-cont" style="overflow-y: hidden;">
        <div class="top-cont">
            <button onclick="window.history.back()" class="btn">Back</button>
            <h3>All Action Plans</h3>
            <button onclick="window.history.back()" class="btn" style="visibility: hidden;">----</button>
        </div>

        <div class="top-cont" style="margin-top: 31px;">
            <h3 style="font-size: 26px;">Gasabo</h3>
            <input type="search" id="search" placeholder="Search...">
            <button onclick="window.history.back()" class="btn" style="visibility: hidden;">----</button>
        </div>

        <div class="filter-cont" style="display: flex; justify-content: space-between;margin-top: 52px;">
            <button class="filter-btn">Date <i class="bi bi-filter"></i></button>
            <a href="action.php" class="btn" style="width: 140px; font-size: 20px; font-weight: 600; justify-content: center;">New</a>
        </div>

        <div class="tb-cont">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Plan Overview</th>
                        <th>Date</th>
                        <th>District</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>The action plan aims to implement targeted strategies to reduce robbery</td>
                        <td>12/01/2024</td>
                        <td>Gasabo</td>
                        <td><a href="full_view.php?id" class="btn" style="height: 28px;">View</a></td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>The action plan aims to implement targeted strategies to reduce robbery</td>
                        <td>12/01/2024</td>
                        <td>Gasabo</td>
                        <td><a href="full_view.php?id" class="btn" style="height: 28px;">View</a></td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>The action plan aims to implement targeted strategies to reduce robbery</td>
                        <td>12/01/2024</td>
                        <td>Gasabo</td>
                        <td><a href="full_view.php?id" class="btn" style="height: 28px;">View</a></td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>The action plan aims to implement targeted strategies to reduce robbery</td>
                        <td>12/01/2024</td>
                        <td>Gasabo</td>
                        <td><a href="full_view.php?id" class="btn" style="height: 28px;">View</a></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </section>
</body>

</html>