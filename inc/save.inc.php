<?php
    include_once 'connect.php';
    session_start();

    $code = $_POST['codeText'];
    $uid = $_SESSION['uid'];
    $ad = $_SESSION['adname'];

    $query = "UPDATE `ads` SET `adCode` = '$code' WHERE `uid` = '$uid' AND `adName` = '$ad';";
    $result = mysqli_query($conn, $query) or mysqli_error();

    header("Location: ../editor.php?user=$uid&&adname=$ad");
