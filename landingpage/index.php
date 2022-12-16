<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../naviatepage/style/style.css">



    <!-- wordt alleen gebruikt voor incons in footer -->

    <title>Opendag | MBO</title>
</head>

<body>


    <?php include("header.php"); ?>
    <button class="banner-refresh" onClick="history.go(0);">
        <div class="header">
            <div class="info">
                <h1>Opendag <br> MBO Utrecht</h1>
                <div class="meta">
                    <strong>Kom de sfeer proeven en kijk of MBO Utrecht bij je past.</strong>
                </div>
            </div>
        </div>
    </button>
    <div class="container">

        <?php include("../naviatepage/OverviewPage.php"); ?>

    </div>




    <section class="home-about">

        <div class="content">
            <h3>
                Over ons
            </h3>
            <p>Wil jij meer te weten komen over ons!</p>
            <a href="../aboutus/index.php" class="btn purple">Druk dan Hier!</a>
        </div>
    </section>







    <link rel="stylesheet" href="css/footer.css">
    <?php include("./footer.php"); ?>
    <script src="script.js"></script>


</body>

</html>