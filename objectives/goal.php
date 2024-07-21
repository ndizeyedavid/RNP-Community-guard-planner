<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Goal  |  Community Guard Planner</title>
    <link rel="stylesheet" href="../assets/css/form.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <style>
    </style>
</head>

<body>
    <div class="form-container">
        <div class="bg" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.4)), url('../assets/img/goal.png');background-position: center; background-size: cover;background-repeat: no-repeat;">
            <img src="../assets/img/goal_ic.png" style="width: 100px; height: 100px;">
            <h3>Setting Goals to Reduce Crimes </h3>
        </div>
        <div class="form" style="gap: 10px;">
            <h3>Goals Setting</h3>
            <button class="btn" onclick="window.history.back();" style="position: absolute; top: 30px; right: 50px;">Back</button>

            <form class="signup" method="POST" action="#" style="margin-top: 20px;">

                <div class="inp-container">
                    <label for="statement">Goal Statement</label>
                    <textarea name="statement" id="statement" style="height: 100px;padding: 10px;"></textarea>
                </div>

                <div class="inp-container">
                    <label for="objectives">Objectives</label>
                    <textarea name="objectives" id="objectives" style="height: 100px;padding: 10px;"></textarea>
                </div>

                <div class="inp-container">
                    <label for="Performance">Key Performance Indicator</label>
                    <textarea name="Performance" id="Performance" style="height: 70px;padding: 10px;"></textarea>
                </div>

                <div class="inp-container">
                    <label for="timeline">Timeline</label>
                    <textarea name="timeline" id="timeline" style="height: 70px;padding: 10px;"></textarea>
                </div>


                <div class="inp-container">
                    <input type="submit" name="submit" value="submit">
                </div>

            </form>
        </div>
    </div>
    <script src="../assets/js/main.js"></script>
</body>

</html>