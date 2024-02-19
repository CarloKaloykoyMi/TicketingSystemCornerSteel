<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/admin_dashboard.css">

    <style>

    </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <h1 class="logo"><img src="img/logo2.png" alt="Logo"> CGG E-Ticketing System</h1>
                <i class="fas fa-bars toggle-sidebar"></i>
                <ul class="nav-links">
                <li class="admin-profile">
                    <div class="profile-info">
                        <img src="img/cover1.jpg" alt="">
                        <span>Admin Name</span>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>

    <div class="sidebar">
        <div class="sidebar-links">
            <li><a href="admin_dashboard.php" class="sidebar-link"><i class="fas fa-home"></i> &nbsp;Dashboard</a></li>
            <li>
                <a href="ticket.php" class="sidebar-link">
                    <i class="fa-solid fa-ticket"></i>
                    <span class="nav-item"> &nbsp;Ticket</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="#"><i class="fa-solid fa-circle-check"></i>
                            <span class="nav-item"> &nbsp;Resolved Tickets</span></a></li>
                    <li><a href="#"><i class="fa-solid fa-triangle-exclamation"></i>
                            <span class="nav-item"> &nbsp;Unresolved Tickets</span></a></li>
                    <li><a href="#"><i class="fa-solid fa-spinner"></i>
                            <span class="nav-item"> &nbsp;Pending Tickets</span></a></li>
                </ul>
            </li>

            <li>
                <a href="#" class="sidebar-link">
                    <i class="fa-solid fa-ticket"></i>
                    <span class="nav-item"> &nbsp;Company</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="department.php" class="sidebar-link"><i class="fa-solid fa-circle-check"></i>
                            <span class="nav-item"> &nbsp;Department</span></a></li>
                    <li><a href="branch.php" class="sidebar-link"><i class="fa-solid fa-triangle-exclamation"></i>
                            <span class="nav-item"> &nbsp;Branches</span></a></li>
                </ul>
            </li>

            <li><a href="user.php" class="sidebar-link"><i class="fas fa-users"></i> &nbsp;Users</a></li>
            <li><a href="#"><i class="fa fa-file"></i> &nbsp;Reports</a></li>
            <li><a href="#"><i class="fas fa-cog"></i> &nbsp;Settings</a></li>
            <li><a href="#" class="logout"><i class="fas fa-sign-out-alt"></i> &nbsp;Logout</a></li>
</div>
    </div>

    <main>
    <div class="main-content">
        <h2>Welcome Admin!</h2>
        <p>This dashboard provides you with tools to manage tickets, users, and system settings efficiently.</p>
        <div class="dashboard-widgets">
            <div class="widget">
                <h3> <i class="fa-solid fa-ticket"></i> Total Tickets</h3>
                <p>Currently, there are <strong>150</strong> tickets in the system.</p>
            </div>
            <div class="widget">
                <h3><i class="fa-solid fa-triangle-exclamation"></i> Resolved Tickets</h3>
                <p>Out of the total, <strong>120</strong> tickets have been resolved.</p>
            </div>
            <div class="widget">
                <h3><i class="fa-solid fa-spinner"></i> Pending Tickets</h3>
                <p>There are <strong>20</strong> tickets pending for resolution.</p>
            </div>
        </div>
    </div>
</main>
<script>
        // Add a script to handle the click event for the ticket categories
        document.addEventListener("DOMContentLoaded", function () {
            const ticketCategories = document.querySelectorAll('.sidebar-links > li');

            ticketCategories.forEach(category => {
                category.addEventListener('click', function () {
                    const subMenu = this.querySelector('.sub-menu');
                    if (subMenu) {
                        subMenu.classList.toggle('show');
                    }
                });
            });
        });
    </script>
</body>
</html>