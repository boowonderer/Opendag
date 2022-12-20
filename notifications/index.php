<!DOCTYPE html>
<html>

<?php include("../landingpage/header.php");?>

<head>
    <title>Switch button</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" href="../landingpage/style.css">
</head>

<body>
    <div class="background">
        <h3>Wilt u 30 minuten voor de les een notificatie ontvangen?</h3>
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="leftClick()">Ja</button>
                <button type="button" class="toggle-btn" onclick="rightClick()">Nee</button>
            </div>
        </div>
        <script src="index.js"></script>
    </div>


</body>

</html>