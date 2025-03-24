<?php
session_start();

// Set user session menjadi null tanpa menghancurkan sesi lainnya
$_SESSION["logged_in"] = null;
$_SESSION["user"] = null;

// Alert dan redirect
echo "<script>
    alert('Anda telah logout.');
    window.location.href = 'index.php';
</script>";
exit;
