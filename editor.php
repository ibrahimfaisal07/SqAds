<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SqAd Editor</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body onload="ready()">
    <?php
        include_once 'inc/connect.php';
        session_start();

        $_SESSION['uid'] = $_GET['user'];
        $_SESSION['adname'] = $_GET['adname'];

        $uid = $_GET['user'];
        $ad = $_GET['adname'];
    ?>
    <form action="inc/save.inc.php" method="post">
        <div id="topBar">
            <h1>SqAd editor</h1>
            <div id="funcs">
                <button type="submit" id="saveBtn">Save</button>
            </div>
        </div>
        <div id='container'>

            <textarea name='codeText' id='codeText' onkeydown="insertTab(this, event);"><?php
            
            $query = "SELECT * FROM `ads` WHERE `uid` = '$uid' AND `adName` = '$ad';";
            $result = mysqli_query($conn, $query);

            while($row = mysqli_fetch_array($result)){
                if($row['adCode'] == ' '){
echo "<html>
<head>
    <title>SqAd</title>
    <!-- Css -->
    <style>
    *{
        margin:0;
        padding:0;
    }
    </style>
</head>
<body>
    <!-- Html -->
    <h1>My ad</h1>
    <!-- JS -->
    <script>

    </script>
</body>
</html>
                    ";
                }
                else{
                    echo $row['adCode'];
                }
            }
            
            ?>

            </textarea>
            </form>
            <iframe id='iframe' frameBorder="0"></iframe>

        </div>

        <script src="js/main.js"></script>
    </body>
</html>