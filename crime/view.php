<?php
include "../php/connect.php";
include "../php/token.php";
$id = $_GET['id'];
$fetch = mysqli_query($con, "SELECT crime_report.id, users.nid, users.fname, users.lname, users.phone, users.email, users.province, crime_report.crime_date, crime_report.district, crime_report.crime_type, crime_report.description, crime_report.other_information FROM crime_report INNER JOIN users ON crime_report.userId = users.uid WHERE crime_report.id='{$id}'");
$data = mysqli_fetch_array($fetch);

// user details
$nid = $data['nid'];
$names = $data['fname'] . ' ' . $data['lname'];
$email = $data['email'];
$phone = $data['phone'];
$province = $data['province'];
$district = $data['district'];

// crime details
$title = $data['crime_type'];
$date = $data['crime_date'];

$description = $data['description'];
$information = $data['other_information'];
?>
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

        @media print {

            button,
            .btn {
                visibility: hidden;
            }
        }
    </style>
</head>

<body style="overflow: hidden;background-color: var(--primary_dk);" onload="preloader()">
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
                    <td><b>National ID</b>: <?php echo $nid; ?></td>
                    <td><b>Province</b>: <?php echo $province; ?></td>
                </tr>

                <tr>
                    <td><b>Names</b>: <?php echo $names; ?></td>
                    <td><b>District</b>: <?php echo $district; ?></td>
                </tr>

                <tr>
                    <td><b>E-mail</b>: <?php echo $email; ?></td>
                </tr>

                <tr>
                    <td><b>Phone number</b>: <?php echo $phone; ?></td>
                </tr>

            </table>
        </div>

        <div class="detail-cont">
            <h3>Crime Details</h3>
            <table style="width: 25%;">
                <tr>
                    <td><b>Crime Title</b>: </td>
                    <td><?php echo $title; ?></td>
                </tr>

                <tr>
                    <td><b>Date</b>: </td>
                    <td><?php echo $date; ?></td>
                </tr>
            </table>
            <p style="margin-top: 17px; font-size: 18px;"><b>Crime Description:</b> <?php echo $description; ?></p>
            <p style="margin-top: 17px; font-size: 18px;"><b>Other Information:</b> <?php echo $information; ?></p>
        </div>

    </section>
    <script src="../assets/js/main.js"></script>
    <div class="preloader-cont">
        <div class="preloader"></div>
    </div>
</body>

</html>