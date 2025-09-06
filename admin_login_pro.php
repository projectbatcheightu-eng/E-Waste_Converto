<?php
require_once __DIR__ . '/../lib/session.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'] ;
    $password = $_POST['password'] ;

    // Hardcoded credentials
    $adminUsername = "ewasteconverto";
    $adminPassword = "123456";

    if ($username === $adminUsername && $password === $adminPassword) {
        // Success: set session
        $_SESSION['role'] = "admin";
        $_SESSION['admin_logged_in'] = true;

        header("Location: ../public/admin_dashboard.php");
        exit();
    } else {
        // Failure: wrong credentials
        echo "<script>alert('Invalid admin credentials'); window.location.href='../public/admin_login.php';</script>";
        exit();
    }
}
?>
