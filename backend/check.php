<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
    exit();
}

echo "<h1>Welcome to the Dashboard</h1>";
?>
