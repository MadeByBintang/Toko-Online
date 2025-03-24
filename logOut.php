<?php
session_start();

// Set user session menjadi null tanpa menghancurkan sesi lainnya
$_SESSION["logged_in"] = null;
$_SESSION["user"] = null;

// Redirect ke halaman utama
header("Location: index.php");
exit;
