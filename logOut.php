<?php
session_start();

// Kosongkan semua variabel sesi tanpa menghapus sesi itu sendiri
$_SESSION = [];

// Redirect ke halaman utama
header("Location: index.php");
exit;
