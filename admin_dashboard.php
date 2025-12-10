<?php
session_start();
require 'db.php';

// যদি admin লগইন না করে থাকে → login পেজে পাঠিয়ে দাও
if (empty($_SESSION['admin_logged_in'])) {
    header("Location: admin_login.php");
    exit;
}


$result = mysqli_query($conn, "SELECT * FROM users ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - Users</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body { background:#000; color:#fff; font-family:Arial,sans-serif; }
        table{width:90%; margin:30px auto; border-collapse:collapse;}
        th,td{border:1px solid #555; padding:8px 10px;}
        th{background:#111;}
        .topbar{display:flex; justify-content:space-between; align-items:center; width:90%; margin:20px auto;}
        a.btn-logout{color:#fff; text-decoration:none; padding:6px 12px; border-radius:15px; background:#e6533c;}
    </style>
</head>
<body>
<div class="topbar">
    <h2>Admin Dashboard - Users</h2>
    <a href="admin_logout.php" class="btn-logout">Logout</a>
</div>

<table>
    <tr>
        <th>ID</th>
        <th>User Name</th>
        <th>Email</th>
        <th>Password (hash)</th>
    </tr>
    <?php while($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo htmlspecialchars($row['name']); ?></td>
            <td><?php echo htmlspecialchars($row['email']); ?></td>
            <td><?php echo $row['password']; ?></td>
        </tr>
    <?php endwhile; ?>
</table>
</body>
</html>
