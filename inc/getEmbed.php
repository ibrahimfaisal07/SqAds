<?php
    include_once 'connect.php';

    $query = "SELECT * FROM `ads` order by rand() limit 1;";
    $result = mysqli_query($conn, $query) or die("could not get random sq ad");

    $row = mysqli_fetch_assoc($result);
    $uid = $row['uid'];
    $ad = $row['adName'];

    header("Location: ../embed.php?user=$uid&&adname=$ad");