<?php
include('mysql_connect.php');

if(isset($_POST['add_ticket']))
{
    $requestor = $_POST['requestor'];
    $subject = $_POST['subject'];
    $company = $_POST['company'];
    $branch = $_POST['branch'];
    $department = $_POST['department'];
    $concern = $_POST['concern']; 
    $status = "Pending";

    $insert_ticket_query = "INSERT INTO ticket (subject, company, branch, department, requestor, concern, status) 
    VALUES ('$subject','$company','$branch','$department','$requestor','$concern','$status')";
    $insert_ticket_query_run = mysqli_query($con, $insert_ticket_query);

    if ($insert_ticket_query_run) {
        echo '<script>alert("Ticket Submitted.");</script>';
        echo '<script>window.location.href = "home_user.php";</script>';
        exit();
    } else {
        // PHP code failed to execute
        echo '<script>alert("Error submitting ticket. Please try again.");</script>';
    }
}
?>
