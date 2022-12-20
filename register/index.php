<?php include("../landingpage/header.php");?>
<?php include("../landingpage/banner.php");?>
<link rel="stylesheet" href="../landingpage/style.css ">
<?php
require_once './mysql.php';



$sql = "SELECT * FROM opleidingen";
$result = $conn->query($sql);
$error_messages = [
    "email_already_exists" => "De email bestaat al",
    "opleiding_not_found" => "De opleiding bestaat niet",
    "stmtfailed" => "Er is iets fout gegaan"
]
?>

<link rel="stylesheet" href="./css/style.css">
<form action="register_form.php" class="form-style-9" method="post">
    <ul>
        <li>
            <input type="text" name="voornaam" class="field-style field-split align-left" placeholder="Voornaam"
                required />
            <input type="text" name="achternaam" class="field-style field-split align-right" placeholder="Achternaam"
                required />

        </li>
        <li>
            <input type="email" name="email" class="field-style field-split align-right" placeholder="Email" required />
            <select class="field-style field-split align-right" name="course">
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                    }
                }
                ?>

            </select>

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