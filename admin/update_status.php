<?php

include("mysql_connect.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $orderId = $_POST['ticket_id'];
    $action = $_POST['action'];

    if ($action === 'accept') {
        // Update the order status to 'Accepted' in the tickets table
        $update_query = mysqli_query($conn, "UPDATE `ticket` SET status = 'Accepted' WHERE ticket_id = '$orderId'");
    } elseif ($action === 'decline') {
        // Update the order status to 'Declined' in the tickets table
        $update_query = mysqli_query($conn, "UPDATE `ticket` SET status = 'Declined' WHERE ticket_id = '$orderId'");
    } else {
        echo "Invalid action.";
        exit();
    }

    if ($update_query) {
        echo "Order $action successfully.";
    } else {
        echo "Error: Unable to $action the order.";
    }
} else {
    echo "Invalid request method.";
}
?>