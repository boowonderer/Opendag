<?php
require_once "./mysql.php";
require_once "./functions.php";
if (!isset($_POST["submit"])) {
    header("location: ./index.php?");
    exit();
}
$voornaam = $_POST["voornaam"];
$achternaam = $_POST["achternaam"];
$email = $_POST["email"];
$opleiding = $_POST["course"];

if (!isset($voornaam) || !isset($achternaam) || !isset($email) || !isset($opleiding)) {
    header("location: ./index.php?");
    exit();
}
$sql = "SELECT email FROM user WHERE email = ?";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ./index.php?error=stmtfailed");
    exit();
}

$stmt->bind_param("s", $email);
if ($stmt->execute()) {
    $stmt->store_result();
    $result = "";
    $stmt->bind_result($result);
    $stmt->fetch();
    if ($stmt->num_rows > 0) {
        header("location: ./index.php?error=email_already_exists");
        exit();
    }
}

$sql = "SELECT `name` FROM opleidingen WHERE id = ?";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ./index.php?error=stmtfailed");
    exit();
}

$stmt->bind_param("i", $opleiding);
if ($stmt->execute()) {
    $stmt->store_result();
    $result = "";
    $stmt->bind_result($result);
    $stmt->fetch();
    if ($stmt->num_rows < 1) {
        header("location: ./index.php?error=opleiding_not_found");
        exit();
    }
}


createUser($conn, $voornaam, $achternaam, $email, $opleiding);
