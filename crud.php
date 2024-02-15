<?php
include('mysql_connect.php');

if(isset($_POST['add_ticket']))
{
    $company = $_POST['company'];
    $branch = $_POST['branch'];
    $requester = $_POST['requester'];
    $concern = $_POST['concern']; 
    $status = "Pending"; // Default status

    $insert_ticket_query = "INSERT INTO ticket (company, branch, requester, concern, status) 
    VALUES ('$company','$branch','$requester','$concern','$status')";
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
