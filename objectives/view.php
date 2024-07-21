<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>District | Community Guard Planner</title>
    <!-- <link rel="stylesheet" href="./assets/css/form.css"> -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/sub.css">
    <link rel="stylesheet" href="../assets/vendor/bootstrap-icons/bootstrap-icons.css">
</head>

<body style="overflow: hidden;background-color: var(--primary_dk);">
    <section class="body-cont">
        <div class="top-cont">
            <button onclick="window.history.back();" class="btn" style="font-weight: 700; border: none;">Back</button>
            <h3>District Dashboard</h3>
            <button class="btn" style="visibility: hidden;">---</button>
        </div>

        <div class="nav">
            <h3>Musanze District</h3>
            <div class="opt">
                <a href="goal.php" class="btn"><i class="bi bi-plus-circle"></i> Goals </a>
                <a href="action_view.php" class="btn"><i class="bi bi-plus-circle"></i> Action Plan </a>
                <a href="report.php" class="btn"><i class="bi bi-plus-circle"></i> Report </a>
            </div>
        </div>

        <div class="cards-cont">
            <div class="top-cont">
                <h3 style="font-size: 25px;">Surveys</h3>
                <a href="#">View all survey</a>
            </div>

            <div class="cards">
                <div class="card">
                    <p class="dim">Graph loading...</p>
                </div>
                <div class="card">
                    <p class="dim">Graph loading...</p>
                </div>
            </div>
        </div>

        <div class="cards-cont">
            <div class="top-cont">
                <h3 style="font-size: 25px;">Crime Reports</h3>
                <a href="#">View all reported crimes</a>
            </div>

            <div class="cards">
                <div class="card">
                    <p class="dim">Graph loading...</p>
                </div>
                <div class="card">
                    <p class="dim">Graph loading...</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>