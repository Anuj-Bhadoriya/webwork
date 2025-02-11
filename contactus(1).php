<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KalaVyom</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Hare Krishna Vihar, Nipania, Indore , India</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Sat : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+91 7440446136</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <a></a>
                    <a></a>
                    <a></a>
                    <a class="btn btn-square btn-link rounded-0" href=""></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0"><i ></i>D&V Automation</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="industries.html" class="dropdown-item">Industries</a>
                        <a href="Product.html" class="dropdown-item">Products</a>
                        <a href="support.php" class="dropdown-item">Support</a>
                        <a href="library.html" class="dropdown-item">Library</a>
                    </div>
                </div>
                    <a href="events.html" class="nav-item nav-link"> Events </a>
                <a href="courses.html" class="nav-item nav-link"> Career </a>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <a></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Contact Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    
                </ol>
            </nav>
        </div>
    </div>
    
    <!-- Page Header End -->




    
   

    <!-- Contact Start -->
    <!-- <div class="row justify-content-center">
    <div class="col-lg-5 my-5 mb-4 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        
        <div class="bg-primary text-center p-5">
            <h1 class="mb-4">Make Appointment</h1>
            
            <form   action=""  method="post">
                <div class="row g-3">
                    <div class="col-sm-6">
                    <div class="form-floating">
                    <input type="text" class="form-control border-0" id="name" name="name" placeholder="Name">
                    <label for="name">Your Name</label>
                </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating">
                            <input type="email" class="form-control border-0" id="gmail" name="gmail" placeholder="gmail">
                            <label for="gmail">Your Email</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating">
                            <input type="text" class="form-control border-0" id="phoneno" name="phoneno" placeholder="phoneno">
                            <label for="cname">Phone No.</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating">
                            <input type="text" class="form-control border-0" id="help" name="help" placeholder="help">
                            <label for="cage">How can we help you ?</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <textarea class="form-control border-0" placeholder="Leave a message here" id="message" name="message" style="height: 100px"></textarea>
                            <label for="message">Message</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button  class="btn btn-dark w-100 py-3" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div> -->
    <!-- contact end -->

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $name = $_POST['name'];
        $email = $_POST['gmail'];
        $phoneno = $_POST['phoneno'];
        $help = $_POST['help'];
        $message = $_POST['message'];

        // Validate email address
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email address. Please enter a valid email address.";
            exit; // Stop further execution if email is invalid
        }

        // Verify domain of the email address
        $allowed_domains = array('anujbhadoriya.sits.comp@gamil.com', 'gmail.com', 'yahoo.com'); // Add allowed domains here
        $email_domain = substr(strrchr($email, "@"), 1);
        if (!in_array($email_domain, $allowed_domains)) {
            echo "Invalid email domain. Please use an email address with an allowed domain.";
            exit; // Stop further execution if domain is not allowed
        }

        // Check if domain exists (optional)
        if (!checkdnsrr($email_domain, 'MX')) {
            echo "Domain does not exist. Please enter a valid email address.";
            exit; // Stop further execution if domain does not exist
        }

        // Email address where you want to receive the emails
        $to = "banuj2601singh@gamil.com";

        // Subject of the email
        $subject = "New Appointment Request";

        // Compose the email message
        $message_body = "
        <html>
        <head>
        <title>New Appointment Request</title>
        </head>
        <body>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone No.:</strong> $phoneno</p>
        <p><strong>How can we help you:</strong> $help</p>
        <p><strong>Message:</strong> $message</p>
        </body>
        </html>
        ";

        // Set headers for HTML email
        $headers = "From: $name <$email>\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        // Attempt to send the email
        if (mail($to, $subject, $message_body, $headers)) {
            echo '<div style="text-align: center; background-color: var(--dark); padding: 10px; border-radius: 5px;">';
            echo '<span style="color: var(--light);">Thank you for your appointment request. We will get back to you shortly.</span>';
            echo '</div>';
        } else {
            echo '<div style="text-align: center; background-color: var(--dark); padding: 10px; border-radius: 5px;">';
            echo '<span style="color: var(--light);">Oops! Something went wrong. Please try again later.</span>';
            echo '</div>';
        }
    }
    ?>


    <!-- Contact End -->


    <!-- footer start -->
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright text-light py-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#"> D&V Automation</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                  
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
