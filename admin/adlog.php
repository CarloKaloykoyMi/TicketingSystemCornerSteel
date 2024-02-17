<?php session_start();
include('mysql_connect.php'); // connection to MySQL

if (isset($_POST['login_btn'])) {
    if (!empty(trim($_POST['email'])) && !empty(trim($_POST['password']))) {
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);

        $login_query = "SELECT * FROM user WHERE email = '$email' AND password = '$password' LIMIT 1";
        $login_query_run = mysqli_query($con, $login_query);

        if (mysqli_num_rows($login_query_run) > 0) {
            $row = mysqli_fetch_array($login_query_run);
            if ($row['verification_status'] == "1") {
                $_SESSION['auth'] = true;
                $role = $row['role'];
                $_SESSION['auth_user'] = [
                    'user_id' => $row['id'],
                    'username' => $row['username'],
                    'email' => $row['email'],
                    'role' => $row['role'],
                ];
                $_SESSION['role'] = $role;

                if ($role == 0
                ) {
                    header("Location: dashboard.php");
                    exit();
                } elseif ($role == 1) {
                    // Deny login for employees
                    $_SESSION['status'] = "Employees cannot log in via this form!";
                    header("Location: adminlogin.php");
                    exit();
                } else {
                    $_SESSION['status'] = "Access Denied!";
                    header("Location: adminlogin.php");
                    exit();
                }
            } else {
                $_SESSION['status'] = "PLEASE VERIFY YOUR EMAIL!";
                header("Location: adminlogin.php");
                exit();
            }
        } else {
            $_SESSION['status'] = "EMAIL OR PASSWORD INVALID";
            header("Location: adminlogin.php");
            exit();
        }
    } else {
        $_SESSION['status'] = "ALL FIELDS MUST BE FILLED";
        header("Location: adminlogin.php");
        exit();
    }
}

?>