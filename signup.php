<?php
// DEBUG ON
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'db.php';

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    
    $name     = trim($_POST['username'] ?? '');
    $email    = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm  = $_POST['confirm_password'] ?? '';

    // Basic validation
    if ($name === '' || $email === '' || $password === '' || $confirm === '') {
        $message = "All fields are required.";
    } elseif ($password !== $confirm) {
        $message = "Passwords do not match.";
    } else {
        // DB insert
        $nameEsc  = mysqli_real_escape_string($conn, $name);
        $emailEsc = mysqli_real_escape_string($conn, $email);
        $hash     = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (name, email, password)
                VALUES ('$nameEsc', '$emailEsc', '$hash')";

        if (mysqli_query($conn, $sql)) {
            $message = "✅ Registration successful!";
        } else {
            $message = "❌ Database error: " . mysqli_error($conn);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register | Fitness</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsible.css">

    <style>
        body{
            background:#000;
            color:#fff;
            font-family: Arial, sans-serif;
        }
        .signup-wrapper{
            min-height: 70vh;
            display:flex;
            align-items:center;
            justify-content:center;
        }
        .signup-card{
            max-width:400px;
            width:100%;
        }
        .signup-card input{
            width:100%;
            padding:8px 10px;
            margin:5px 0 15px 0;
        }
    </style>
</head>
<body>

<header>
    <section>
        <nav class="display-flex Nevigation-bar">
            <div>
                <h3 id="Secondary-font-color" class="Nav-logo-Name">Fitness</h3>
            </div>
            <div>
                <ul class="display-flex Nav-link">
                    <li><a href="index.php"><span id="Nav-Home">Home</span></a></li>
                    <li><a href="#">Service</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </div>
        </nav>
    </section>
</header>

<main>
    <section class="signup-wrapper">
        <div class="signup-card">
            <h1>Register</h1>

            <?php if ($message !== ""): ?>
                <p style="margin:10px 0; color:#ffb347;">
                    <?php echo $message; ?>
                </p>
            <?php endif; ?>

            <form action="signup.php" method="POST">
                <label for="username">User Name:</label><br>
                <input type="text" id="username" name="username" required><br>

                <label for="email">Email Address:</label><br>
                <input type="email" id="email" name="email" required><br>

                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" required><br>

                <label for="confirm_password">Confirm Password:</label><br>
                <input type="password" id="confirm_password" name="confirm_password" required><br>

                <button type="submit" name="register" class="Font-Color primary-btn">
                    Register
                </button>
            </form>
        </div>
    </section>
</main>

</body>
</html>
