<?php
    session_start();
    include_once 'connect.php';

    $adname = $_POST['adName'];
    $uid = $_POST['userCad'];

    $query = "INSERT INTO `ads` (`uid`, `adName`, `adCode`) VALUES ('$uid', '$adname', ' ');";
    $result = mysqli_query($conn, $query);

    $_SESSION['uid'] = $uid;
    $_SESSION['adname'] = $adname;

    header("Location: ../editor.php?user=$uid&&adname=$adname");
