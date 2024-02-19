<?php include('../function/myfunction.php');
include 'sidebar.php'
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
                                        <th>Ticket ID</th>
                                        <th>Company</th>
                                        <th>Branch</th>
                                        <th>Requester</th>
                                        <th>Status</th>
                                        <th>Action</th>
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
                                                <td><?= $item['company']; ?></td>
                                                <td><?= $item['branch']; ?></td>
                                                <td><?= $item['requester']; ?></td>
                                                <td><?= $item['status']; ?></td>
                                                <td class="table-action">
                                                    <button class="btn btn-primary" onclick="AcceptTicket(<?php echo $item['ticket_id']; ?>)">Accept</button>
                                                    <button class="btn btn-warning" onclick="DeclineTicket(<?php echo $item['ticket_id']; ?>)">Decline</button>
                                                </td>
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