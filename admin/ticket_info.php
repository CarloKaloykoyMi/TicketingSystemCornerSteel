<?php include('../function/myfunction.php');
include 'sidebar_navbar.php'
?>

<?php
if (isset($_GET['ticket_id'])) {
    $ticket_id = $_GET['ticket_id'];

    // Fetch order details from the ticket table
    $query = "SELECT * FROM ticket WHERE ticket_id = '$ticket_id'";

    $ticket_result = mysqli_query($con, $query);

    if ($ticket_result && mysqli_num_rows($ticket_result) > 0) {
        $ticket_data = mysqli_fetch_assoc($ticket_result);
        // Now you can use $ticket_data to access order information.
    } else {
        // Handle the case where order data couldn't be retrieved
        $error_message = "Error: Unable to retrieve order data.";
    }
} else {
    // Handle the case where the ticket_id parameter is not provided in the URL
    $error_message = "Error: Missing ticket_id parameter.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Lineicons CSS -->
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />

    <!-- Your existing CSS -->
    <link rel="stylesheet" href="css/sidebar.css">

    <!-- jQuery and DataTables JavaScript -->
    <script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script defer src="js/table.js"></script>

</head>

<body>
    <div class="main p-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tickets</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="list-group fa-padding">
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-body">
                                                <div>
                                                    <hr>
                                                    <a href="ticket.php" class="btn btn-secondary mb-3">Go Back</a> <br>
                                                    <span class="number pull-right"><b>Ticket # <?php echo $ticket_data['ticket_id']; ?></b></span> <br>
                                                    <span class="number pull-right"><b>Status:
                                                            <?php
                                                            $status = $ticket_data['status'];

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
                                                        </b></span>

                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="padding: 5px 10px; font-size: 10px;">
                                                        Update Status
                                                    </button>


                                                    <br>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="code.php" method="POST">
                                                                        <label for="Status" class="form-label"><i class="fa-solid fa-location-dot"></i> Status</label>
                                                                        <select id="Status" name="status" class="form-control" required>
                                                                            <option value="" disabled>Select your Status</option>
                                                                            <?php
                                                                            $currentStatus = $ticket_data['status'];
                                                                            $statusOptions = array("Pending", "Unresolved", "Resolved", "Cancelled");
                                                                            foreach ($statusOptions as $option) {
                                                                                $selected = ($option == $currentStatus) ? 'selected' : '';
                                                                                echo "<option value=\"$option\" $selected>$option</option>";
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                        <!-- Add the ticket_id input field -->
                                                                        <input type="hidden" name="ticket_id" value="<?php echo $ticket_data['ticket_id']; ?>">
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                            <!-- Move the submit button inside the form -->
                                                                            <button class="btn btn-primary float-end" type="submit" name="change_status">Save Changes</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <br>
                                                    <span style="font-size:26px;padding-bottom:10px;"><b> Subject: </b> <?php echo $ticket_data['subject']; ?></span>
                                                </div>

                                                <p class="info">Request by <a href="#"><?php echo $ticket_data['requestor']; ?></a> &nbsp; <?php echo date('M d, Y', strtotime($ticket_data['date_created'])); ?>
                                                    <i class="fa fa-comments"></i>
                                                </p>
                                                <hr>
                                                <b>Concern</b>
                                                <p><?php echo $ticket_data['concern']; ?></p>

                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="js/sidebar.js"></script>

</body>

</html>