<?php include('../function/myfunction.php');
include 'sidebar_navbar.php'
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Users</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- datatable css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

    <!-- icon css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- datatable css -->
    <script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script defer src="js/table.js"></script>
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="user.css">
</head>

<body>
    <div class="main p-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                    <div class="card-header">
                        <h4>Users</h4>
                        <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addUserModal">Add User</button>

                        <!-- Filter dropdown -->
                        <div class="dropdown float-end ms-2">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="filterDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                Filter
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="filterDropdown">
                                <li><a class="dropdown-item" href="#" id="filterEmployee">Employee</a></li>
                                <li><a class="dropdown-item" href="#" id="filterAdmin">Admin</a></li>
                                <!-- Add more filter options as needed -->
                            </ul>
                        </div>
                    </div>
                        <div class="card-body" id="category_table">
                            <table id="example" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Last Name</th>
                                        <th>First Name</th>
                                        <th>Company</th>
                                        <th>Branch</th>
                                        <th>Department</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $company = getAll("user");

                                    if (mysqli_num_rows($company) > 0) {
                                        foreach ($company as $item) {
                                    ?>
                                            <tr>
                                                <td><?= $item['lastname']; ?></td>
                                                <td><?= $item['firstname']; ?></td>
                                                <td><?= $item['company']; ?></td>
                                                <td><?= $item['branch']; ?></td>
                                                <td><?= $item['department']; ?></td>
                                                <td><?= $item['email']; ?></td>
                                                <td><?= $item['role'] == 0 ? 'Admin' : 'Employee'; ?></td>
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <a href="#" class="btn btn-primary btn-sm" style="width: 80px;" data-bs-toggle="modal" data-bs-target="#editUserModal<?= $item['user_id']; ?>"><i class="fas fa-pencil"></i>&nbsp;Edit</a>
                                                        <button type="button" class="btn btn-danger btn-sm delete_user_btn" style="width: 90px;" data-bs-toggle="modal" data-bs-target="#deleteUserModal<?= $item['user_id']; ?>"><i class="fas fa-trash"></i> &nbsp; Delete</button>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- Edit User Modal -->
                                            <div class="modal fade" id="editUserModal<?= $item['user_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- Your edit form content goes here -->
                                                            <form action="code.php" method="POST">
                                                                <input type="hidden" name="user_id" value="<?= $item['user_id']; ?>">

                                                                <div class="col-md-12 mt-3">
                                                                    <label for=""><i class="fas fa-user"></i> Last Name</label>
                                                                    <input type="text" name="lastname" value="<?= $item['lastname']; ?>" class="form-control">
                                                                </div>

                                                                <div class="col-md-12 mt-3">
                                                                    <label for=""><i class="fas fa-user"></i> First Name</label>
                                                                    <input type="text" name="firstname" value="<?= $item['firstname']; ?>" class="form-control">
                                                                </div>

                                                                <div class="col-md-12 mt-3">
                                                                    <label for=""><i class="fas fa-user"></i> Middle Initial</label>
                                                                    <input type="text" name="middleinitial" value="<?= $item['middleinitial']; ?>" class="form-control">
                                                                </div>

                                                                <div class="col-md-12 mt-3">
                                                                    <label for="company"><i class="fas fa-building"></i> Company</label>
                                                                    <select name="company" class="form-control">
                                                                        <option value="company1" <?= ($item['company'] == 'company1') ? 'selected' : ''; ?>>Company 1</option>
                                                                        <option value="company2" <?= ($item['company'] == 'company2') ? 'selected' : ''; ?>>Company 2</option>
                                                                        <option value="company3" <?= ($item['company'] == 'company3') ? 'selected' : ''; ?>>Company 3</option>
                                                                        <!-- Add more options as needed -->
                                                                    </select>
                                                                </div>

                                                                <div class="col-md-12 mt-3">
                                                                    <label for="branch"><i class="fa-solid fa-location-dot"></i> Branch</label>
                                                                    <select name="branch" class="form-control">
                                                                        <option value="branch1" <?= ($item['branch'] == 'branch1') ? 'selected' : ''; ?>>Branch 1</option>
                                                                        <option value="branch2" <?= ($item['branch'] == 'branch2') ? 'selected' : ''; ?>>Branch 2</option>
                                                                        <option value="branch3" <?= ($item['branch'] == 'branch3') ? 'selected' : ''; ?>>Branch 3</option>
                                                                        <!-- Add more options as needed -->
                                                                    </select>
                                                                </div>

                                                                <div class="col-md-12 mt-3">
                                                                    <label for="department"><i class="fa-solid fa-users"></i> Department</label>
                                                                    <select name="department" class="form-control">
                                                                        <option value="department1" <?= ($item['department'] == 'department1') ? 'selected' : ''; ?>>Department 1</option>
                                                                        <option value="department2" <?= ($item['department'] == 'department2') ? 'selected' : ''; ?>>Department 2</option>
                                                                        <option value="department3" <?= ($item['department'] == 'department3') ? 'selected' : ''; ?>>Department 3</option>
                                                                        <!-- Add more options as needed -->
                                                                    </select>
                                                                </div>

                                                                <div class="col-md-12 mt-3">
                                                                    <label for=""><i class="fas fa-envelope"></i> Email</label>
                                                                    <input type="email" name="email" value="<?= $item['email']; ?>" class="form-control">
                                                                </div>

                                                                <!-- Add other form fields for editing as needed -->
                                                                <hr>
                                                                <div class="form-group pull-right">
                                                                    <button class="btn btn-primary float-end" type="submit" name="edit_user">Save Changes</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Edit User Modal -->
                                    <?php
                                        }
                                    } else {
                                        echo "No Records Found!";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add U</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="code.php" method="POST">

                        <div class="col-md-12 mt-3">
                            <label for=""><i class="fas fa-user"></i> Last Name</label>
                            <input type="text" name="lastname" class="form-control">
                        </div>

                        <div class="col-md-12 mt-3">
                            <label for=""><i class="fas fa-user"></i> First Name</label>
                            <input type="text" name="firstname" class="form-control">
                        </div>

                        <div class="col-md-12 mt-3">
                            <label for=""><i class="fas fa-user"></i> Middle Initial</label>
                            <input type="text" name="middleinitial" class="form-control">
                        </div>

                        <div class="col-md-12 mt-3">
                            <label for="company"><i class="fas fa-building"></i> Company</label>
                            <select name="company" class="form-control">
                                <option value="company1" <?= ($item['company'] == 'company1') ? 'selected' : ''; ?>>Company 1</option>
                                <option value="company2" <?= ($item['company'] == 'company2') ? 'selected' : ''; ?>>Company 2</option>
                                <option value="company3" <?= ($item['company'] == 'company3') ? 'selected' : ''; ?>>Company 3</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>

                        <div class="col-md-12 mt-3">
                            <label for="branch"><i class="fa-solid fa-location-dot"></i> Branch</label>
                            <select name="branch" class="form-control">
                                <option value="branch1" <?= ($item['branch'] == 'branch1') ? 'selected' : ''; ?>>Branch 1</option>
                                <option value="branch2" <?= ($item['branch'] == 'branch2') ? 'selected' : ''; ?>>Branch 2</option>
                                <option value="branch3" <?= ($item['branch'] == 'branch3') ? 'selected' : ''; ?>>Branch 3</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>

                        <div class="col-md-12 mt-3">
                            <label for="department"><i class="fa-solid fa-users"></i> Department</label>
                            <select name="department" class="form-control">
                                <option value="department1" <?= ($item['department'] == 'department1') ? 'selected' : ''; ?>>Department 1</option>
                                <option value="department2" <?= ($item['department'] == 'department2') ? 'selected' : ''; ?>>Department 2</option>
                                <option value="department3" <?= ($item['department'] == 'department3') ? 'selected' : ''; ?>>Department 3</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>

                        <div class="col-md-12 mt-3">
                            <label for=""><i class="fas fa-envelope"></i> Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>

                        <hr>
                        <div class="form-group pull-right">
                            <button class="btn btn-primary float-end" type="submit" name="add_user">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="js/sidebar.js"></script>

    <script>
    $(document).ready(function () {
        // DataTable initialization
        $('#example').DataTable();

        // Filter dropdown item click events
        $('#filterEmployee').on('click', function () {
            applyFilter('Employee');
        });

        $('#filterAdmin').on('click', function () {
            applyFilter('Admin');
        });

        // Filter button click event
        function applyFilter(filterType) {
            // Display a modal or perform any other filter-related action
            alert('Filtering by ' + filterType + '. Implement your filter logic here.');
        }
    });
</script>

</body>

</html>