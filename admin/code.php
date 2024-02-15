<?php
include('../mysql_connect.php');

if(isset($_POST['add_company']))
{
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

    
}

else if(isset($_POST['edit_company']))
{
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

    
}

else if(isset($_POST['add_branch']))
{
    $branch_name = $_POST['branch_name'];
    $branch_address = $_POST['branch_address'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];

    $insert_branch_query = "INSERT INTO branch (branch_name, branch_address, contact, email) 
    VALUES ('$branch_name','$branch_address','$contact','$email')";
    $insert_branch_query_run = mysqli_query($con, $insert_branch_query);

    if ($insert_branch_query_run) {
        echo '<script>alert("Branch added successfully.");</script>';
        echo '<script>window.location.href = "branch.php";</script>';
        exit();
    } else {
        // PHP code failed to execute
        echo '<script>alert("Error adding Branch. Please try again.");</script>';
    }

    
}

else if(isset($_POST['edit_branch']))
{
    $id = $_POST['branch_id'];
    $branch_name = $_POST['branch_name'];
    $branch_address = $_POST['branch_address'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    

    $updateBranch_query = "UPDATE branch SET branch_name='$branch_name', branch_address='$branch_address', 
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

    
}

else if(isset($_POST['add_department']))
{
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

    
}

else if(isset($_POST['edit_department']))
{
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

    
}

else if(isset($_POST['edit_user']))
{
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
        echo '<script>window.location.href = "../admin/user.php";</script>';
        exit();
    } else {
        // PHP code failed to execute
        echo '<script>alert("Error updating user status. Please try again.");</script>';
    }

    
}


?>