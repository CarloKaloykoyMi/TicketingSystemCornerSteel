<?php session_start(); ?>

<div class="wrapper">
    <aside id="sidebar">
        <div class="d-flex">
            <button class="toggle-btn" type="button">
                <i class="lni lni-grid-alt"></i>
            </button>
            <div class="sidebar-logo">
                <a href="dashboard.php"></a>
            </div>
        </div>
        <ul class="sidebar-nav">
            <li class="sidebar-item">
                <a href="dashboard.php" class="sidebar-link">
                    <i class="lni lni-user"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="company.php" class="sidebar-link">
                    <i class="lni lni-user"></i>
                    <span>Company</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="department.php" class="sidebar-link">
                    <i class="lni lni-user"></i>
                    <span>Department</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="branch.php" class="sidebar-link">
                    <i class="lni lni-user"></i>
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
            <a href="logout.php" class="sidebar-link">
                <i class="lni lni-exit"></i>
                <span>Logout</span>
            </a>
        </div>
    </aside>