<?php
include('sidebar_user.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="Images/Ticket -Logo-3.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            margin-left: 100px;
        }

        h2 {
            font-family: "Arial", sans-serif;
            font-style: italic;
        }

        .container {
            margin-top: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 800px;
            /* Increased max-width for better spacing */
            margin: 0 auto;
            /* Center the container */
        }

        label {
            margin-top: 10px;
            margin-bottom: 5px;
            color: #555;
        }

        input {
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 100%;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div style="background:#7a7a7a; padding-top:20px;">
        <h2 style="margin-left: 10px; color:#e7e7e7;">Hello User, Welcome!</h2>
    </div>

    <div class="container mt-4" style="padding: 10px; height: 580px;">
        <h3 class="text-center">Edit Profile</h3>
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="firstname"><i class="fas fa-user"></i> First Name:</label>
                        <input type="text" id="firstname" name="firstname" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="middlename"><i class="fas fa-user"></i> Middle Name:</label>
                        <input type="text" id="middlename" name="middlename" class="form-control">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="lastname"><i class="fas fa-user"></i> Last Name:</label>
                        <input type="text" id="lastname" name="lastname" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="email"><i class="fas fa-envelope"></i> Email:</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="contact-number"><i class="fa-solid fa-phone"></i> Contact Number:</label>
                        <input type="tel" id="contact-number" name="contact-number" class="form-control">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="company"><i class="fas fa-building"></i> Company:</label>
                        <input type="text" id="company" name="company" class="form-control">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="branch"><i class="fa-solid fa-location-dot"></i> Branch:</label>
                        <input type="text" id="branch" name="branch" class="form-control">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="department"><i class="fa-solid fa-users"></i> Department:</label>
                        <input type="text" id="department" name="department" class="form-control">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="username"><i class="fas fa-user"></i> Username:</label>
                        <input type="text" id="username" name="username" class="form-control" required>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="password"><i class="fas fa-lock"></i> Password:</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="profile-picture"><i class="fa-solid fa-paperclip input-group-text"></i></i> Upload Picture:</label>
                <input type="file" id="profile-picture" name="profile-picture" class="form-control-file">
            </div>

            <button type="submit" class="btn btn-primary float-right" style="width: 100px; height: 40px; background-color: green;">Save</button>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>