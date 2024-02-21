<?php
include('sidebar_user.php');
include('function/myfunction.php');
include('crud.php');
?>

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
    .btn-custom {
        background-color: #333333;
        color: #ffffff;
        transition: color 0.3s;
    }

    .btn-custom:hover {
        color: #ffffff;
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $('#company').change(function() {
            var companyName = $(this).val();

            $.ajax({
                url: 'get_branches.php',
                type: 'POST',
                data: {
                    company_name: companyName
                },
                success: function(response) {
                    console.log(response);
                    $('#branch').html(response);
                    $('#branchGroup').toggle(response.trim() !== '');
                },
                error: function() {
                    alert('Error fetching branches.');
                }
            });
        });
    });
</script>
</head>

<body style="margin-left: 100px">
    <div style="background:#7a7a7a; padding-top:20px;">
        <h2 style="margin-left: 10px; color:#e7e7e7;">Hello User, Welcome!</h2>
    </div>

    <div class="container1">
        <button type="button" class="btn btn-custom" data-toggle="modal" data-target="#myModal" style="position: absolute; top: 10px; right: 20px;">Create Ticket</button>
        <h3>
            <center>Overall Ticket List</center>
        </h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Ticket ID</th>
                    <th>Requestor</th>
                    <th>Subject</th>
                    <th>Status</th>
                    <th>Date Created</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $ticket = getAll("ticket");

                if (mysqli_num_rows($ticket) > 0) {
                    foreach ($ticket as $item) {
                ?>
                        <tr>
                            <td><?= $item['ticket_id']; ?></td>
                            <td><?= $item['requestor']; ?></td>
                            <td><?= $item['subject']; ?></td>
                            <td><?= $item['status']; ?></td>
                            <td><?= date('F j, Y h:i:s A', strtotime($item['date_created'])); ?></td>
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

    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Submit a Ticket</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <form action="crud.php" method="POST" id="ticketForm">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <i class="fa-solid fa-user input-group-text"></i>
                                </span>
                                <label for="requestor" class="sr-only">Requestor</label>
                                <input type="text" class="form-control" id="requestor" name="requestor" placeholder="Requestor">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <i class="fa-solid fa-pencil input-group-text"></i>
                                </span>
                                <label for="subject" class="sr-only">Subject</label>
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                            </div>
                        </div>

                        <div class="input-group">
                            <span class="input-group-prepend">
                                <i class="fa-solid fa-building input-group-text"></i>
                            </span>
                            <label for="company" class="sr-only">Company</label>
                            <select class="form-control" id="company" name="company">
                                <option value="">Select Company:</option>
                                <?php
                                $company = getAll("company");
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
                                </select>
                            </div>
                        </div>

                        <div class="input-group">
                            <span class="input-group-prepend">
                                <i class="fa-solid fa-building input-group-text"></i>
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
                                    echo "<option value=''>No Department available</option>";
                                }
                                ?>
                            </select>
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

                        <div class="modal-footer">
                            <button type="submit" name="add_ticket" class="btn btn-success">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>