<?php
include "../php/connect.php";
include "../php/token.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey | Community Guard Planner</title>
    <!-- <link rel="stylesheet" href="./assets/css/form.css"> -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/sub.css">
    <link rel="stylesheet" href="../assets/css/form.css">
    <link rel="stylesheet" href="../assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <style>
        .detail-cont {
            margin-top: 16px;
            width: 856px;
            border: 1px solid #000;
            padding: 15px 30px;
        }

        .detail-cont h3 {
            font-size: 25px;
            font-weight: 700;

        }

        table {
            margin-top: 24px;
            width: 100%;
        }

        table tr {
            height: 34px;
        }

        table tr td {
            font-weight: 600;
        }

        .print:hover:before {
            content: "Print";
        }

        .survey {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .survey .question {
            font-family: Inter;
            font-size: 22px;
            font-weight: 500;
            display: flex;
            flex-direction: column;
            gap: 20px;
            width: 756px;
        }

        .survey .answer {
            font-size: 20px;
            font-weight: 700;
            color: var(--success);
        }
    </style>
</head>

<body style="overflow: hidden;background-color: var(--primary_dk);" onload="preloader()">
    <section class="body-cont" style="overflow-y: auto;">

        <div class="top-cont">
            <div class="btn print" onclick="print()" style="border-radius: 4px; width: 100px; justify-content: center;cursor: default;">S001</div>
            <h3>Survey Feedback</h3>
            <button onclick="window.history.back();" class="btn">Back</button>
        </div>

        <div class="detail-cont">
            <h3>User Information</h3>
            <table>
                <tr>
                    <td>Name: Mellow Junior</td>
                    <td>E-mail: mellow@gmail.com</td>
                </tr>

                <tr>
                    <td>Phone: 0788654321</td>
                    <td>Province: Bugesera</td>
                </tr>

                <tr>
                    <td>District: Gasabo</td>
                </tr>

            </table>
        </div>

        <h3 style="margin: 20px 0;">Questions</h3>

        <div class="survey">
            <div class="question">
                <p>Q1. In your opinion, what are the top three safety concerns facing your neighborhood? </p>
                <p class="answer">Answer: Burglary/theft </p>
            </div>

            <div class="question">
                <p>Q2. In your opinion, what are the top three safety concerns facing your neighborhood? </p>
                <p class="answer">Answer: Burglary/theft </p>
            </div>

            <div class="question">
                <p>Q2. In your opinion, what are the top three safety concerns facing your neighborhood? </p>
                <p class="answer">Answer: Burglary/theft </p>
            </div>

        </div>
    </section>
    <div class="preloader-cont">
        <div class="preloader"></div>
    </div>
    <script src="../assets/js/main.js"></script>
</body>

</html>