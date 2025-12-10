<?php
session_start();
require 'db.php';

$message = "";

// Simple hard-coded admin credential
$adminUser = "admin";
$adminPass = "admin123";   // চাইলে পরে strong password দাও

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'] ?? '';
    $pass = $_POST['password'] ?? '';

    if ($user === $adminUser && $pass === $adminPass) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: admin_dashboard.php");
        exit;
    } else {
        $message = "Invalid admin username or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body { background:#000; color:#fff; font-family:Arial,sans-serif; }
        .wrapper{min-height:70vh; display:flex; justify-content:center; align-items:center;}
        .card{max-width:350px; width:100%;}
        input{width:100%; padding:8px 10px; margin:5px 0 15px;}
    </style>
</head>
<body>
<header>
    <section>
        <nav class="display-flex Nevigation-bar">
            <div><h3 id="Secondary-font-color" class="Nav-logo-Name">Fitness</h3></div>
        </nav>
    </section>
</header>

<main>
    <section class="wrapper">
        <div class="card">
            <h1>Admin Login</h1>
            <?php if($message): ?>
                <p style="color:#ffb347;"><?php echo $message; ?></p>
            <?php endif; ?>
            <form method="POST" action="admin_login.php">
                <label>Username</label><br>
                <input type="text" name="username" required><br>
                <label>Password</label><br>
                <input type="password" name="password" required><br>
                <button type="submit" class="Font-Color primary-btn">Login</button>
            </form>
        </div>
    </section>
</main>
</body>
</html>
