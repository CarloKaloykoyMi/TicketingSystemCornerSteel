<?php session_start(); ?>
<?php
include('mysql_connect.php'); // connection to MySQL

if (isset($_POST['register'])) {

    // check if the form has been submitted
        $lastName = $_POST['lastName'];
        $firstName = $_POST['firstName'];
        $middleinitial = $_POST['middleinitial'];
        $company = $_POST['company'];
        $branch = $_POST['branch'];
        $department = $_POST['department'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm = $_POST['confirm'];
    
    
    
    // Check if password and confirm password match
    if ($password !== $confirm) {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Passwords do not match!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    } else {
        if (mysqli_num_rows(mysqli_query($con, "SELECT * FROM user WHERE email = '$email'")) > 0) {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                This Email already exists!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        } else {
            $status = 0; 
            // Insert the data into the database
            $query = mysqli_query($con, "INSERT INTO user (lastName,firstName,middleinitial,company,branch,department,email,contact,username,password,status) 
            VALUES('$lastName','$firstName','$middleinitial','$company','$branch','$department','$email','$contact','$username','$password','$status')");
    
            if ($query) {
                $otp = rand(100000,999999);
                    $_SESSION['otp'] = $otp;
                    $_SESSION['mail'] = $email;
                    require "phpmailer/PHPMailerAutoload.php";
                    $mail = new PHPMailer;
    
                    $mail->isSMTP();
                    $mail->Host='smtp.gmail.com';
                    $mail->Port=587;
                    $mail->SMTPAuth=true;
                    $mail->SMTPSecure='tls';
    
                    $mail->Username='odetocode04@gmail.com';
                    $mail->Password='mnugjcpwaslqthdn';
    
                    $mail->setFrom('odetocode04@gmail.com', 'OTP Verification');                                  
                    $mail->addAddress($_POST["email"]);
    
                    $mail->isHTML(true);
                    $mail->Subject="Your verify code";
                    $mail->Body="<p>Dear user, </p> <h3>Your verified OTP code is $otp <br></h3>
                    <br><br>
                    <p>With regrads,</p>
                    <b>E - Ticket </b>";
    
                // Send email
                if (!$mail->send()) {
    ?>
                    <script>
                        alert("<?php echo "Registration Failed " ?>");
                    </script>
                <?php
                } else {
                ?>
                    <script>
                        alert("<?php echo "Registration Successful!! YOUR OTP CODE IS SEND TO " . $email ?>");
                        window.location.replace('verification.php');
                    </script> 
    <?php
                }
            }
        }
    }
    }

?>