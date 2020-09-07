<?php
    include_once 'inc/connect.php';

    $uid = $_GET['user'];
    $ad = $_GET['adname'];

    $query = "SELECT * FROM `ads` WHERE `uid` = '$uid' AND `adName` = '$ad'";
    $result = mysqli_query($conn, $query) or die("Ad not found");

    $row = mysqli_fetch_assoc($result);

    echo $row['adCode'];

?>