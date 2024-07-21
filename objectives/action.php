<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New action plan | Community Guard Planner</title>
    <!-- <link rel="stylesheet" href="./assets/css/form.css"> -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/sub.css">
    <link rel="stylesheet" href="../assets/css/form.css">
    <link rel="stylesheet" href="../assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <style>
        .inp-container {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 10px;
        }

        .inp-container label {
            font-weight: 600;
        }

        .body-cont {
            /* width: 1182px; */
            margin: 10px 150px;
        }

        form {
            height: 100%;
        }
    </style>
</head>

<body style="overflow: hidden;background-color: var(--primary_dk);">
    <section class="body-cont">
        <div class="top-cont">
            <button class="btn" onclick="window.history.back()">Back</button>
            <h3>Action Planning</h3>
            <button class="btn" onclick="window.history.back()" style="visibility: hidden;">---</button>
        </div>

        <form action="">
            <div class="row">
                <div class="column left">

                    <div class="inp-container">
                        <label for="overview">Plan Overview</label>
                        <textarea name="overview" id="overview" style="height: 100px;padding: 10px;"></textarea>
                    </div>

                    <div class="inp-container">
                        <label for="actions">Specific Actions</label>
                        <textarea name="actions" id="actions" style="height: 100px;padding: 10px;"></textarea>
                    </div>

                    <div class="inp-container">
                        <label for="budget">Budget and resource allocation</label>
                        <textarea name="budget" id="budget" style="height: 100px;padding: 10px;"></textarea>
                    </div>

                </div>
                <div class="column right">

                    <div class="inp-container">
                        <label for="milestones">Timelines and Milestones</label>
                        <textarea name="milestones" id="milestones" style="height: 100px;padding: 10px;"></textarea>
                    </div>

                    <div class="inp-container">
                        <label for="responsibility">Responsibility and Accountability</label>
                        <textarea name="responsibility" id="responsibility" style="height: 100px;padding: 10px;"></textarea>
                    </div>

                    <div class="inp-container">
                        <label for="monitoring">Monitoring and Evaluation process</label>
                        <textarea name="monitoring" id="monitoring" style="height: 100px;padding: 10px;"></textarea>
                    </div>

                </div>
            </div>
            <!-- <center>     -->
            <input type="submit" value="Submit" name="submit" style="position: absolute;left: 535px; bottom: 50px;width: 400px;height: 70px;border-radius: 40px;">
            <!-- </center> -->
        </form>
    </section>
</body>

</html>