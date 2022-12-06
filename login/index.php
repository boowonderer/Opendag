<?php
     include("../landingpage/header.php");
?>

<head>
    <link rel="stylesheet" href="../landingpage/style.css">
</head>

<?php
     include("../landingpage/banner.php");
?>

<link rel="stylesheet" href="./css/style.css">
<form action="login_form.php" class="form-style-9" method="post">
    <ul>
        <li>
            <input type="email" name="email" class="field-style field-split align-left" placeholder="Email" />
            <input type="password" name="password" class="field-style field-split align-right" placeholder="Password" />
        </li>
        <li>
            <input type="submit" name="submit" value="submit" />
            <?php
            if (isset($_GET['error']) && $_GET['error'] != "none") {
                $error = $_GET['error'];
                if (isset($error_messages[$error])) {
                    echo $error_messages[$error];
                }
            }
            ?>
        </li>
    </ul>
</form>

<?php include("../landingpage/footer.php");?>