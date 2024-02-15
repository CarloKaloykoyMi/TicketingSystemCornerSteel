<?php include('../function/myfunction.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/sidebar.css">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">Company</a>
                </div>
            </div>
            <ul class="sidebar-nav">
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
                <!-- Add other menu items as needed -->
            </ul>
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class="main p-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Branches</h4>
                                <button class="btn btn-primary float-end" data-bs-toggle="modal"
                                    data-bs-target="#addBranchModal">Add Branch</button>
                            </div>
                            <div class="card-body" id="category_table">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Branch Name</th>
                                            <th>Contact</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $branch = getAll("branch");

                                        if (mysqli_num_rows($branch) > 0) {
                                            foreach ($branch as $item) {
                                                ?>
                                                <tr>
                                                    <td><?= $item['id']; ?></td>
                                                    <td><?= $item['branch_name']; ?></td>
                                                    <td><?= $item['contact']; ?></td>
                                                    <td><?= $item['email']; ?></td>
                                                    <td>
                                                        <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                                            data-bs-target="#editBranchModal<?= $item['id']; ?>">Edit</a>
                                                        <button type="button"
                                                            class="btn btn-sm btn-danger delete_category_btn"
                                                            value="<?= $item['id']; ?>">Delete</button>
                                                    </td>
                                                </tr>

                                                <!-- Edit Company Modal -->
                                                <div class="modal fade" id="editBranchModal<?= $item['id']; ?>" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Edit Company</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <!-- Your edit form content goes here -->
                                                                <form action="code.php" method="POST">
                                                                    <input type="hidden" name="branch_id"
                                                                        value="<?= $item['id']; ?>">

                                                                    <div class="col-md-12 mt-3">
                                                                        <label for=""><i class="fas fa-building"></i> Branch Name</label>
                                                                        <input type="text" name="branch_name"
                                                                            value="<?= $item['branch_name']; ?>"
                                                                            class="form-control">
                                                                    </div>

                                                                    <div class="col-md-12 mt-3">
                                                                        <label for=""><i class="fa-solid fa-location-dot"></i> Branch Address</label>
                                                                        <input type="text" name="branch_address"
                                                                            value="<?= $item['branch_address']; ?>"
                                                                            class="form-control">
                                                                    </div>

                                                                    <div class="col-md-12 mt-3">
                                                                        <label for=""><i class="fa-solid fa-phone"></i> Contact</label>
                                                                        <input type="text" name="contact"
                                                                            value="<?= $item['contact']; ?>"
                                                                            class="form-control">
                                                                    </div>

                                                                    <div class="col-md-12 mt-3">
                                                                        <label for=""><i class="fas fa-envelope"></i> Email</label>
                                                                        <input type="text" name="email"
                                                                            value="<?= $item['email']; ?>"
                                                                            class="form-control">
                                                                    </div>

                                                                    <!-- Add other form fields for editing as needed -->
                                                                    <hr>
                                                                    <div class="form-group pull-right">
                                                                        <button
                                                                            class="btn btn-primary float-end"
                                                                            type="submit" name="edit_branch">Save
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addBranchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Company</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="code.php" method="POST">

                        <div class="col-md-12 mt-3">
                            <label for=""><i class="fas fa-building"></i> Branch Name</label>
                            <input type="text" name="branch_name" placeholder="Enter Branch Name"
                                class="form-control">
                        </div>

                        <div class="col-md-12 mt-3">
                            <label for=""><i class="fa-solid fa-location-dot"></i> Branch Address</label>
                            <input type="text" name="branch_address" placeholder="Enter Branch Address"
                                class="form-control">
                        </div>

                        <div class="col-md-12 mt-3">
                            <label for=""><i class="fa-solid fa-phone"></i> Contact</label>
                            <input type="text" name="contact" placeholder="Enter Contact" class="form-control">
                        </div>

                        <div class="col-md-12 mt-3">
                            <label for=""><i class="fas fa-envelope"></i> Email</label>
                            <input type="text" name="email" placeholder="Enter Email" class="form-control">
                        </div>

                        <hr>
                        <div class="form-group pull-right">
                            <button class="btn btn-primary float-end" type="submit" name="add_branch">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="js/sidebar.js"></script>

    <script>
        $(".btn-primary").click(function () {
            $("#myModal").modal("show");
        });
    </script>
</body>

</html>
