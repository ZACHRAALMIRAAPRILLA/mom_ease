<?php
    if (isset($_GET['x']) && $_GET['x'] == 'dashboard') {
        $page = "dashboard.php";
        include "main.php";
    } else if (isset($_GET['x']) && $_GET['x'] == 'LaporandanStatistik') {
        $page = "LaporandanStatistik.php";
        include "main.php";
    } else if (isset($_GET['x']) && $_GET['x'] == 'dokter') {
        $page = "dokter.php";
        include "main.php";
    } else {
        $page = "login.php";
        include "main.php";
    }
    ?>
