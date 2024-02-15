<?php
include('sidebar_user.php');
include('mysql_connect.php');

function getAll($table)
{
    global $con;
    $query = "SELECT * FROM $table";
    return $query_run = mysqli_query($con, $query);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="Images/Ticket -Logo-3.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style>
    h2 {
        font-family: "Arial", sans-serif;
        /* Change the font family here */
        font-style: italic;
        /* Example of additional font style */
    }
</style>

<body style="margin-left: 100px">
    <div style="background:#7a7a7a; padding-top:20px;">
        <!-- Add modal button -->
        <h2 style="margin-left: 10px; color:#e7e7e7;">Hello User, Welcome!</h2>
    </div>

    <div class="continer1">
        <style>
            .custom-btn {
                background-color: #37404a !important;
                /* !important to override Bootstrap's default styles */
                border-color: #37404a !important;
                /* !important to override Bootstrap's default styles */
            }

            .custom-btn:hover {
                background-color: #8C8C8C !important;
                /* !important to override Bootstrap's default styles */
                border-color: #8C8C8C !important;
                /* !important to override Bootstrap's default styles */
            }
        </style>

        <button type="button" class="btn btn-primary custom-btn" data-toggle="modal" data-target="#myModal" style="position: absolute; top: 10px; right: 20px;">Create Ticket</button>
        <h3>
            <center>Overall Ticket List</center>
        </h3>
        <table>
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
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editCompanyModal<?= $item['id']; ?>">Edit</a>
                                <button type="button" class="btn btn-sm btn-danger delete_category_btn" value="<?= $item['id']; ?>">Delete</button>
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
                                                <button class="btn btn-primary float-end" type="submit" name="edit_user">Save
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





    <!-- Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Submit a Ticket</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Include jQuery -->
                <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>







                <!-- Modal Body -->
                <div class="modal-body">
                    <form id="ticketForm">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <i class="fa-solid fa-user input-group-text"></i>
                                </span>
                                <label for="requester" class="sr-only">Requester:</label>
                                <input type="text" class="form-control" id="requester" name="requester" placeholder="Requester">
                            </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-prepend">
                                <i class="fa-solid fa-building input-group-text"></i>
                            </span>
                            <label for="company" class="sr-only">Company:</label>
                            <select class="form-control" id="company" name="company">
                                <option value="">Select Company:</option>
                                <?php
                                $company = getAll("company");
                                if(mysqli_num_rows($company) > 0){
                                    foreach($company as $company){
                                        ?>
                                        <option value="<?= $company['company_name'];?>"><?= $company['company_name'];?></option>
                                        <?php
                                    }
                                }
                                else 
                                {
                                    echo "<option value=''>No Company available</option>";
                                }
                                ?>
                            </select>
                        </div>
                </div>
                <div class="form-group" style="display: none;" id="branchGroup">
                    <div class="input-group">
                        <i class="fa-solid fa-location-dot input-group-text"></i>
                        </span>
                        <label for="branch" class="sr-only">Branch:</label>
                        <select class="form-control" id="branch" name="branch">
                            <option value="branch1">Select Branch:</option>
                            <disabled>
                                <option value="branch1">Mandaluyong City</option>
                                <option value="branch1">Makati City</option>
                                <option value="branch1">Cabuyao Laguna</option>
                                <option value="branch1">General Santos</option>
                                <option value="branch1">Cebu City</option>
                                <option value="branch1">Cagayan De Oro</option>
                                <option value="branch1">Davao City</option>

                        </select>
                    </div>
                </div>

                <div class="form-group" style="display: none;" id="departmentGroup">
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <i class="fa-solid fa-users input-group-text"></i>
                        </span>
                        <label for="department" class="sr-only">Department:</label>
                        <select class="form-control" id="department" name="department">
                            <option value="department1">Select Department:</option>
                            <disabled>
                                <option value="department1">HR</option>
                                <option value="department2">Accounting</option>
                                <option value="department2">Management Info</option>
                                <option value="department2">Purchasing</option>
                                <option value="department2">System Installation</option>
                                <option value="department2">MIS</option>
                                <option value="department2">Building Management System(BMS)</option>
                                <option value="department2">Systems Mechanical</option>
                                <option value="department2">Building Management System(BMS)</option>
                                <option value="department2">Field Service</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <i class="fa-solid fa-comment-alt input-group-text"></i>
                        </span>
                        <label for="concerns" class="sr-only">Concerns/Questions/Inquiries:</label>
                        <textarea class="form-control" id="concerns" name="concerns" rows="4"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <i class="fa-solid fa-paperclip input-group-text"></i>
                        </span>
                        <label for="file" class="sr-only">Attach File:</label>
                        <input type="file" class="form-control-file" id="file" name="file">
                    </div>
                </div>
                </form>


                <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                <script>
                    // jQuery script to handle the visibility of branch and department fields
                    $(document).ready(function() {
                        $('#company').change(function() {
                            if ($(this).val() !== '') {
                                $('#branchGroup').show();
                            } else {
                                $('#branchGroup').hide();
                                $('#departmentGroup').hide();
                            }
                        });

                        $('#branch').change(function() {
                            if ($('#branch').val() !== '') {
                                $('#departmentGroup').show();
                            } else {
                                $('#departmentGroup').hide();
                            }
                        });
                    });
                </script>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Submit</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
    </div>

    <!-- Add Bootstrap JS script -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>