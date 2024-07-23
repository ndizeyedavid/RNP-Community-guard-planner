<?php
include "../php/connect.php";
include "../php/token.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Survey | Community Guard Planner</title>
    <link rel="stylesheet" href="../assets/css/form.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/sub.css">
    <style>
        form {
            width: 100%;
            padding: 15px;
        }

        .row {
            width: 100%;
            gap: 20px;
        }

        .col {
            width: 50%;
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .inp-cont {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        label {
            font-weight: 700;
            font-size: 18px;
        }

        input:not(input[type='submit']) {
            border-radius: var(--border-md);
            border: 1px solid var(--secondary);
            outline: none;
            padding: 10px;
        }

        .ans {
            width: calc(100% - 40px) !important;
            padding: 10px !important;
            height: 10px !important;
        }

        textarea {
            padding: 10px;
        }

        .answers {
            display: flex;
            flex-wrap: wrap;
        }

        .answer {
            flex: 50%;
            margin-top: 20px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .answer input {
            width: 20px;
            height: 20px;
        }

        .submit {
            width: 100%;
            align-items: center;
            justify-content: center;
            font-family: Inter;
            font-size: 17px;
            font-weight: 400;
            margin-top: 10px;
            border-radius: 40px;
            border: none;
        }
    </style>
</head>

<body>
    <!-- New survey Configs -->
    <?php
    $survey_id = rand();
    ?>
    <div class="form-container">

        <div class="form" style="gap: 0px;">
            <h3 style="margin-top: 250px;">New Survey</h3>
            <button class="btn" onclick="window.history.back();" style="position: absolute; top: 5px; left: 50px;">Back</button>
            <form class="signup" method="POST" action="./php/new.php">
                <div class="row">
                    <div class="col">

                        <div class="inp-cont">
                            <label for="id">Survey Id</label>
                            <input type="text" name="id" value="<?php echo $survey_id; ?>" readonly>
                        </div>

                        <div class="inp-cont">
                            <label for="title">Survey Title</label>
                            <input type="text" name="title">
                        </div>

                        <h3 style="font-size: 18px;">Questions</h3>

                        <div class="inp-cont">
                            <label for="q1">Q1</label>
                            <textarea name="q1" id="q1"></textarea>
                            <div class="answers">
                                <div class="answer">
                                    <input type="text" class="ans" name="q1_ans1" placeholder="Enter option answer1">
                                </div>
                                <div class="answer">
                                    <input type="text" class="ans" name="q1_ans2" placeholder="Enter option answer2">
                                </div>
                                <div class="answer">
                                    <input type="text" class="ans" name="q1_ans3" placeholder="Enter option answer3">
                                </div>
                                <div class="answer">
                                    <input type="text" class="ans" name="q1_ans4" placeholder="Enter option answer4">
                                </div>
                                <div class="answer">
                                    <input type="text" class="ans" name="q1_ans5" placeholder="Enter option answer5">
                                </div>
                                <div class="answer">
                                    <input type="text" class="ans" name="q1_ans6" placeholder="Enter option answer6">
                                </div>
                                <div class="answer">
                                    <input type="text" class="ans" name="q1_ans7" placeholder="Enter option answer7">
                                </div>
                                <div class="answer">
                                    <input type="text" class="ans" name="q1_ans8" placeholder="Enter option answer8">
                                </div>
                            </div>
                        </div>

                        <div class="inp-cont">
                            <label for="q2">Q2</label>
                            <textarea name="q2" id="q2"></textarea>
                            <div class="answers">
                                <div class="answer">
                                    <input type="text" class="ans" name="q2_ans1" placeholder="Enter option answer1">
                                </div>
                                <div class="answer">
                                    <input type="text" class="ans" name="q2_ans2" placeholder="Enter option answer2">
                                </div>
                                <div class="answer">
                                    <input type="text" class="ans" name="q2_ans3" placeholder="Enter option answer3">
                                </div>
                                <div class="answer">
                                    <input type="text" class="ans" name="q2_ans4" placeholder="Enter option answer4">
                                </div>
                                <div class="answer">
                                    <input type="text" class="ans" name="q2_ans5" placeholder="Enter option answer5">
                                </div>
                                <div class="answer">
                                    <input type="text" class="ans" name="q2_ans6" placeholder="Enter option answer6">
                                </div>
                                <div class="answer">
                                    <input type="text" class="ans" name="q2_ans7" placeholder="Enter option answer7">
                                </div>
                                <div class="answer">
                                    <input type="text" class="ans" name="q2_ans8" placeholder="Enter option answer8">
                                </div>
                            </div>
                        </div>

                    </div>
                    <hr>
                    <div class="col">
                        <div class="inp-cont">
                            <label for="q3">Q3</label>
                            <textarea name="q3" id="q3"></textarea>
                            <div class="answers">
                                <div class="answer">
                                    <input type="text" class="ans" name="q3_ans1" placeholder="Enter option answer1">
                                </div>
                                <div class="answer">
                                    <input type="text" class="ans" name="q3_ans2" placeholder="Enter option answer2">
                                </div>
                                <div class="answer">
                                    <input type="text" class="ans" name="q3_ans3" placeholder="Enter option answer3">
                                </div>
                                <div class="answer">
                                    <input type="text" class="ans" name="q3_ans4" placeholder="Enter option answer4">
                                </div>
                                <div class="answer">
                                    <input type="text" class="ans" name="q3_ans5" placeholder="Enter option answer5">
                                </div>
                                <div class="answer">
                                    <input type="text" class="ans" name="q3_ans6" placeholder="Enter option answer6">
                                </div>
                                <div class="answer">
                                    <input type="text" class="ans" name="q3_ans7" placeholder="Enter option answer7">
                                </div>
                                <div class="answer">
                                    <input type="text" class="ans" name="q3_ans8" placeholder="Enter option answer8">
                                </div>
                            </div>
                        </div>

                        <div class="inp-cont">
                            <label for="q4">Q4</label>
                            <textarea name="q4" id="q4"></textarea>
                            <div class="answers">
                                <div class="answer">
                                    <input type="text" class="ans" name="q4_ans1" placeholder="Enter option answer1">
                                </div>
                                <div class="answer">
                                    <input type="text" class="ans" name="q4_ans2" placeholder="Enter option answer2">
                                </div>
                                <div class="answer">
                                    <input type="text" class="ans" name="q4_ans3" placeholder="Enter option answer3">
                                </div>
                                <div class="answer">
                                    <input type="text" class="ans" name="q4_ans4" placeholder="Enter option answer4">
                                </div>
                                <div class="answer">
                                    <input type="text" class="ans" name="q4_ans5" placeholder="Enter option answer5">
                                </div>
                                <div class="answer">
                                    <input type="text" class="ans" name="q4_ans6" placeholder="Enter option answer6">
                                </div>
                                <div class="answer">
                                    <input type="text" class="ans" name="q4_ans7" placeholder="Enter option answer7">
                                </div>
                                <div class="answer">
                                    <input type="text" class="ans" name="q4_ans8" placeholder="Enter option answer8">
                                </div>
                            </div>
                        </div>

                        <div class="inp-cont">
                            <label for="q5">Q5</label>
                            <textarea name="q5" id="q5"></textarea>
                            <div class="answers">
                                <div class="answer">
                                    <input type="text" class="ans" name="q5_ans1" placeholder="Enter option answer1">
                                </div>
                                <div class="answer">
                                    <input type="text" class="ans" name="q5_ans2" placeholder="Enter option answer2">
                                </div>
                                <div class="answer">
                                    <input type="text" class="ans" name="q5_ans3" placeholder="Enter option answer3">
                                </div>
                                <div class="answer">
                                    <input type="text" class="ans" name="q5_ans4" placeholder="Enter option answer4">
                                </div>
                                <div class="answer">
                                    <input type="text" class="ans" name="q5_ans5" placeholder="Enter option answer5">
                                </div>
                                <div class="answer">
                                    <input type="text" class="ans" name="q5_ans6" placeholder="Enter option answer6">
                                </div>
                                <div class="answer">
                                    <input type="text" class="ans" name="q5_ans7" placeholder="Enter option answer7">
                                </div>
                                <div class="answer">
                                    <input type="text" class="ans" name="q5_ans8" placeholder="Enter option answer8">
                                </div>
                            </div>
                            <button class="btn submit" type="submit" name="submit">Submit</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>

        <div class="bg" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.4)), url('../assets/img/survey.jpeg');background-position: center;background-size: cover;background-repeat: no-repeat; height: calc(100% + 260px);">
            <h3>Survey Creation Form</h3>
        </div>

    </div>
    <script src="../assets/js/main.js"></script>
</body>

</html>