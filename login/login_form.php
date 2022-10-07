<?php
require_once "../register/mysql.php";
require_once "../register/functions.php";
if (!isset($_POST["submit"])) {
    header("location: ./index.php?");
    exit();
}
session_start();
if (isset($_SESSION["user"])) {
    header("location:  ../dashboard");
    exit();
}

$email = $_POST["email"];
$password = $_POST["password"];

if (!isset($email) || !isset($password)) {
    header("location: ./index.php?error=fill_in_all_the_fields");
    exit();
}

$sql = "SELECT email, `role` FROM user WHERE email = ? AND `password` = ?";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ./index.php?error=stmtfailed");
    exit();
}

$stmt->bind_param("ss", $email, $password);
if ($stmt->execute()) {
    $stmt->store_result();
    $email = "";
    $role = "";
    $stmt->bind_result($email, $role);
    $stmt->fetch();
    if ($stmt->num_rows < 1) {
        header("location: ./index.php?error=no_account_found");
        exit();
    }

    $_SESSION["user"] = [
        "email" => $email,
        "role" => $role
    ];
    header("location: ../dashboard");
    exit();
}
header("location: ./index.php?error=something_went_wrong");
exit();
