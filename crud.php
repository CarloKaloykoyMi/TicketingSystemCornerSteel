<?php
include('mysql_connect.php');

if (isset($_POST['add_ticket'])) {
    $userid = $_POST['userid'];
    $requestor = $_POST['requestor'];
    $subject = $_POST['subject'];
    $company = $_POST['company'];
    $branch = $_POST['branch'];
    $department = $_POST['department'];
    $todepartment = $_POST['todepartment'];
    $concern = $_POST['concern'];
    $status = "Pending";

    $insert_ticket_query = $con->prepare("INSERT INTO ticket (user_id, subject, company, branch, department, requestor, concern, status,to_dept) 
    VALUES ('$userid','$subject','$company','$branch','$department','$requestor','$concern','$status','$todepartment')");

    if (!$insert_ticket_query) {
        die('Error in SQL Query: ' . $con->error);
    }

    $insert_ticket_query = $con->prepare("INSERT INTO ticket (user_id, subject, company, branch, department, requestor, concern, status,to_dept) VALUES (?,?,?,?,?,?,?,?,?)");
    $insert_ticket_query->bind_param("issssssss", $userid, $subject, $company, $branch, $department, $requestor, $concern, $status, $todepartment);

    if ($insert_ticket_query->execute()) {
        $ticket_id = $insert_ticket_query->insert_id;

        $sql ="SELECT * FROM ticket WHERE ticket_id='$ticket_id';";
        $result = mysqli_query($con,$sql);

        while ($row = mysqli_fetch_array($result)){
            $useID = $row['user_id'];
            $date = $row['date'];
            $newDate = date('Fj,Y', strtotime($date));
        }

        $folder_path = "UPLOADS/$ticket_id-$useID-$newDate/";

// Ensure the folder exists or create it
if (!is_dir($folder_path)) {
    mkdir($folder_path, 0755, true);}

        foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
            $image_name = $_FILES['files']['name'][$key];
            $target = $folder_path . basename($image_name);
        
            // Update the image name in the database
            $sql = "INSERT INTO file_attachment (user_id,ticket_id,file_name) VALUES('$useID','$ticket_id','$image_name')";
            mysqli_query($con, $sql);
        
            if (move_uploaded_file($tmp_name, $target)) {
                $msg .= "Image '$image_name' uploaded Successfully.<br>";
            } else {
                $msg .= "There was a problem uploading Image '$image_name'.<br>";
            }
        }

        echo '<script>alert("Ticket Submitted.");</script>';
        //echo '<script>window.location.href = "home_user.php";</script>';
        exit();
    } else {
        // PHP code failed to execute
        echo '<script>alert("Error submitting ticket. Please try again.");</script>';
    }
    $insert_ticket_query->close();
} else if (isset($_POST['add_reply'])) {
    $reply = $_POST['reply'];
    $ticket_id = $_POST['ticket_id'];
    $userid = $_POST['userid'];
    $name = $_POST['sender'];

    $insert_reply = "INSERT INTO ticket_reply (reply, ticket_id,user_id,Name) 
    VALUES ('$reply', '$ticket_id','$userid', '$name')";
    $insert_reply_run = mysqli_query($con, $insert_reply);

    if ($insert_reply_run) {
        echo '<script>alert("Reply added.");</script>';
        echo '<script>window.location.href = "ticket_info.php?ticket_id=' . $ticket_id . '"</script>';
        exit();
    } else {
        // PHP code failed to execute
        echo '<script>alert("Error adding reply. Please try again.");</script>';
    }
} else if (isset($_POST['upload'])) {
    $file = $_FILES['image'];
    $user_id = $_POST['userid'];
    $username = $_POST['username'];

    // Create a folder path based on User_id and Username
    $folder_path = "Images/$user_id-$username/";

    // Ensure the folder exists or create it
    if (!is_dir($folder_path)) {
        mkdir($folder_path, 0755, true);
    }

    // Set the target path with the folder
    $target = $folder_path . basename($_FILES['image']['name']);

    $image = $_FILES['image']['name'];

    // Update the image name in the database
    $sql = "UPDATE user SET image ='$image' WHERE user_id='$user_id';";
    mysqli_query($con, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded Successfully";
    } else {
        $msg = "There was a problem uploading Image";
    }

    echo "<script> location.href='User_Profile.php'; </script>";
}
