<?php include('../function/myfunction.php');
include 'sidebar.php'
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
    <link rel="stylesheet" href="css/sidebar.css">
    <title>Dashboard</title>
</head>

<body>
    <div class="main p-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Dashboard</h4>
                        </div>
                        <br>
                        <h2>&nbsp;Welcome Admin!</h2>
                        <p>&nbsp;This dashboard provides you with tools to manage tickets, users, and system settings efficiently.</p>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card widget-card">
                                        <div class="card-body text-center">
                                            <h5 class="card-title"><i class="fa-solid fa-ticket"></i> Total Tickets</h5>
                                            <p>Currently, there are <strong>150</strong> tickets in the system.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card widget-card">
                                        <div class="card-body text-center">
                                            <h5 class="card-title"><i class="fa-solid fa-triangle-exclamation"></i> Resolved Tickets</h5>
                                            <p>Out of the total, <strong>120</strong> tickets have been resolved.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card widget-card">
                                        <div class="card-body text-center">
                                            <h5 class="card-title"><i class="fa-solid fa-spinner"></i> Pending Tickets</h5>
                                            <p>There are <strong>20</strong> tickets pending for resolution.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="js/sidebar.js"></script>

    <script>
        $(".btn-primary").click(function() {
            $("#myModal").modal("show");
        });
    </script>
</body>

</html>