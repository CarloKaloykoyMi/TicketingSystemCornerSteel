<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Products</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/logo3.ico">

    <!-- third party css -->
    <link href="assets/css/vendor/responsive.bootstrap5.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

    <script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script defer src="script.js"></script>

    <!-- DataTables Buttons CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/buttons.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap5.min.css">

    <!-- DataTables Buttons JavaScript -->
    <script defer src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script defer src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap5.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>

    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script defer src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script defer src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
    <script defer src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script>

    <!-- App css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
    <link rel="stylesheet" href="css/table.css">

</head>

<body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu" style="background-color: #212A37;">

            <!-- LOGO -->
            <a href="dashboard.php" class="logo text-center logo-light">
                <span class="logo-lg" style="background-color: #212A37;">
                    <img src="assets/images/logo.png" alt="" height="100">
                </span>
                <span class="logo-sm" style="background-color: #212A37;">
                    <img src="assets/images/logo.png" alt="" height="47">
                </span>
            </a>
            <br> <br>

            <div class="h-100" id="leftside-menu-container" data-simplebar="">

                <!--- Sidemenu -->
                <ul class="side-nav">

                    <li class="side-nav-title side-nav-item">Navigation</li>

                    <li class="side-nav-item">
                        <a href="dashboard.php" class="side-nav-link">
                            <i class="dripicons-home"></i>
                            <span> Dashboard </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarEcommerceProducts" aria-expanded="false" aria-controls="sidebarEcommerceProducts" class="side-nav-link">
                            <i class="mdi mdi-clipboard-text-multiple-outline"></i>
                            <span> Products </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarEcommerceProducts">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="products.php">List of Products</a>
                                </li>
                                <li>
                                    <a href="category.php">Product Category</a>
                                </li>
                                <li>
                                    <a href="manage_product.php">Manage Product</a>
                                </li>
                                  <li>
                                        <a href="supplier.php">Supplier</a>
                                    </li>
                                    <li>
                                        <a href="shippingtax.php">Shipping & Tax</a>
                                    </li>
                            </ul>
                        </div>
                    </li>

                    <ul class="side-nav">
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarInventory" aria-expanded="false" aria-controls="sidebarInventory" class="side-nav-link">
                                <i class="mdi mdi-clipboard-text-multiple-outline"></i>
                                <span> Inventory </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarInventory">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="inventory.php">Inventory Products</a>
                                    </li>
                                    <li>
                                        <a href="inventory_variation.php">Inventory Variation</a>
                                    </li>
                                    <li>
                                        <a href="inventory_report.php">Inventory Reports</a>
                                    </li>
                                </ul>
                            </div>
                        </li>



                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEcommerceOrder" aria-expanded="false" aria-controls="sidebarEcommerceOrder" class="side-nav-link">
                                <i class=" uil-shopping-cart-alt"></i>
                                <span> Order </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEcommerceOrder">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="order.php">Order Details</a>
                                    </li>
                                    <li>
                                        <a href="order_onsite.php">Order Onsites</a>
                                    </li>
                                    <li>
                                        <a href="order_history_admin.php">Order History</a>
                                    </li>
                                    <li>
                                        <a href="refund_admin.php">Request Refund</a>
                                    </li>
                                      <li>
                                            <a href="admin_cancel_order.php">Cancel Order</a>
                                        </li>
                                </ul>
                            </div>
                        </li>

                        <ul class="side-nav">
                            <li class="side-nav-item">
                                <a data-bs-toggle="collapse" href="#sidebarSales" aria-expanded="false" aria-controls="sidebarSales" class="side-nav-link">
                                    <i class=" dripicons-graph-pie"></i>
                                    <span> Sales </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarSales">
                                    <ul class="side-nav-second-level">
                                        <li>
                                            <a href="sales_report.php">Sales Report</a>
                                        </li>
                                        <li>
                                            <a href="sales_filter.php">Sales Filter</a>
                                        </li>
                                        <li>
                                            <a href="sales_graph.php">Sales Graph</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <ul class="side-nav">
                                <li class="side-nav-item">
                                    <a data-bs-toggle="collapse" href="#sidebarProfit" aria-expanded="false" aria-controls="sidebarProfit" class="side-nav-link">
                                        <i class=" uil-money-insert"></i>
                                        <span> Profit </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarProfit">
                                        <ul class="side-nav-second-level">
                                            <li>
                                                <a href="profit_report.php">Profit Report</a>
                                            </li>
                                            <li>
                                                <a href="profit_filter.php">Profit Filter</a>
                                            </li>
                                            <li>
                                                <a href="profit_graph.php">Profit Graph</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>

                            <ul class="side-nav">
                                <li class="side-nav-item">
                                    <a data-bs-toggle="collapse" href="#sidebarCustomer" aria-expanded="false" aria-controls="sidebarCustomer" class="side-nav-link">
                                        <i class=" uil-shopping-cart-alt"></i>
                                        <span> Customer </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarCustomer">
                                        <ul class="side-nav-second-level">
                                            <li>
                                                <a href="customers.php">List of Customers</a>
                                            </li>
                                            <li>
                                                <a href="feedback.php">Customer Concerns</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>

                          <ul class="side-nav">
                            <li class="side-nav-item">
                                <a data-bs-toggle="collapse" href="#sidebarAdmin" aria-expanded="false" aria-controls="sidebarAdmin" class="side-nav-link">
                                    <i class=" mdi mdi-file-document-edit-outline"></i>
                                    <span> Admin </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarAdmin">
                                    <ul class="side-nav-second-level">
                                        <li>
                                            <a href="admins.php">Admin Details</a>
                                        </li>
                                        <li>
                                            <a href="driver.php">Driver Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>

                            <ul class="side-nav">
                                <li class="side-nav-item">
                                    <a data-bs-toggle="collapse" href="#sidebarAudit" aria-expanded="false" aria-controls="sidebarAudit" class="side-nav-link">
                                        <i class=" uil-shopping-cart-alt"></i>
                                        <span> Audit Trail </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarAudit">
                                        <ul class="side-nav-second-level">
                                            <li>
                                                <a href="admin_logs.php">Admin Logs</a>
                                            </li>
                                            <li>
                                                <a href="user_logs.php">User Logs</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <!-- End Sidebar -->

                            <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                <div class="navbar-custom">
                    <ul class="list-unstyled topbar-menu float-end mb-0">
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="account-user-avatar">
                                    <?php
                                    if (!empty($user_image)) {
                                        // Display the user's image if available
                                        echo '<img src="uploaded_img/' . $user_image . '" alt="user" class="rounded-circle">';
                                    } else {
                                        // Display a default avatar image when no user image is available
                                        echo '<img src="assets/images/profile.jpg" alt="Default Avatar" class="rounded-circle">';
                                    }
                                    ?>
                                </span>
                                <span>
                                    <span class="account-user-name"><?php echo $admin_data['firstName'] ?></span>
                                    <span class="account-position">Admin</span>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                <!-- item-->
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="profile_admin.php" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-circle me-1"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="logout_admin.php" class="dropdown-item notify-item">
                                    <i class="mdi mdi-logout me-1"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>

                    </ul>
                    <button class="button-menu-mobile open-left">
                        <i class="mdi mdi-menu"></i>
                    </button>
                    <div class="app-search dropdown d-none d-lg-block">
                        <form>
                        </form>
                    </div>
                </div>
                <!-- end Topbar -->

                <!-- Start Content-->
                <div class="container-fluid">

                    <?php
                    if (isset($_GET['message']) && isset($_GET['class'])) {
                        $alert_message = $_GET['message'];
                        $alert_class = $_GET['class'];
                        echo '<div class="alert ' . $alert_class . ' alert-dismissible fade show" role="alert">
                        <i class="dripicons-checkmark me-2"></i>' . $alert_message . '
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                    }
                    ?>

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                        <li class="breadcrumb-item">Products</a></li>
                                        <li class="breadcrumb-item active">List of Products</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Products</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <div class="col-xl-8">
                                            <!-- Content on the left side (if any) -->
                                        </div>
                                        <div class="col-xl-4 text-end"> <!-- Use text-end to right-align the button -->
                                            <div class="mt-2">
                                                <!-- Add this form wherever you want in your HTML -->
                                                <form method="post" action="update_threshold.php">
                                                    <label for="notificationThreshold">Notification Threshold:</label>
                                                    <input type="number" name="notificationThreshold" value="<?php echo $notification_threshold; ?>" min="1">
                                                    <button type="submit" class="btn btn-primary">Update Threshold</button>
                                                </form>
                                                <br>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#productModal">Add Product</button>
                                            </div>
                                        </div><!-- end col-->
                                    </div>

                                    <div class="table-responsive">
                                        <table id="example" class="table dt-responsive nowrap w-100" style="width:100%">
                                            <thead class="table-light">
                                                <tr>
                                                    <th class="all">Product ID</th>
                                                    <th>SKU</th>
                                                    <th>Product</th>
                                                    <th>Category</th>
                                                    <th>Supplier</th>
                                                    <th>Supplier Price</th>
                                                    <th>Unit Price</th>
                                                    <th>Starting Quantity</th>
                                                    <th>Stocks</th>
                                                    <th>Date Added</th>
                                                    <th style="width: 85px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                // Fetch the notification threshold from the database
                                                $result = $conn->query("SELECT threshold_value FROM notification_threshold");
                                                $row = $result->fetch_assoc();
                                                $notification_threshold = $row['threshold_value'];

                                                $select_products = mysqli_query($conn, "SELECT p.*, MIN(pi.img) AS first_image, GROUP_CONCAT(pi.img) AS all_images FROM `tb_product` p 
                                                LEFT JOIN `product_image` pi ON p.product_id = pi.product_id GROUP BY p.product_id");
                                                if (mysqli_num_rows($select_products) > 0) {
                                                    $total_quantity = 0;
                                                    while ($row = mysqli_fetch_assoc($select_products)) {
                                                        if ($row['qty'] == 0 && $row['new_qty'] > 0) {
                                                            $row['qty'] = $row['new_qty'];
                                                            $row['new_qty'] = 0;
                                                        }

                                                        $stock_status = ($row['qty'] <= 0) ? 'Out of Stock' : 'Instock';
                                                        $badge_class = ($stock_status == 'Instock') ? 'badge-success-lighten' : 'badge-danger-lighten';


                                                        if ($row['qty'] <= $notification_threshold) {
                                                            $mail = new PHPMailer(true);
                                                            $mail->isSMTP();
                                                            $mail->Host = 'smtp.gmail.com';
                                                            $mail->SMTPAuth = true;
                                                            $mail->Username = 'ksnjsmn@gmail.com';
                                                            $mail->Password = 'fgphmbjyyrxfbbnf';
                                                            $mail->Port = 587;
                                                            $mail->SMTPSecure = 'tls';
                                                            $mail->isHTML(true);
                                                            $mail->setFrom('ksnjsmn@gmail.com', 'Admin');
                                                            $mail->addAddress('estrera.evalyngrace@gmail.com');
                                                            $mail->Subject = ('Product Quantity Notification');
                                                            $mail->Body = ('Good Day. The product ID ' . $row['product_id'] . ' - ' . $row['name'] . ' has only have ' . $row['qty'] . '. Please replenish the quantity immediately. Thank you');
                                                            $mail->send();
                                                        }
                                                ?>
                                                        <tr>
                                                            <td><?php echo $row['product_id']; ?></td>
                                                            <td><?php echo $row['sku']; ?></td>
                                                            <td>
                                                                <img src="uploaded_img/<?= $row['first_image'] ?>" alt="prod" class="rounded me-3" height="75">
                                                                <p class="m-0 d-inline-block align-middle font-14"><?php echo $row['name']; ?></p>
                                                            </td>
                                                            <td><?php echo $row['category']; ?></td>
                                                            <td><?php echo $row['supplier']; ?></td>
                                                            <td>₱<?php echo number_format($row['supplier_price'], 2); ?></td>
                                                            <td>₱<?php echo number_format($row['price'], 2); ?></td>
                                                            <td><?php echo ($row['qty'] == 0) ? '0' : $row['qty']; ?></td>

                                                            <td>
                                                                <h4><span class="badge <?php echo $badge_class; ?>"><?php echo $stock_status; ?></span></h4>
                                                            </td>
                                                            <td><?php echo date('F j, Y', strtotime($row['date_added'])); ?></td>
                                                            <td class="table-action">
                                                                <button type="button" class="btn btn-info rounded style=" background-color: #3085C3; color: white; data-bs-toggle="modal" data-bs-target="#info_<?php echo $row['product_id']; ?>">
                                                                    <i class="mdi mdi-eye"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-dark btn-rounded" data-bs-toggle="modal" data-bs-target="#edit_<?php echo $row['product_id']; ?>" style="background-color: #5C5470;">
                                                                    <i class="mdi mdi-clipboard-edit"></i>
                                                                </button>
                                                                <button class="btn btn-danger btn-rounded delete-btn" data-product-id="<?php echo $row['product_id']; ?>"><i class="mdi mdi-delete"></i></button>
                                                            </td>
                                                        </tr>

                                                        <!-- Info MODAL -->
                                                        <div class="modal fade" id="info_<?php echo $row['product_id']; ?>" tabindex="-1" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="card text-center">
                                                                        <div class="card-body">
                                                                            <div class="row">
                                                                                <div class="col-lg-6">
                                                                                    <!-- Product image carousel -->
                                                                                    <div id="carousel_<?php echo $row['product_id']; ?>" class="carousel slide" data-bs-ride="carousel">

                                                                                        <div class="carousel-indicators">
                                                                                            <?php
                                                                                            $images = explode(',', $row['all_images']);
                                                                                            for ($i = 0; $i < count($images); $i++) {
                                                                                            ?>
                                                                                                <li data-bs-target="#carousel_<?php echo $row['product_id']; ?>" data-bs-slide-to="<?php echo $i; ?>" <?php echo ($i === 0) ? 'class="active"' : ''; ?>></li>
                                                                                            <?php
                                                                                            }
                                                                                            ?>
                                                                                        </div>
                                                                                        <div class="carousel-inner">
                                                                                            <?php
                                                                                            foreach ($images as $index => $image) {
                                                                                            ?>
                                                                                                <div class="carousel-item <?php echo ($index === 0) ? 'active' : ''; ?>">
                                                                                                    <img class="d-block img-fluid" src="uploaded_img/<?php echo $image; ?>" alt="Product Image">
                                                                                                </div>
                                                                                            <?php
                                                                                            }
                                                                                            ?>
                                                                                        </div>
                                                                                        <a class="carousel-control-prev" href="#carousel_<?php echo $row['product_id']; ?>" role="button" data-bs-slide="prev">
                                                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                                            <span class="visually-hidden">Previous</span>
                                                                                        </a>
                                                                                        <a class="carousel-control-next" href="#carousel_<?php echo $row['product_id']; ?>" role="button" data-bs-slide="next">
                                                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                                            <span class="visually-hidden">Next</span>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6">
                                                                                    <!-- Other product details -->
                                                                                    <h3 class="mt-0"><?php echo $row['name']; ?></h3>
                                                                                    <p class="font-10">
                                                                                        Product ID: <?php echo $row['product_id']; ?>
                                                                                        <br>
                                                                                        SKU: <?php echo $row['sku']; ?>
                                                                                    </p>

                                                                                    <p class="font-16">
                                                                                    <h4>
                                                                                        <span class="badge <?php echo ($row['qty'] > 0) ? 'badge-success-lighten' : 'badge-danger-lighten'; ?>">
                                                                                            <?php echo ($row['qty'] > 0) ? 'Instock' : 'Out of Stock'; ?>
                                                                                        </span>
                                                                                    </h4>
                                                                                    <h5><span>Stocks:</span>&nbsp;<?php echo $row['qty']; ?></h5>
                                                                                    <h5><span>Category:</span>&nbsp;<?php echo $row['category']; ?></h5>
                                                                                    <h5><span>Supplier:</span>&nbsp;<?php echo $row['supplier']; ?></h5>


                                                                                    </p>

                                                                                    <!-- Product description -->
                                                                                    <div class="mt-4">
                                                                                        <h6 class="font-14">Price:</h6>
                                                                                        <h3>₱<?php echo $row['price']; ?></h3>
                                                                                    </div>

                                                                                    <!-- Quantity -->
                                                                                    <div class="mt-4">
                                                                                        <h6 class="font-14">Quantity</h6>
                                                                                        <?php echo $row['qty']; ?>
                                                                                    </div>

                                                                                    <!-- Product description -->
                                                                                    <div class="mt-4">
                                                                                        <h6 class="font-14">Description:</h6>
                                                                                        <p><?php echo $row['prod_desc']; ?></p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Edit MODAL -->
                                                        <div class="modal fade" id="edit_<?php echo $row['product_id']; ?>" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="ModalLabel">Edit Product</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form method="POST" action="crud.php" enctype="multipart/form-data">
                                                                            <input type="hidden" name="update_p_id" value="<?php echo $row['product_id']; ?>">

                                                                            <div class="mb-3">
                                                                                <label for="simpleinput" class="form-label">SKU</label>
                                                                                <input type="text" name="update_sku" class="form-control" placeholder="Enter the SKU" value="<?php echo $row['sku']; ?>" required>
                                                                            </div>

                                                                            <div class="mb-3 row">
                                                                                <label class="col-sm-2 col-form-label">Product Name</label>
                                                                                <div class="col-sm-10">
                                                                                    <input type="text" class="form-control" name="update_p_name" value="<?php echo $row['name']; ?>">
                                                                                </div>
                                                                            </div>

                                                                            <div class="mb-3">
                                                                                <label for="category" class="form-label">Category</label>
                                                                                <select name="update_category" class="form-control" required>
                                                                                    <option value="" disabled>Select Category</option>

                                                                                    <?php
                                                                                    // Query the database
                                                                                    $sql = "SELECT * FROM tb_category";
                                                                                    $result = $conn->query($sql);

                                                                                    // Loop through the results
                                                                                    while ($category = $result->fetch_assoc()) {
                                                                                        $category_name = $category['category_name'];
                                                                                        $selected = ($row['category'] === $category_name) ? 'selected' : '';
                                                                                        echo '<option value="' . $category_name . '" ' . $selected . '>' . $category_name . '</option>';
                                                                                    }
                                                                                    ?>
                                                                                </select>
                                                                            </div>

                                                                            <div class="mb-3 row">
                                                                                <label class="col-sm-2 col-form-label">Description</label>
                                                                                <div class="col-sm-10">
                                                                                    <textarea class="form-control" name="update_p_desc"><?php echo $row['prod_desc']; ?></textarea>
                                                                                </div>
                                                                            </div>

                                                                            <div class="mb-3">
                                                                                <label for="supplier" class="form-label">Supplier</label>
                                                                                <select name="update_supplier" class="form-control" required>
                                                                                    <option value="" disabled>Select Supplier</option>

                                                                                    <?php
                                                                                    // Query the database
                                                                                    $sql = "SELECT * FROM tb_supplier";
                                                                                    $result = $conn->query($sql);

                                                                                    // Loop through the results
                                                                                    while ($supplier = $result->fetch_assoc()) {
                                                                                        $supplier_name = $supplier['supplier_name'];
                                                                                        $selected = ($row['category'] === $supplier_name) ? 'selected' : '';
                                                                                        echo '<option value="' . $supplier_name . '" ' . $selected . '>' . $supplier_name . '</option>';
                                                                                    }
                                                                                    ?>
                                                                                </select>
                                                                            </div>

                                                                            <div class="mb-3 row">
                                                                                <label class="col-sm-2 col-form-label">Supplier Price</label>
                                                                                <div class="col-sm-10">
                                                                                    <input type="text" class="form-control" name="update_sup" value="<?php echo $row['supplier_price']; ?>">
                                                                                </div>
                                                                            </div>

                                                                            <div class="mb-3 row">
                                                                                <label class="col-sm-2 col-form-label">Unit Price</label>
                                                                                <div class="col-sm-10">
                                                                                    <input type="text" class="form-control" name="update_p_price" value="<?php echo $row['price']; ?>">
                                                                                </div>
                                                                            </div>

                                                                            <div class="mb-3 row">
                                                                                <label class="col-sm-2 col-form-label">Quantity</label>
                                                                                <div class="col-sm-10">
                                                                                    <input type="text" class="form-control" name="update_p_qty" value="<?php echo $row['qty']; ?>">
                                                                                </div>
                                                                            </div>

                                                                            <!-- Display all images with checkboxes -->
                                                                            <div class="mb-3 row">
                                                                                <label class="col-sm-2 col-form-label">Existing Images</label>
                                                                                <div class="col-sm-10">
                                                                                    <?php
                                                                                    if (isset($row['all_images'])) {
                                                                                        $images = explode(',', $row['all_images']);
                                                                                        foreach ($images as $image) {
                                                                                            echo '<div class="image-container" style="display: inline-block; margin-right: 10px;">';
                                                                                            echo '<img src="uploaded_img/' . $image . '" alt="Product Image" style="max-width: 100px; margin-bottom: 5px;">';
                                                                                            echo '<br>';
                                                                                            echo '<input type="checkbox" name="delete_images[]" value="' . $image . '"> Delete';
                                                                                            echo '</div>';
                                                                                        }
                                                                                    } else {
                                                                                        echo 'No Images';
                                                                                    }
                                                                                    ?>
                                                                                </div>
                                                                            </div>


                                                                            <h6>Add new images</h6>

                                                                            <div class="mb-3 row">
                                                                                <div class="col-sm-10">
                                                                                    <input type="file" class="form-control" name="update_p_image[]" multiple value="<?php echo $row['first_image']; ?>">
                                                                                </div>
                                                                            </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" name="update_product" class="btn btn-primary"> Update</a>
                                                                            </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                <?php
                                                    }
                                                }
                                                ?>

                                                <!--DELETE MODAL -->
                                                <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="deleteConfirmationModalLabel">Confirm Deletion</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are you sure you want to delete this product?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                <!-- Add a form and submit the form when the user confirms deletion -->
                                                                <form id="deleteForm" method="POST" action="crud.php">
                                                                    <input type="hidden" id="product_id" name="product_id" value="">
                                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </tbody>
                                        </table>

                                        <!-- Add Modal -->
                                        <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="crud.php" method="post" class="add-product-form" enctype="multipart/form-data">

                                                            <div class="mb-3">
                                                                <label for="simpleinput" class="form-label">SKU</label>
                                                                <input type="text" name="p_sku" class="form-control" placeholder="Enter the SKU" required>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="simpleinput" class="form-label">Product Name</label>
                                                                <input type="text" name="p_name" class="form-control" placeholder="Enter the product name" required>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="simpleinput" class="form-label">Category</label>
                                                                <select name="p_cat" class="form-control" required>
                                                                    <option value="" disabled selected>Select Category</option>
                                                                    <?php
                                                                    $sql = "SELECT category_name FROM tb_category";
                                                                    $result = mysqli_query($conn, $sql);
                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                        echo '<option value="' . $row['category_name'] . '">' . $row['category_name'] . '</option>';
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="simpleinput" class="form-label">Description</label>
                                                                <textarea class="form-control" placeholder="Description" name="p_desc" style="height: 100px"></textarea>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="simpleinput" class="form-label">Supplier</label>
                                                                <select name="p_supplier" class="form-control" required>
                                                                    <option value="" disabled selected>Select Supplier</option>
                                                                    <?php
                                                                    $sql = "SELECT supplier_name FROM tb_supplier";
                                                                    $result = mysqli_query($conn, $sql);
                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                        echo '<option value="' . $row['supplier_name'] . '">' . $row['supplier_name'] . '</option>';
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="simpleinput" class="form-label">Supplier Price</label>
                                                                        <input type="number" min="1" value="" name="supplier_price" class="form-control" style="width: 90px;" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="simpleinput" class="form-label">Price</label>
                                                                        <input type="number" min="1" name="p_price" class="form-control" style="width: 90px;" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="simpleinput" class="form-label">Quantity</label>
                                                                <input type="number" min="1" max="10000" name="p_qty" class="form-control" required>
                                                            </div>

                                                            <h6>Can upload Multiple Images</h6>
                                                            <div class="mb-3">
                                                                <label for="example-fileinput" class="form-label">Choose Images:</label>
                                                                <input type="file" id="example-fileinput" name="p_images[]" accept="image/png, image/jpg, image/jpeg" class="form-control" multiple required>
                                                            </div>

                                                            <div id="image-preview">
                                                                <img id="preview-image" src="assets/images/empty.png" height="200" alt="Image Preview">
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" name="add_product" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                        <!-- end row -->

                    </div> <!-- container -->

                    <!-- Footer Start -->
                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    © TEKUNO
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-end footer-links d-none d-md-block">
                                        <a href="javascript: void(0);">About</a>
                                        <a href="javascript: void(0);">Support</a>
                                        <a href="javascript: void(0);">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- end Footer -->
                </div>



                <!-- bundle -->
                <script src="assets/js/vendor.min.js"></script>
                <script src="assets/js/app.min.js"></script>

                <script>
                    // JavaScript/jQuery code to set the product_id value and show the confirmation modal
                    $(document).ready(function() {
                        $(".delete-btn").click(function() {
                            var product_id = $(this).data('product-id');
                            $("#product_id").val(product_id);
                            $('#deleteConfirmationModal').modal('show');
                        });
                    });
                </script>

                <script>
                    const fileInput = document.getElementById('example-fileinput');
                    const imagePreview = document.getElementById('image-preview');

                    fileInput.addEventListener('change', function() {
                        imagePreview.innerHTML = ''; // Clear previous previews

                        const files = this.files;

                        for (const file of files) {
                            const reader = new FileReader();

                            reader.addEventListener('load', function() {
                                const imgElement = document.createElement('img');
                                imgElement.src = reader.result;
                                imgElement.height = 200;
                                imgElement.alt = 'Image Preview';

                                imagePreview.appendChild(imgElement);
                            });

                            reader.readAsDataURL(file);
                        }
                    });
                </script>


                <script>
                    $(document).ready(function() {
                        var table = $('#example').DataTable({
                            dom: 'Bfrtip', // Specify the layout of the DataTable with buttons
                            buttons: [{
                                    extend: 'copy', // Copy to clipboard
                                    className: 'custom-button', // Add a custom CSS class
                                },
                                {
                                    extend: 'excel', // Export to Excel
                                    className: 'custom-button', // Add a custom CSS class
                                },
                                {
                                    extend: 'pdf', // Export to PDF
                                    className: 'custom-button', // Add a custom CSS class
                                },
                                {
                                    extend: 'print', // Print the table
                                    className: 'custom-button', // Add a custom CSS class
                                },
                                {
                                    extend: 'colvis', // Add the ColVis button
                                    className: 'custom-button', // Add a custom CSS class
                                }
                            ]
                        });
                    });
                </script>

</body>

</html>