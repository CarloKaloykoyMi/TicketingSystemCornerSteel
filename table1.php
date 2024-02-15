<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Example</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="assets/css/side.css" rel="stylesheet" />
</head>

<body>

    <div class="d-flex" id="wrapper">

        <?php
        include('sidebar.php');
        ?>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Page content-->
            <div class="container-fluid">
                <h1 class="mt-4">Lorem ipsum dolor sit amet</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dapibus, tellus eu interdum vestibulum, nisi tellus ultricies metus, eu tempus dolor ipsum venenatis leo.
                    Aliquam finibus elementum ligula quis tempor. Nullam condimentum efficitur elit ut viverra. </p>

                <!-- Adding a responsive table -->
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>John</td>
                                <td>Doefddf</td>
                                <td>john.doe@example.com</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jane</td>
                                <td>Smith</td>
                                <td>jane.smith@example.com</td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
