<?php
include('sidebar_user.php');
include('mysql_connect.php');
include('crud.php');


function getAll($table) //function to call the tables from the dabatabase
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

    <style>
        .btn-custom {
            background-color: #333333;
            color: #ffffff;
            transition: color 0.3s;
        }

        .btn-custom:hover {
            color: #ffffff;
        }
    </style>
</head>

<body style="margin-left: 100px">
    <div style="background:#7a7a7a; padding-top:20px;">
        <h2 style="margin-left: 10px; color:#e7e7e7;">Hello User, Welcome!</h2>
    </div>

    <div class="continer1">

        <!-- button for modal  -->
        <button type="button" class="btn btn-custom" data-toggle="modal" data-target="#myModal" style="position: absolute; top: 10px; right: 20px;">Create Ticket</button>
        <h3>
            <center>Overall Ticket List</center>
        </h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Ticket ID</th>
                    <th>Requestor</th>
                    <!-- <th>Assigned</th> -->
                    <th>Concern</th>
                    <th>Status</th>
                    <th>Date Created</th>
                    <!-- <th>Date Updated</th> -->
                </tr>
            </thead>

            <tbody>
                <?php
                $ticket = getAll("ticket"); //get the table from the function

                if (mysqli_num_rows($ticket) > 0) {
                    foreach ($ticket as $item) { //loop each ticket per item
                ?>
                        <tr>
                            <td><?= $item['ticket_id']; ?></td>
                            <td><?= $item['requester']; ?></td>
                            <td><?= $item['concern']; ?></td>
                            <td><?= $item['status']; ?></td>
                            <td><?= $item['date_created']; ?></td>
                        </tr>
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
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Submit a Ticket</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <form action="crud.php" method="POST" id="ticketForm">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <i class="fa-solid fa-user input-group-text"></i>
                                </span>
                                <label for="requester" class="sr-only">Requestor:</label>
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
                                $company = getAll("company"); //get the table from the function
                                if (mysqli_num_rows($company) > 0) {
                                    foreach ($company as $company) {
                                ?>
                                        <option value="<?= $company['company_name']; ?>"><?= $company['company_name']; ?></option>
                                <?php
                                    }
                                } else {
                                    echo "<option value=''>No Company available</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group" style="display: none;" id="branchGroup">
                            <div class="input-group">
                                <i class="fa-solid fa-location-dot input-group-text"></i>
                                </span>
                                <label for="branch" class="sr-only">Branch:</label>
                                <select class="form-control" id="branch" name="branch">
                                    <option value="">Select Branch:</option>
                                    <?php
                                    $branch = getAll("branch");
                                    if (mysqli_num_rows($branch) > 0) {
                                        foreach ($branch as $branch) {
                                    ?>
                                            <option value="<?= $branch['branch_name']; ?>"><?= $branch['branch_name']; ?></option>
                                    <?php
                                        }
                                    } else {
                                        echo "<option value=''>No branch available</option>";
                                    }
                                    ?>
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
                                    <option value="">Select Department:</option>
                                    <?php
                                    $department = getAll("department");
                                    if (mysqli_num_rows($department) > 0) {
                                        foreach ($department as $department) {
                                    ?>
                                            <option value="<?= $department['department_name']; ?>"><?= $department['department_name']; ?></option>
                                    <?php
                                        }
                                    } else {
                                        echo "<option value=''>No department available</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <i class="fa-solid fa-comment-alt input-group-text"></i>
                                </span>
                                <label for="concerns" class="sr-only">Concerns/Questions/Inquiries:</label>
                                <textarea class="form-control" id="concern" name="concern" rows="4"></textarea>
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
                        <!-- Modal Footer -->
                        <div class="modal-footer">
                            <button type="submit" name="add_ticket" class="btn btn-success">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS script -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>