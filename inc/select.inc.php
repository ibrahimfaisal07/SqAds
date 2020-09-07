<?php
    session_start();

    $adname = $_POST['adNameSelect'];
    $uid = $_POST['userSelect'];

    $_SESSION['uid'] = $uid;
    $_SESSION['adname'] = $adname;

    header("Location: ../editor.php?user=$uid&&adname=$adname");
