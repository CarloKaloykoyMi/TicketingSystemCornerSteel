<?php
include('../mysql_connect.php');

if (isset($_POST['add_company'])) {
    $company_name = $_POST['company_name'];
    $company_address = $_POST['company_address'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];

    $insert_company_query = "INSERT INTO company (company_name, company_address, contact, email) 
    VALUES ('$company_name','$company_address','$contact','$email')";
    $insert_company_query_run = mysqli_query($con, $insert_company_query);

    if ($insert_company_query_run) {
        echo '<script>alert("Company added successfully.");</script>';
        echo '<script>window.location.href = "company.php";</script>';
        exit();
    } else {
        // PHP code failed to execute
        echo '<script>alert("Error adding company. Please try again.");</script>';
    }
} else if (isset($_POST['edit_company'])) {
    $id = $_POST['company_id'];
    $company_name = $_POST['company_name'];
    $company_address = $_POST['company_address'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];


    $updateCompany_query = "UPDATE company SET company_name='$company_name', company_address='$company_address', 
    contact='$contact', email='$email' WHERE id='$id' ";
    $updateCompany_query_run = mysqli_query($con, $updateCompany_query);

    if ($updateCompany_query_run) {
        echo '<script>alert("Company status updated successfully.");</script>';
        echo '<script>window.location.href = "company.php";</script>';
        exit();
    } else {
        // PHP code failed to execute
        echo '<script>alert("Error updating order status. Please try again.");</script>';
    }
} else if (isset($_POST['add_branch'])) {
    $company_name = $_POST['company_name'];
    $branch_name = $_POST['branch_name'];
    $branch_address = $_POST['branch_address'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];


    $insert_branch_query = "INSERT INTO branch (company,branch_name, branch_address, contact, email) 
    VALUES ('$company_name','$branch_name','$branch_address','$contact','$email')";
    $insert_branch_query_run = mysqli_query($con, $insert_branch_query);

    if ($insert_branch_query_run) {
        echo '<script>alert("Branch added successfully.");</script>';
        echo '<script>window.location.href = "branch.php";</script>';
        exit();
    } else {
        // PHP code failed to execute
        echo '<script>alert("Error adding Branch. Please try again.");</script>';
    }
} else if (isset($_POST['edit_branch'])) {
    $id = $_POST['branch_id'];
    $company_name = $_POST['company_name'];
    $branch_name = $_POST['branch_name'];
    $branch_address = $_POST['branch_address'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];


    $updateBranch_query = "UPDATE branch SET company='$company_name', branch_name='$branch_name', branch_address='$branch_address', 
    contact='$contact', email='$email' WHERE id='$id' ";
    $updateBranch_query_run = mysqli_query($con, $updateBranch_query);

    if ($updateBranch_query_run) {
        echo '<script>alert("Branch status updated successfully.");</script>';
        echo '<script>window.location.href = "branch.php";</script>';
        exit();
    } else {
        // PHP code failed to execute
        echo '<script>alert("Error updating order status. Please try again.");</script>';
    }
} else if (isset($_POST['add_department'])) {
    $department_name = $_POST['department_name'];
    $department_head = $_POST['department_head'];
    $location = $_POST['location'];

    $insert_department_query = "INSERT INTO department (department_name, department_head, location) 
    VALUES ('$department_name','$department_head','$location')";
    $insert_department_query_run = mysqli_query($con, $insert_department_query);

    if ($insert_department_query_run) {
        echo '<script>alert("Department added successfully.");</script>';
        echo '<script>window.location.href = "department.php";</script>';
        exit();
    } else {
        // PHP code failed to execute
        echo '<script>alert("Error adding Department. Please try again.");</script>';
    }
} else if (isset($_POST['edit_department'])) {
    $id = $_POST['department_id'];
    $department_name = $_POST['department_name'];
    $department_head = $_POST['department_head'];
    $location = $_POST['location'];


    $updateDepartment_query = "UPDATE department SET department_name='$department_name', department_head='$department_head', 
    location='$location' WHERE id='$id' ";
    $updateDepartment_query_run = mysqli_query($con, $updateDepartment_query);

    if ($updateDepartment_query_run) {
        echo '<script>alert("Department status updated successfully.");</script>';
        echo '<script>window.location.href = "department.php";</script>';
        exit();
    } else {
        // PHP code failed to execute
        echo '<script>alert("Error updating order status. Please try again.");</script>';
    }
} else if (isset($_POST['edit_user'])) {
    $user_id = $_POST['user_id'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $middleinitial = $_POST['middleinitial'];
    $company = $_POST['company'];
    $branch = $_POST['branch'];
    $department = $_POST['department'];
    $email = $_POST['email'];

    $updateUser_query = "UPDATE user SET lastname='$lastname', middleinitial='$middleinitial', firstname='$firstname', company='$company', 
    branch='$branch', department='$department', email='$email' WHERE user_id='$user_id' ";
    $updateUser_query_run = mysqli_query($con, $updateUser_query);

    if ($updateUser_query_run) {
        echo '<script>alert("User status updated successfully.");</script>';
        echo '<script>window.location.href = "user.php";</script>';
        exit();
    } else {
        // PHP code failed to execute
        echo '<script>alert("Error updating user status. Please try again.");</script>';
    }
} else if (isset($_POST['change_status'])) {
    $ticket_id = $_POST['ticket_id'];
    $status = $_POST['status']; // Retrieve the selected status from the form data

    // Use prepared statements to prevent SQL injection
    $updateUser_query = "UPDATE ticket SET status=? WHERE ticket_id=?";
    $stmt = mysqli_prepare($con, $updateUser_query);

    // Bind parameters and execute the query
    mysqli_stmt_bind_param($stmt, "si", $status, $ticket_id);
    $updateUser_query_run = mysqli_stmt_execute($stmt);

    if ($updateUser_query_run) {
        echo '<script>alert("Status updated successfully.");</script>';
        echo '<script>window.location.href = "ticket_info.php?ticket_id=' . $ticket_id . '";</script>';
        exit();
    } else {
        // PHP code failed to execute
        echo '<script>alert("Error updating user request. Please try again.");</script>';
    }
} else if (isset($_POST['add_reply'])) {
    $reply = $_POST['reply'];
    $ticket_id = $_POST['ticket_id'];

    $insert_reply = "INSERT INTO ticket_reply (reply, ticket_id) 
    VALUES ('$reply', '$ticket_id')";
    $insert_reply_run = mysqli_query($con, $insert_reply);

    if ($insert_reply_run) {
        echo '<script>alert("Reply added.");</script>';
        echo '<script>window.location.href = "ticket_info.php?ticket_id=' . $ticket_id . '"</script>';
        exit();
    } else {
        // PHP code failed to execute
        echo '<script>alert("Error adding reply. Please try again.");</script>';
    }
} else if (isset($_POST['add_user'])) {
    $lastName = $_POST['lastname'];
    $firstName = $_POST['firstname'];
    $middleinitial = $_POST['middleinitial'];
    $company = $_POST['company'];
    $branch = $_POST['branch'];
    $department = $_POST['department'];
    $email = $_POST['email'];

    $insert_user_query = mysqli_query($con, "INSERT INTO user (lastName, firstName, middleinitial, company, branch, department, email, contact, username, password, verification_status, role) 
    VALUES('$lastName', '$firstName', '$middleinitial', '$company', '$branch', '$department', '$email', '$contact', '$username', '$password', '$verification_status', '1')");

    if ($insert_user_query) {
        echo '<script>alert("User added successfully.");</script>';
        echo '<script>window.location.href = "user.php";</script>';
        exit(); 
    } else {
        // PHP code failed to execute
        echo '<script>alert("Error adding user. Please try again.");</script>';
    }
}



    $insert_user_query = mysqli_query($con, "INSERT INTO user (lastName,firstName,middleinitial,company,branch,department,email,contact,username,password,verification_status,role) 
    VALUES('$lastName','$firstName','$middleinitial','$company','$branch','$department','$email','$contact','$username','$password','$verification_status','1')");

    if ($insert_user_query) {
        echo '<script>alert("User status updated successfully.");</script>';
        echo '<script>window.location.href = "user.php";</script>';
        exit(); 
    } else {
        // PHP code failed to execute
        echo '<script>alert("Error updating user status. Please try again.");</script>';
    }

