<?php include('function/myfunction.php');
include 'sidebar_navbar.php';
include('crud.php');

if (!isset($_SESSION['auth_user']['username'])) {
    session_destroy();
    unset($_SESSION['auth_user']['username']);
    unset($_SESSION['auth_user']['user_id']);
    unset($_SESSION['auth_user']['email']);
    unset($_SESSION['auth_user']['role']);
    unset($_SESSION['auth_user']['lastname']);
    unset($_SESSION['auth_user']['firstname']);
    echo '<script>window.location.href = "emplogin.php";</script>';
} else {
    $username = $_SESSION['auth_user']['username'];
    $user_id = $_SESSION['auth_user']['user_id'];
    $email = $_SESSION['auth_user']['email'];
    $role = $_SESSION['auth_user']['role'];
    $lname = $_SESSION['auth_user']['lastname'];
    $fname = $_SESSION['auth_user']['firstname'];
}

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/sidebar_navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>User Ticket Info</title>
</head>
<style>
    .dialog-box {
        max-width: 60%;
        margin-bottom: 1rem;
        border-radius: 15px;
        display: flex;
        flex-direction: column;
        background-color: #f5f5f5;
        position: relative;
    }

    .dialog-header {
        padding: 0.5rem 1rem;
        background-color: #f5f5f5;
        border-radius: 15px 15px 0 0;
        border-bottom: 1px solid #ddd;
        display: flex;
        align-items: center;
    }

    .dialog-header img {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        object-fit: cover;
        margin-right: 0.5rem;
    }

    .dialog-header p {
        margin-bottom: 0;
    }

    .dialog-body {
        padding: 0.5rem 1rem;
        border-radius: 0 0 15px 15px;
        background-color: #fff;
    }

    .reply-dialog {
        align-self: flex-start;
    }

    .user-dialog {
        align-self: flex-end;
        background-color: #dcf8c6;
    }
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

            <div class="grid support-content">
                <div class="grid-body">
                   <center><h2>Ticket Details</h2></center

                    <hr>
       </head>

    
<body>
    <div class="main p-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                        <h4 style="color: black;"><i class="fas fa-ticket"></i> Tickets <?= $lname ?></h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="list-group fa-padding">
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-body">
                                                <div>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="list-group fa-padding">
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-body">
                                            <div>
                                            <hr>
                                                    <div class="text-right">
    <a href="ticket.php" class="btn btn-secondary mb-3" style="position: absolute; top: 40px; right: 10px;">Go Back</a>
</div>
             
<span class="number pull-right"><strong>Ticket #<?php echo $ticket_data['ticket_id']; ?></strong></span> <br>
                                           
<br>
                                                    <span style="font-size:26px;padding-bottom:10px;"><b><i class="fas fa-file"></i> Subject: </b> <?php echo $ticket_data['subject']; ?></span>
                                                </div>

                                                <p class="info">Requested by: <a href="#"><?php echo $ticket_data['requestor']; ?></a> <br>
                                                    Date: <?php echo date('M d, Y', strtotime($ticket_data['date_created'])); ?></p>


                                               
                                                </p>
                                                <hr>
                                                <b><i class="	fas fa-comments"></i> Concern:</b>
                                                <p><?php echo $ticket_data['concern']; ?></p>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#replyModal" style="position: absolute; top: 200px; right: 10px;">
                                                    Reply
                                                </button>



                                                <!-- Modal -->
                                                <div class="modal fade" id="replyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Reply Box</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="crud.php" method="POST">
                                                                    <input type="hidden" name="ticket_id" value="<?php echo $ticket_id; ?>">
                                                                    <div class="mb-3">
                                                                        <label for="replyMessage" class="form-label">Reply</label>
                                                                        <textarea class="form-control" name="reply" id="exampleModal" rows="3"></textarea>
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
                                       <div class="dialog-header">
                                        <img src="img/usernocheck.png" alt="Profile Icon" class="dialog-profile-icon">
                                        <p class="mb-0">User</p>
                                    </div>
                                        <div class="dialog-body">
                                            <p class="mb-0"><?php echo "" . $row["reply"]; ?></p>
                                        </div>
                                    </div>
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