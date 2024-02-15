<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/des5.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <link rel="stylesheet" href="css/table.css">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>

<div style ="width: 100%"> 
    <div class="col">
                <div class="ok" style="display: flex;">
                    
                    <div style="width: 86%">
                <div class="col-sm-6 col-md-4 text-left">
                    <!-- Replace the Store Manager button with a Back button -->
                    <button onclick="goBack()" class="store-manager-button">
                        <i class="fas fa-arrow-left"></i>
                        Back
                    </button>
                </div>
            </div>
                     <div  style="align-item: right;  width: 12%">
                        <div class="search-container">
                            <form action="../admin/admin_message_search.php" method="GET">
                                <div class="input-group">
                                    <input type="text" name="query" class="form-control search-input" placeholder="Search..." aria-label="Search..." aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary search-button" type="submit" id="button-addon2"><i class="bi bi-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
</div>

<script>
    // JavaScript function to go back
    function goBack() {
        window.history.back();
    }
</script>

<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#productAddModal">
                            <i class="fas fa-plus"></i> ADD COMPANY
                        </button>
                        </h4>
<div class="card-body">
            <div class="table-responsive">
              <table id="myTable" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th style="width: 5%;">Company ID</th>
                    <th style="width: 5%;">Company Name</th>
                    <th style="width: 5%;">Location</th>
                  </tr>
                </thead>
                <tbody>  