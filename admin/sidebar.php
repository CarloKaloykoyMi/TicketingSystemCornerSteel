<?php session_start(); ?>

<div class="wrapper">
    <aside id="sidebar">
        <div class="d-flex">
            <button class="toggle-btn" type="button">
                <i class="lni lni-grid-alt"></i>
            </button>
            <div class="sidebar-logo">
                <a href="dashboard.php">
                    <img src="img/logooo.png" height="75" alt="CGG E-Support Logo"> CGG E-Support
                </a>
            </div>

        </div>
        <ul class="sidebar-nav">
            <li class="sidebar-item">
                <a href="dashboard.php" class="sidebar-link">
                    <i class="lni lni-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="company.php" class="sidebar-link">
                    <i class="lni lni-apartment"></i>
                    <span>Company</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="department.php" class="sidebar-link">
                    <i class="fa-solid fa-users"></i>
                    <span>Department</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="branch.php" class="sidebar-link">
                    <i class="fas fa-building"></i>
                    <span>Branch</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="user.php" class="sidebar-link">
                    <i class="lni lni-user"></i>
                    <span>User</span>
                </a>
            </li>
            <!-- Add other menu items as needed -->
        </ul>
        <div class="sidebar-footer">
            <a href="logoutadmin.php" class="sidebar-link">
                <i class="lni lni-exit"></i>
                <span>Logout</span>
            </a>
        </div>
    </aside>