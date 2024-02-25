<?php session_start(); ?>

<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/home_logo.ico">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="forgot.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <title>Reset Password</title>
</head>
<style>
    /* The message box is shown when the user clicks on the password field */
    #message {
        display: none;
        background: #f1f1f1;
        color: #000;
        position: relative;
        padding: 15px;
        margin-top: 9px;
    }

    #message p {
        padding: 9px 30px;
        font-size: 14px;
    }

    /* Add a green text color and a checkmark when the requirements are right */
    .valid {
        color: green;
    }

    /*copy & paste symbol*/
    .valid:before {
        position: relative;
        left: -35px;
        content: "✅";
    }

    /* Add a red text color and an "x" when the requirements are wrong */
    .invalid {
        color: red;
    }

    .invalid:before {
        position: relative;
        left: -35px;
        content: "❌";
    }
</style>

<body>
    <!-- Navbar -->
    <header id="header">
        <nav class="navbar">
            <div class="navbar-logo">
                <a href="index.php">
                    <img src="img/logo2.png">
                </a>
                <span class="logo-text">CGG e-Ticketing</span>
            </div>
            <div class="links">
                <ul>
                    <li>
                        <a href="#header">Home</a>
                    </li>
                    <li>
                        <a href="#aboutus">About</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                    <li><a href="usertype.php" class="active">LOGIN</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <br><br>
    <p style="text-align: center; font-size: 25px; font-weight: bold;">Reset Password</p>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    </div>
    </nav>

    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card" style="background-color: #e7e7e7;">
                        <p style="text-align: center; font-size: 18px; color: #232836;">Please enter your new password.</p>
                        <form action="#" method="POST" name="login">
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="input-group">
                                            <span style="color: #232836;"><i class="fas fa-lock"></i> Password: &nbsp;&nbsp;</span>
                                            <input type="password" class="form-control" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="" required>
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button" id="togglePassword" style="color: #232836;"><i class="fas fa-eye"></i></button>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="message">
                                    <h6>Password must contain:</h6>
                                    <p id="letter" class="invalid">At least one letter</p>
                                    <p id="capital" class="invalid">At least one capital letter</p>
                                    <p id="number" class="invalid">At least one number</p>
                                    <p id="special" class="invalid">At least one special character</p>
                                    <p id="length" class="invalid">Minimum 8 characters</p>
                                </div>
                            </div>

                            <div class="form-group row justify-content-center"> <!-- Center the content -->
                                <div class="col-md-6">
                                    <input type="submit" value="Reset" class="btn btn-primary" name="reset" style="background-color: #424949; width: 100px; height: 40px;">

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </main>

    <footer class="footer">
        <div class="container">
            <div class="bottom-footer">

                <div class="copyright">
                    <p class="text">
                        &copy; 2024 Comfac Global Group.
                    </p>
                </div>

                <!-- Follow Us -->
                <div class="followme-wrap">
                    <div class="followme">
                        <h3>Follow Us</h3>
                        <span class="footer-line"></span>
                        <div class="social-media">
                            <a href="https://www.facebook.com/ComfacGlobalGroupRecruitment/">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com/cornersteelsystemscorp/">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                    <div class="back-btn-wrap">
                        <a href="#" class="back-btn">
                            <i class="fas fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
</body>

</html>
<?php
if (isset($_POST["reset"])) {
    include('mysql_connect.php'); // connection to MySQL
    $psw = $_POST["password"];

    $token = $_SESSION['token'];
    $Email = $_SESSION['email'];

    $sql = mysqli_query($conn, "SELECT * FROM tb_user WHERE email='$Email'");
    $query = mysqli_num_rows($sql);
    $fetch = mysqli_fetch_assoc($sql);

    if ($Email) {
        mysqli_query($conn, "UPDATE tb_user SET password='$psw' WHERE email='$Email'");
?>
        <script>
            window.location.replace("login.php");
            alert("<?php echo "your password has been succesful reset" ?>");
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("<?php echo "Please try again" ?>");
        </script>
<?php
    }
}

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const toggle = document.getElementById('togglePassword');
    const password = document.getElementById('password');

    toggle.addEventListener('click', function() {
        if (password.type === "password") {
            password.type = 'text';
        } else {
            password.type = 'password';
        }
        this.classList.toggle('bi-eye');
    });
</script>

<script>
    // script for validation
    function show() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>

<script>
    var myInput = document.getElementById("password");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");

    // When the user clicks on the password field, show the message box
    myInput.onfocus = function() {
        document.getElementById("message").style.display = "block";
    }

    // When the user clicks outside of the password field, hide the message box
    myInput.onblur = function() {
        document.getElementById("message").style.display = "none";
    }

    // When the user starts to type something inside the password field
    myInput.onkeyup = function() {
        // Validate lowercase letters
        var lowerCaseLetters = /[a-z]/g;
        if (myInput.value.match(lowerCaseLetters)) {
            letter.classList.remove("invalid");
            letter.classList.add("valid");
        } else {
            letter.classList.remove("valid");
            letter.classList.add("invalid");
        }

        // Validate capital letters
        var upperCaseLetters = /[A-Z]/g;
        if (myInput.value.match(upperCaseLetters)) {
            capital.classList.remove("invalid");
            capital.classList.add("valid");
        } else {
            capital.classList.remove("valid");
            capital.classList.add("invalid");
        }

        // Validate numbers
        var numbers = /[0-9]/g;
        if (myInput.value.match(numbers)) {
            number.classList.remove("invalid");
            number.classList.add("valid");
        } else {
            number.classList.remove("valid");
            number.classList.add("invalid");
        }

        var specialCharacters = /[!@#$%^&*(),.?\:{}|<>]/g;
        if (myInput.value.match(specialCharacters)) {
            special.classList.remove("invalid");
            special.classList.add("valid");
        } else {
            special.classList.remove("valid");
            special.classList.add("invalid");
        }

        // Validate length
        if (myInput.value.length >= 8) {
            length.classList.remove("invalid");
            length.classList.add("valid");
        } else {
            length.classList.remove("valid");
            length.classList.add("invalid");
        }
    }
</script>
</div>
</div>
</div>
</footer>
<script src="main.js"></script>
</body>

</html>