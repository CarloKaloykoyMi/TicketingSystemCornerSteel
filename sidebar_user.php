<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sidebar_navbar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body style="background-color: gray;">
    <nav>
        <ul>
            <li>
                <a href="Home_User.php" class="logo">
                    <img src="Images/Ticket -Logo-3.png" alt="Logo" />
                    <span class="nav-item">E-ticket</span>
                </a>
            </li>
            <li>
                <a href="Home_User.php">
                    <i class="fa-solid fa-house"></i>
                    <span class="nav-item">Home</span>
                </a>
            </li>
            <li>
                <a href="Home_User.php">
                    <i class="fa-solid fa-ticket"></i>
                    <span class="nav-item">Tickets</span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="resolvedtickets.php">
                            <i class="fa-solid fa-circle-check"></i>
                            <span class="nav-item">Resolved Tickets</span>
                        </a>
                    </li>

                    <li>
                        <a href="unresolvedtickets.php">
                            <i class="fa-solid fa-triangle-exclamation"></i>
                            <span class="nav-item">Unresolved Tickets</span>
                        </a>
                    </li>
                    <li>
                        <a href="pendingtickets.php">
                            <i class="fa-solid fa-spinner"></i>
                            <span class="nav-item">Pending Tickets</span>
                        </a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="User_Profile.php">
                    <i class="fa-solid fa-user"></i>
                    <span class="nav-item">Profile</span>
                </a>
            </li>
            <li>
                <a href="logout.php">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    <span class="nav-item">Logout</span>
                </a>
            </li>
        </ul>
    </nav>
</body>

</html>