<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crime Report | Community Guard Planner</title>
    <!-- <link rel="stylesheet" href="./assets/css/form.css"> -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/sub.css">
    <link rel="stylesheet" href="../assets/css/form.css">
    <link rel="stylesheet" href="../assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <style>
        .detail-cont {
            margin-top: 16px;
            width: 100%;
            border: 1px solid #C0C0C0;
            background: #F3F3F3;
            padding: 15px 30px;
        }

        .detail-cont h3 {
            font-size: 25px;
            font-weight: 700;
            color: var(--dim);
            text-align: center;
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

<body style="overflow: hidden;background-color: var(--primary_dk);">
    <section class="body-cont" style="overflow-y: auto; padding: 10px 50px;">

        <div class="top-cont">
            <button onclick="window.history.back();" class="btn">Back</button>
            <h3>Crime Report</h3>
            <div class="btn" onclick="print()" style="border-radius: 4px; height: fit-content; padding: 8px; font-size: 20px;  justify-content: center;cursor: default;"><i class="bi bi-printer"></i></div>
        </div>

        <div class="detail-cont">
            <h3>User Information</h3>
            <table>
                <tr>
                    <td><b>National ID</b>: 12345678987654323423</td>
                    <td><b>Province</b>: Kigali City</td>
                </tr>

                <tr>
                    <td><b>Names</b>: Mellow Junior</td>
                    <td><b>District</b>: Bugesera</td>
                </tr>

                <tr>
                    <td><b>E-mail</b>: mellow@gmail.com</td>
                </tr>
                
                <tr>
                    <td><b>Phone number</b>: 123456781234</td>
                </tr>

            </table>
        </div>

        <div class="detail-cont">
            <h3>Crime Details</h3>
            <table style="width: 25%;">
                <tr>
                    <td><b>Crime Title</b>: </td>
                    <td>House Robbery</td>
                </tr>

                <tr>
                    <td><b>Date</b>: </td>
                    <td>23/03/2024</td>
                </tr>
            </table>
            <p style="margin-top: 17px; font-size: 18px;"><b>Crime Description:</b> Lorem,Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo officia tenetur quidem quaerat earum, pariatur commodi rerum nisi necessitatibus quis eligendi iusto minima labore voluptas facere non numquam! Adipisci, assumenda! ipsum dolor sit amet consectetur adipisicing elit. Corporis aliquid fuga velit, facilis animi dolor ipsam tempore numquam recusandae praesentium nobis pariatur labore libero eos commodi ad quam ratione facere?</p>
            <p style="margin-top: 17px; font-size: 18px;"><b>Other Information:</b> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis aliquid fuga velit, facilis animi dolor ipsam tempore numquam recusandae praesentium nobis pariatur labore libero eos commodi ad quam ratione facere?</p>
        </div>
        
    </section>
</body>

</html>