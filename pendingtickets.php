<?php
include('sidebar_navbar.php')
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
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/sidebar_navbar.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<style>
    h2 {
        font-family: "Arial", sans-serif; /* Change the font family here */
        font-style: italic; /* Example of additional font style */
    }
</style>

<body>
<div class="container-fluid">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="js/sidebar.js"></script> <br>
 <div class="continer1">
 <style>
        .custom-btn {
            background-color: #37404a !important; /* !important to override Bootstrap's default styles */
            border-color: #37404a !important; /* !important to override Bootstrap's default styles */
        }

        .custom-btn:hover {
            background-color: #8C8C8C !important; /* !important to override Bootstrap's default styles */
            border-color: #8C8C8C !important; /* !important to override Bootstrap's default styles */
        }
    </style>
        <h3><center>Pending List</center></h3>
        <table class="table  table-bordered ">
            <thead
                <tr>
                    <th scope="col">Ticket ID</th>
                    <th scope="col">Requester</th>
                    <th scope="col">Asigned</th>
                    <th scope="col">Status</th>
                    <th scope="col">Date Created</th>
                    <th scope="col">Date Updated</th>


                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>@fat</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                </tr>
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
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-prepend">
                    <i class="fa-solid fa-building input-group-text"></i>
                </span>
                <label for="company" class="sr-only">Company:</label>
                <select class="form-control" id="company" name="company">
                <option value="company1">Select Company:</option><disabled>
                <option value="company1">Comfac Global Group</option>
                <option value="company1">Comfac Technology Options (CTO)</option>
                <option value="company2">Cornersteel Systems Corporation</option>
                <option value="company2">Energy Specialist Company(ESCO)</option>
                </select>
            </div>
        </div>
        <div class="form-group" style="display: none;" id="branchGroup">
            <div class="input-group">
            <i class="fa-solid fa-location-dot input-group-text"></i>
                </span>
                <label for="branch" class="sr-only">Branch:</label>
                <select class="form-control" id="branch" name="branch">  
            <option value="branch1">Select Branch:</option><disabled>     
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
                <option value="department1">Select Department:</option><disabled>
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
        $(document).ready(function () {
            $('#company').change(function () {
                if ($(this).val() !== '') {
                    $('#branchGroup').show();
                } else {
                    $('#branchGroup').hide();
                    $('#departmentGroup').hide();
                }
            });

            $('#branch').change(function () {
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
    </div>
</body>

</html>
