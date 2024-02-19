<?php include('../function/myfunction.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/admin_dashboard.css">

    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />

     <!-- icon css -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<!-- datatable css -->
<script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script defer src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script defer src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script defer src="js/table.js"></script>
    
</head>

<body>
<header>
        <nav class="navbar">
            <div class="container">
                <h1 class="logo"><img src="img/logo2.png" alt="Logo"> CGG E-Ticketing System</h1>
                <div class="nav-right">
                    <ul class="nav-links">
                        <li class="admin-profile">
                            <div class="profile-info">
                                <img src="img/cover1.jpg" alt="">
                                <span>Admin Name</span>
                            </div>
                        </li>
                    </ul>
                    <i class="fas fa-bars toggle-sidebar"></i>
                </div>
            </div>
        </nav>
    </header>
    
    <div class="sidebar">
        <div class="sidebar-links">
            <li><a href="admin_dashboard.php" class="sidebar-link"><i class="fas fa-home"></i> &nbsp;Dashboard</a></li>
            <li>
                <a href="ticket.php" class="sidebar-link">
                    <i class="fa-solid fa-ticket"></i>
                    <span class="nav-item"> &nbsp;Tickets</span>
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
                <a href="company.php" class="sidebar-link">
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
            <h2>Company</h2>
            <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addCompanyModal">Add Company</button>

            <table id="example" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Company ID</th>
                                        <th>Company Name</th>
                                        <th>Contact</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $company = getAll("company");

                                    if (mysqli_num_rows($company) > 0) {
                                        foreach ($company as $item) {
                                    ?>
                                            <tr>
                                                <td><?= $item['id']; ?></td>
                                                <td><?= $item['company_name']; ?></td>
                                                <td><?= $item['contact']; ?></td>
                                                <td><?= $item['email']; ?></td>
                                                <td>
                                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editCompanyModal<?= $item['id']; ?>"><i class="fas fa-pencil"></i>&nbsp;Edit</a>
                                                    <button type="button" class="btn btn-sm btn-danger delete_category_btn" value="<?= $item['id']; ?>"><i class="fas fa-trash"></i> &nbsp; Delete</button>
                                                </td>
                                            </tr>

                                            <!-- Edit Company Modal -->
                                            <div class="modal fade" id="editCompanyModal<?= $item['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Company</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- Your edit form content goes here -->
                                                            <form action="code.php" method="POST">
                                                                <input type="hidden" name="company_id" value="<?= $item['id']; ?>">

                                                                <div class="col-md-12 mt-3">
                                                                    <label for=""><i class="fas fa-building"></i> Company Name</label>
                                                                    <input type="text" name="company_name" value="<?= $item['company_name']; ?>" class="form-control">
                                                                </div>

                                                                <div class="col-md-12 mt-3">
                                                                    <label for=""><i class="fa-solid fa-location-dot"></i> Company Address</label>
                                                                    <input type="text" name="company_address" value="<?= $item['company_address']; ?>" class="form-control">
                                                                </div>

                                                                <div class="col-md-12 mt-3">
                                                                    <label for=""><i class="fa-solid fa-phone"></i> Contact</label>
                                                                    <input type="text" name="contact" value="<?= $item['contact']; ?>" maxlength="11" class="form-control">
                                                                </div>

                                                                <div class="col-md-12 mt-3">
                                                                    <label for=""><i class="fas fa-envelope"></i> Email</label>
                                                                    <input type="text" name="email" value="<?= $item['email']; ?>" class="form-control">
                                                                </div>

                                                                <!-- Add other form fields for editing as needed -->
                                                                <hr>
                                                                <div class="form-group pull-right">
                                                                    <button class="btn btn-primary float-end" type="submit" name="edit_company">Save
                                                                        Changes</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Edit Company Modal -->

                                    <?php
                                        }
                                    } else {
                                        echo "No Records Found!";
                                    }
                                    ?>
                                </tbody>
                            </table>
            
        </div>
    </main>
    <script>
        // Add a script to handle the click event for the ticket categories
        document.addEventListener("DOMContentLoaded", function() {
            const ticketCategories = document.querySelectorAll('.sidebar-links > li');

            ticketCategories.forEach(category => {
                category.addEventListener('click', function() {
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