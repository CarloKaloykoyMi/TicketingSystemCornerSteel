<?php include('function/myfunction.php');
include 'sidebar_navbar.php';
include('crud.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/sidebar_navbar.css">


    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

    <!-- jQuery and DataTables JavaScript -->
    <script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script defer src="script.js"></script>

    <title>Home</title>
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


</head>
<style>
    .btn-custom:hover {
        background-color: gray;
        color: #fff;
        /* Set the desired text color for hover state */
    }
</style>

<body>
    <div class="container-fluid">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="js/sidebar.js"></script> <br>
        <div class="container1">
            <button type="button" class="btn btn-custom" data-toggle="modal" data-target="#myModal" style="position: absolute; top: 70px; right: 10px;">Create Ticket</button>
            <h3>
                <center>Overall Ticket List</center>
            </h3>
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Ticket ID</th>
                        <th class="text-center">Requestor</th>
                        <th class="text-center">Subject</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Date Created</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $ticket = getAll("ticket");

                    if (mysqli_num_rows($ticket) > 0) {
                        foreach ($ticket as $item) {
                    ?>
                            <tr>
                                <td><u><a href="ticket_info.php?ticket_id=<?php echo $item['ticket_id']; ?>" class="text-body fw-bold">Ticket #<?php echo $item['ticket_id']; ?></a></u></td>
                                <td><?= $item['requestor']; ?></td>
                                <td class="text-justify"><?= $item['subject']; ?></td>
                                <td class="text-center">
                                    <?php
                                    $status = $item['status'];

                                    if ($status == 'Pending') {
                                        echo '<span class="badge text-bg-warning">' . $status . '</span>';
                                    } elseif ($status == 'Resolved') {
                                        echo '<span class="badge text-bg-success">' . $status . '</span>';
                                    } elseif ($status == 'Cancelled') {
                                        echo '<span class="badge text-bg-danger">' . $status . '</span>';
                                    } else {
                                        echo '<span class="badge text-bg-primary">' . $status . '</span>';
                                    }
                                    ?>
                                </td>
                                <td class="text-center"><?= date('F j, Y h:i:s A', strtotime($item['date_created'])); ?></td>
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
                                    <input type="text" class="form-control" id="requestor" name="requestor" placeholder="Requestor" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <i class="fa-solid fa-pencil input-group-text"></i>
                                    </span>
                                    <label for="subject" class="sr-only">Subject</label>
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                                </div>
                            </div>

                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <i class="fa-solid fa-building input-group-text"></i>
                                </span>
                                <label for="company" class="sr-only">Company</label>
                                <select class="form-control" id="company" name="company" required>
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
                            <br>
                            <div class="form-group" style="display: none;" id="branchGroup">
                                <div class="input-group">
                                    <i class="fa-solid fa-location-dot input-group-text"></i>
                                    </span>
                                    <label for="branch" class="sr-only">Branch:</label>
                                    <select class="form-control" id="branch" name="branch" required>
                                        <option value="">Select Branch:</option>
                                    </select>
                                </div>
                            </div>

                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <i class="fa-solid fa-building input-group-text"></i>
                                </span>
                                <label for="department" class="sr-only">Department:</label>
                                <select class="form-control" id="department" name="department" required>
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
                            <br>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <i class="fa-solid fa-comment-alt input-group-text"></i>
                                    </span>
                                    <label for="concerns" class="sr-only">Concerns/Questions/Inquiries:</label>
                                    <textarea class="form-control" id="concern" name="concern" rows="4" placeholder="Concerns" required></textarea>
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
    </div>
</body>


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

</html>