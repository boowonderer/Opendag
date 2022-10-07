<?php
require_once '../register/mysql.php';

session_start();
if (!isset($_SESSION["user"])) {
    header("location:  ../login");
    exit();
}

$sql = "SELECT voornaam, achternaam, email, opleiding_id FROM user";
$users = $conn->query($sql);

$sql = "SELECT * FROM opleidingen";
$opleiding_results = $conn->query($sql);

$opleidingen = [];
if ($opleiding_results->num_rows > 0) {
    while ($row = $opleiding_results->fetch_assoc()) {
        $opleidingen[$row["id"]] = $row["name"];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./stye.css">
</head>

<body>
    <table class="styled-table">
        <caption>Lijst van gebruikers</caption>
        <thead>
            <tr>
                <th scope="col">Voornaam</th>
                <th scope="col">Achternaam</th>
                <th scope="col">Email</th>
                <th scope="col">Opleiding</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($users->num_rows > 0) {
                while ($row = $users->fetch_assoc()) {
                    $voornaam = $row["voornaam"];
                    $achternaam = $row["achternaam"];
                    $email = $row["email"];
                    $opleiding = $opleidingen[$row["opleiding_id"]];
                    echo <<<XYZ
                            <tr class='active-row'>
                                <td>$voornaam</td>
                                <td>$achternaam</td>
                                <td>$email</td>
                                <td>$opleiding</td>
                            </tr>
                        XYZ;
                }
            }
            ?>
        </tbody>
    </table>
</body>

</html>