<?php

function createUser($conn, $voornaam, $achternaam, $email, $opleiding)
{
    $sql = "INSERT INTO user (voornaam, achternaam, email, opleiding_id) VALUES (?, ?, ?, ?);";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../php/signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sssi", $voornaam, $achternaam, $email, $opleiding);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    header("location: ./index.php?error=none");
    exit();
}
