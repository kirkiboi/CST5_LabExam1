<?php 
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: " . ($_SESSION['role'] === 'admin' ? 'admin_dashboard.php' : 'user_dashboard.php'));
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>
    
    <div class="glass-card login-card">
        <div class="login-header">
            <h2>Welcome</h2>
            <p>Sign in to access your portal</p>
        </div>

        <?php if (isset($_SESSION['error'])): ?>
            <div class="alert error">
                <?= htmlspecialchars($_SESSION['error']); ?>
                <?php unset($_SESSION['error']); ?>
            </div>
        <?php endif; ?>

        <form action="login.php" method="POST">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required autocomplete="off" placeholder="Enter your username">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required placeholder="Enter your password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>
</html>