<?php include('function/myfunction.php');
include 'sidebar_navbar.php';
include('crud.php');

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

$query = "SELECT * FROM ticket_reply WHERE ticket_id = '$ticket_id'";

$reply_result = mysqli_query($con, $query);

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

    <title>Ticket Info</title>
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

<body>
    <div class="container-fluid">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="js/sidebar.js"></script> <br>
        <div class="container1">

            <h3>
                <center>Ticket</center>
            </h3>

            <div class="grid support-content">
                <div class="grid-body">
                    <h2>Ticket Details</h2>

                    <hr>
                    <a href="home_user.php" class="btn btn-secondary mb-3">Go Back</a>

                    <div class="row">
                        <div class="col-md-12">
                            <ul class="list-group fa-padding">
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-body">
                                            <div>
                                                <span class="number pull-right">Ticket #<?php echo $ticket_data['ticket_id']; ?> </span> <br>
                                                <span style="font-size:26px;padding-bottom:10px;"><?php echo $ticket_data['subject']; ?></span>

                                                <span style="color:green;font-weight:bold; padding:4px;">Open</span>

                                            </div>
                                            <p class="info">Request by <a href="#"><?php echo $ticket_data['requestor']; ?></a> &nbsp; <?php echo date('M d, Y', strtotime($ticket_data['date_created'])); ?>
                                                <i class="fa fa-comments"></i>
                                            </p>

                                            <p><?php echo $ticket_data['concern']; ?></p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="list-group fa-padding" style="padding-top: 10px;">
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-body">
                                            <div>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    Reply
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="crud.php" method="POST">
                                                                    <input type="hidden" name="ticket_id" value="<?php echo $ticket_id; ?>">
                                                                    <div class="mb-3">
                                                                        <label for="replyMessage" class="form-label">Reply</label>
                                                                        <textarea class="form-control" name="reply" id="replyMessage" rows="3"></textarea>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        <!-- Move the submit button inside the form -->
                                                                        <button class="btn btn-primary float-end" type="submit" name="add_reply">Save Changes</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </li>
                            </ul>

                            <?php
                            // Check if there's any result
                            if ($reply_result->num_rows > 0) {
                                // Output data of each row
                                echo "<table>";
                                while ($row = $reply_result->fetch_assoc()) {
                            ?>
                                    <ul class="list-group fa-padding" style="padding-top: 5px;">
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="media-body">
                                                    <div>
                                                        <?php
                                                        echo "User Reply: " . $row["reply"];
                                                        ?>
                                                    </div>
                                                </div>
                                        </li>
                                    </ul>
                            <?php
                                }
                                echo "</table>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>