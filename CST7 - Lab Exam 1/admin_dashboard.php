<?php
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>
    
    <div class="glass-card dashboard-card">
        <div class="dashboard-header">
            <h2>Admin Panel</h2>
            <span class="role-badge admin">Administrator</span>
        </div>
        
        <div class="user-info-grid">
            <div class="info-group">
                <label>Full Name</label>
                <p><?= htmlspecialchars($_SESSION['full_name']) ?></p>
            </div>
            <div class="info-group">
                <label>Username</label>
                <p>@<?= htmlspecialchars($_SESSION['username']) ?></p>
            </div>
            <div class="info-group">
                <label>Email</label>
                <p><?= htmlspecialchars($_SESSION['email']) ?></p>
            </div>
            <div class="info-group">
                <label>Member Since</label>
                <p><?= date('F j, Y, g:i a', strtotime($_SESSION['created_at'])) ?></p>
            </div>
        </div>
        
        <div class="dashboard-actions">
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
    </div>
</body>
</html>
