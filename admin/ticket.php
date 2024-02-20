<?php include('../function/myfunction.php');
include 'sidebar_navbar.php'
?>

<?php
$ticket = getAll("ticket");

function getStatusColorClass($status)
{
    switch ($status) {
        case 'Pending':
            return 'text-warning';
        case 'Resolved':
            return 'text-success';
        case 'Unresolved':
            return 'text-primary';
        case 'Cancelled':
            return 'text-danger';
        default:
            return '';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets</title>

    <!-- datatable css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

    <!-- icon css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- datatable css -->
    <script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script defer src="js/table.js"></script>
    <link rel="stylesheet" href="css/sidebar.css">
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
                        <div class="card-body" id="category_table">
                            <table id="example" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Dates</th>
                                        <th>Subject</th>
                                        <th>Department</th>
                                        <th>Requestor</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (mysqli_num_rows($ticket) > 0) {
                                        foreach ($ticket as $item) {
                                    ?>
                                            <tr>
                                                <td><?= $item['date']; ?></td>
                                                <td><?= $item['subject']; ?></td>
                                                <td><?= $item['department']; ?></td>
                                                <td><?= $item['requestor']; ?></td>
                                                <td class="<?= getStatusColorClass($item['status']); ?>">
                                                    <?= $item['status']; ?>
                                                </td>
                                                <td class="table-action">
                                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editCompanyModal<?= $item['ticket_id']; ?>"><i class="fas fa-eye"></i>View</a>
                                                </td>
                                            </tr>

                                            <!-- Edit Company Modal -->
                                            <div class="modal fade" id="editCompanyModal<?= $item['ticket_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Ticket</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- Your edit form content goes here -->
                                                            
                                                            <form action="code.php" method="POST">
                                                                <input type="hidden" name="ticket_id" value="<?= $item['ticket_id']; ?>">


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
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="js/sidebar.js"></script>


    <script>
        function handleTicket(ticketId, action) {
            $.ajax({
                type: "POST",
                url: "update_status.php",
                data: {
                    ticket_id: ticketId,
                    action: action
                },
                success: function(response) {
                    // Handle the success response, e.g., refresh the ticket list
                    location.reload();
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }

        function AcceptTicket(ticketId) {
            handleTicket(ticketId, "accept");
        }

        function DeclineTicket(ticketId) {
            handleTicket(ticketId, "decline");
        }
    </script>
</body>

</html>