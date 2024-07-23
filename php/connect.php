<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "RNP";

$con = mysqli_connect($host, $username, $password, $database);

if (!$con) {
    header("location: ../errors/?e=503");
}

// logging
function LogThis($log)
{
    global $con;
    $log_sql = "INSERT INTO logs(log_info) VALUES ('{$log}')";
    $logging = mysqli_query($con, $log_sql);
}
