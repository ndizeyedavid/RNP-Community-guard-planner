<?php

include "../../php/connect.php";
include "../../php/token.php";

if (isset($_POST["id"])) {
    $surveyId = $_POST["id"];
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $q1 = mysqli_real_escape_string($con, $_POST['q1']);
    $q1_ans = [];
    for ($i = 1; $i <= 8; $i++) {
        array_push($q1_ans, $_POST["q1_ans$i"]);
    }

    $q2 = mysqli_real_escape_string($con, $_POST['q2']);
    $q2_ans = [];
    for ($i = 1; $i <= 8; $i++) {
        array_push($q2_ans, $_POST["q2_ans$i"]);
    }

    $q3 = mysqli_real_escape_string($con, $_POST['q3']);
    $q3_ans = [];
    for ($i = 1; $i <= 8; $i++) {
        array_push($q3_ans, $_POST["q3_ans$i"]);
    }


    $q4 = mysqli_real_escape_string($con, $_POST['q4']);
    $q4_ans = [];
    for ($i = 1; $i <= 8; $i++) {
        array_push($q4_ans, $_POST["q4_ans$i"]);
    }


    $q5 = mysqli_real_escape_string($con, $_POST['q5']);
    $q5_ans = [];
    for ($i = 1; $i <= 8; $i++) {
        array_push($q5_ans, $_POST["q5_ans$i"]);
    }

    // answers
    $q1_ans = join("/", $q1_ans);
    $q2_ans = join("/", $q2_ans);
    $q3_ans = join("/", $q3_ans);
    $q4_ans = join("/", $q4_ans);
    $q5_ans = join("/", $q5_ans);

    $insert = mysqli_query($con, "INSERT INTO survey(surveyId, title, q1, q1_ans, q2, q2_ans, q3, q3_ans, q4, q4_ans, q5, q5_ans) 
                VALUES('{$surveyId}', '{$title}', '{$q1}', '{$q1_ans}', '{$q2}', '{$q2_ans}', '{$q3}', '{$q3_ans}', '{$q4}', '{$q4_ans}', '{$q5}', '{$q5_ans}')");
    if ($insert) {
        LogThis("Successfully created a new survey");
        header("location: ../?succ");
    } else {
        LogThis("An error occured while creating a survey");
        header("location: ../?err");
    }
}
