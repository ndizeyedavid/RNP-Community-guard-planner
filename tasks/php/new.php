<?php
include "../../php/connect.php";
include "../../php/token.php";

if (isset($_POST["submit"])) {
    $taskId = rand();
    $task = mysqli_real_escape_string($con, $_POST["task"]);
    $desc = mysqli_real_escape_string($con, $_POST["description"]);
    $assigned = mysqli_real_escape_string($con, $_POST["assigned"]);
    $due = $_POST['date'];

    $insert = mysqli_query($con, "INSERT INTO tasks(taskName, status, description, assigned, dueDate) 
                VALUES('{$task}', 'pending', '{$desc}', '{$assigned}', '{$due}')");
    if ($insert) {
        LogThis("A new task added assigned to $assigned");
        header("location: ../?succ");
    } else {
        LogThis("An error occured trying to assign a task");
        header("location: ../?err");
    }
}
