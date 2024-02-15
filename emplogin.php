<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Employee Login </title>

        <!-- CSS -->
        <link rel="stylesheet" href="./css/style.css">  
                
        <!-- Boxicons CSS -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">         
    </head>
    <body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-logo">
        <a href="index.php"><img src="img/logo2.png"></a> 
            <span class="logo-text">CGG e-Ticketing</span>
        </div>
        <div class="links">
            <ul>
                <li>
                  <a href="index.php#header">Home</a>
                </li>
                <li>
                  <a href="index.php#aboutus">About</a>
                </li>
                <li>
                  <a href="index.php#contact">Contact</a>
                </li>
                <li><a href="usertype.php" class="active">LOGIN</a></li>
            </ul>
        </div>
    </nav>
</header>
<style>
     .grid-item {
            width: 48%;
            margin: 1%;
        }
        @media (max-width: 767px) {
            .grid-item {
                width: 100%;
                margin: 0;
            }
        }
        .grid-item {
    width: 48%;
    margin: 1%;
    float: left; 
  }
  @media (max-width: 767px) {
    .grid-item {
      width: 100%;
      margin: 0;
      float: none; 
    }
  }
  .footer {
    padding: 10px 0; 
  }
  .logo img {
    width: 100px; 
    height: auto; 
  }
  .copyright {
        text-align: center;
    }
    .copyright p {
        font-weight: bold;
        font-size: 16px;
    }
    .logo-text {
    font-size: 24px;
    margin-left: 10px; 
    font-weight: bold;
    color: #fff; 
}
.gallery-image img {
    width: 250px;
    height:auto;
    border-radius: 15px;
  }
    </style>
</head>
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header>Employee Login</header>
                    <form action="#">
                        <div class="field input-field">
                            <input type="email" placeholder="Email" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Password" class="password">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="form-link">
                            <a href="forgotpass.php" class="forgot-pass">Forgot password?</a>
                        </div>

                        <div class="field button-field">
                            <button>Sign In</button>
                        </div>                        
                    </form>
 
                    <div class="form-link">
                        <span>Don't have an account yet? <a href="register.php" class="button">Signup</a></span>
                    </div>
                </div>

            </div>

            <!-- Signup Form -->

            <div class="form signup">
                <div class="form-content">
                    <header>Employee Admin</header>
                    <form action="#">
                        <div class="field input-field">
                            <input type="email" placeholder="Email" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Create password" class="password">
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Confirm password" class="password">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="field button-field">
                            <button>Signup</button> 
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
                    </div>
                </div>
 
            </div>
        </section>

        <!-- JavaScript -->
        <script>
             const forms = document.querySelector(".forms"),
      pwShowHide = document.querySelectorAll(".eye-icon"),
      links = document.querySelectorAll(".link");

pwShowHide.forEach(eyeIcon => {
    eyeIcon.addEventListener("click", () => {
        let pwFields = eyeIcon.parentElement.parentElement.querySelectorAll(".password");
        
        pwFields.forEach(password => {
            if(password.type === "password"){
                password.type = "text";
                eyeIcon.classList.replace("bx-hide", "bx-show");
                return;
            }
            password.type = "password";
            eyeIcon.classList.replace("bx-show", "bx-hide");
        })
        
    })
})      

links.forEach(link => {
    link.addEventListener("click", e => {
       e.preventDefault(); //preventing form submit
       forms.classList.toggle("show-signup");
    })
})
        </script>


        <!-- Footer -->
        <footer class="footer">
        <div class="bottom-footer">

            <div class="copyright">
                <p class="text">
                  &copy; 2024 Comfac Global Group.
                </p>
            </div>

            <div class="followme-wrap">
                <div class="followme">
                    <h3>Follow Us</h3>
                    <span class="footer-line"></span>
                    <div class="social-media">
                        <a href="https://www.facebook.com/ComfacGlobalGroupRecruitment/">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </div>
                </div>

                <div class="followme-wrap">
                <div class="followme">
                    
                    <div class="social-media">
                        <a href="https://www.instagram.com/cornersteelsystemscorp/">
                            <i class="fa fa-instagram"></i>
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