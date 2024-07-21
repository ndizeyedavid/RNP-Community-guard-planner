<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Report | Community Guard Planner</title>
    <link rel="stylesheet" href="../assets/css/form.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <style>
    </style>
</head>

<body>
    <div class="form-container">

        <div class="form" style="gap: 10px;">
            <h3>Report</h3>
            <button class="btn" onclick="window.history.back();" style="position: absolute; top: 20px; left: 50px;">Back</button>

            <form class="signup" method="POST" action="#" style="margin-top: 20px;">

                <div class="inp-container">
                    <label for="overview">Report Overview</label>
                    <textarea name="overview" id="overview" style="height: 100px;padding: 10px;"></textarea>
                </div>

                <div class="inp-container">
                    <label for="imporvement">Area of Improvement</label>
                    <textarea name="imporvement" id="imporvement" style="height: 100px;padding: 10px;"></textarea>
                </div>

                <div class="inp-container">
                    <label for="recommendations">Recommendations</label>
                    <textarea name="recommendations" id="recommendations" style="height: 100px;padding: 10px;"></textarea>
                </div>

                <div class="inp-container">
                    <input type="submit" name="submit" value="submit">
                </div>

            </form>
        </div>

        <div class="bg" style="background: var(--primary_dk);background-position: center; background-size: cover;background-repeat: no-repeat;">
            <h3>District Report</h3>
            <img src="../assets/img/report.png" style="width: 100px; height: 100px;">
        </div>

    </div>
    <script src="../assets/js/main.js"></script>
</body>

</html>