<?php

session_start();

if (!$_SESSION['id']) {
    $page = basename($_SERVER['PHP_SELF']);
    if ($page == "index.php") {
        header('location: ./login.php');
    } else {
        header('location: ../login.php');
    }
}
