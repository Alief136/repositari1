<?php
session_start();
session_unset();
session_destroy();

header("Location: index.php");
exit();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Logout</title>
</head>
<body>
    <div class="logout-container">
        <h1>Anda telah berhasil logout</h1>
        <p>Terima kasih telah menggunakan layanan kami.</p>
        <a href="index.php" class="btn">Kembali ke Login</a>
    </div>
</body>
</html>