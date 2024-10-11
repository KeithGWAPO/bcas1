<?php
// Start the session
session_start();

// Check if the user is logged in and is a staff member
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'staff') {
    header("Location: login.php");
    exit();
}

// Retrieve username from the session
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Dashboard - Barangay Clinic Appointment System</title>
    <link rel="stylesheet" href="staff-dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="logo-section">
            <img src="assets/logo.png" alt="Clinic Logo" class="logo">
            <h1>Barangay Clinic Appointment System</h1>
        </div>
        <div class="profile-section">
            <img src="assets/profile.jpg" alt="User Profile" class="profile-pic">
            <span class="username"><?php echo htmlspecialchars($username); ?></span>
        </div>
    </header>

    <aside class="sidebar">
        <nav class="nav-menu">
            <ul>
                <li class="nav-item active">
                    <a href="#" class="nav-link">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-users-cog"></i>
                        <span>User Management</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-chart-line"></i>
                        <span>Reports</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="logout-section">
            <a href="login.php" class="logout-btn">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
        </div>
    </aside>

    <main class="main-content">
        <section class="calendar-section">
            <h2>Appointment Calendar</h2>
            <div id="calendar"></div>
        </section>

        <section class="reports-section">
            <h2>Appointment Reports</h2>
            <div class="reports-container">
                <!-- Placeholder for Reports -->
                <p>Reports content goes here...</p>
            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.js"></script>
    <script src="staff-dashboard.js"></script>
</body>
</html>
