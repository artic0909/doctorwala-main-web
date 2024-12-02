<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Privacy Policy Page | Doctorwala</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="fav5.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css"
        integrity="sha512-9xKTRVabjVeZmc+GUW8GgSmcREDunMM+Dt/GrzchfN8tkwHizc5RP4Ok/MXFFy5rIjJjzhndFScTceq5e6GvVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Libraries Stylesheet -->
    <link href="{{asset('../lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('../lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('../lib/twentytwenty/twentytwenty.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('../css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('../css/style.css')}}" rel="stylesheet">
    <link href="{{asset('../css/cards-css.css')}}" rel="stylesheet">
    <link href="{{asset('../css/partner-btn.css')}}" rel="stylesheet">
    <link href="{{asset('../responsive/index_responsive.css')}}" rel="stylesheet">


</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small class="py-2"><i class="far fa-clock text-primary me-2"></i>Opening Hours: Mon - Tues : 6.00
                        am - 10.00 pm, Sunday Closed </small>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-envelope-open me-2"></i>info@example.com</p>
                    </div>
                    <div class="py-2">
                        <p class="m-0"><i class="fa fa-phone me-2"></i>+012 345 6789</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->












    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="/" class="navbar-brand p-0">
            <!-- <h1 class="m-0 text-primary"><i class="fa fa-tooth me-2"></i>DentCare</h1> -->
            <img class="m-0 nav-bar-logo" src="img/logo3.png" width="300" alt="DoctorWala">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="/" class="nav-item nav-link">Home</a>
                <a href="/about" class="nav-item nav-link">About</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Search</a>
                    <div class="dropdown-menu m-0">
                        <a href="/opd" class="dropdown-item">OPD Details</a>
                        <a href="/doctor" class="dropdown-item">Doctor Details</a>
                        <a href="/pathology" class="dropdown-item">Pathology Details</a>
                        <a href="/coupon" class="dropdown-item">Coupon Details </a>
                    </div>
                </div>
                <a href="/blog" class="nav-item nav-link">Blogs</a>

                <a href="/contact" class="nav-item nav-link">Contact</a>
                <a href="/privacy-policy" class="nav-item nav-link active">Privacy Policy</a>
            </div>
            <!-- <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#searchModal"><i
                    class="fa fa-search"></i></button> -->
            <a href="/user-login" class="btn btn-primary py-2 px-4 ms-3">Login</a>
            <a href="" data-bs-toggle="modal" data-bs-target="#userProfileModal" class="btn btn-primary ms-3"><i
                    class="fa fa-user" aria-hidden="true"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->











    <!-- User Profile & Password Edit Modal -->
    <div class="modal fade" id="userProfileModal" tabindex="-1" aria-labelledby="userProfileModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body position-relative">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>


                    <!-- profile update form -->
                    <form class="text-center">
                        <h4 class="modal-title" id="userProfileModalLabel">User Profile</h4>
                        <p class="mb-4">Update your profile details</p>
                        <div class="row">


                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="user_name" name="user_name"
                                        value="Saklin Mustak">
                                    <label for="user_name">Name</label>
                                </div>
                            </div>



                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="user_email" name="user_email"
                                        value="saklin@gmail.com">
                                    <label for="user_email">Email</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="user_mobile" name="user_mobile"
                                        value="9061234567">
                                    <label for="user_mobile">Mobile</label>
                                </div>
                            </div>



                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <a href="" class="btn btn-primary py-3 col-md-12">Update Profile</a>
                                </div>
                            </div>



                        </div>
                    </form>



                    <!-- password update form -->
                    <form class="text-center form password-update">
                        <h4 class="modal-title" id="userProfileModalLabel">Security Privacy</h4>
                        <p class="mb-4">Update your account password</p>
                        <div class="row">


                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="user_old_password"
                                        name="user_old_password" placeholder="Existing Password">
                                    <label for="user_old_password">Existing Password</label>
                                </div>
                            </div>



                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="user_new_password"
                                        name="user_new_password" placeholder="New Password">
                                    <label for="user_new_password">New Password</label>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-floating mb-3"
                                    style="background: url('img/captcha.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
                                    <canvas id="passwordUpdateCaptchaCanvas" width="200" height="40"
                                        style="cursor: pointer;"></canvas>
                                </div>
                            </div>



                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="passwordUpdateCaptchaInput"
                                        name="passwordUpdateCaptchaInput" placeholder="Captcha">
                                    <label for="passwordUpdateCaptchaInput">Captcha</label>
                                </div>
                            </div>





                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <button type="submit" class="btn btn-primary py-3 col-md-12">Save Changes</button>
                                </div>
                            </div>



                        </div>
                    </form>



                </div>

            </div>
        </div>
    </div>
















    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Our Privacy Policy</h1>
                <a href="index.html" class="h4 text-white" style="text-decoration: underline;">Home</a>
                <i class="fa fa-plus text-dark px-2" style="font-size: 2rem; font-weight: 700;"></i>
                <a href="" class="h4 text-white">Policies</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->








    <!-- Privacy Policy Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
                    <div class="bg-light rounded h-100 p-5">
                        <div class="section-title">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">Privacy Policy</h5>
                            <h1 class="display-6 mb-4">Welcome to our site</h1>
                        </div>

                        <div class="d-flex align-items-center mb-5 wow slideInUp" data-wow-delay="0.2s">
                            <div class="text-start bg-white p-3" style="color: #051225; font-style: italic;">
                                <p class="mb-0 fw-bold fs-5"><i class="fa-solid fa-quote-left"></i>&nbsp;This
                                    Privacy Policy explains how Sumatra Sales Private Limited ("we" or "us")
                                    collects, uses, and protects the personal information of users ("you" or "users") on
                                    our website www.doctorwala.info (the "Website"). By using our Website, you consent
                                    to the collection, use, and disclosure of your personal information as described in
                                    this Privacy Policy.&nbsp;<i class="fa-solid fa-quote-right"></i></p>
                            </div>
                        </div>


                        <div class="d-flex align-items-center mb-2 wow slideInUp" data-wow-delay="0.3s">
                            <div class="text-start">
                                <h5 class="mb-0">Information We Collect</h5>
                                <span>1.1 Personal Information: We may collect personal information such as your name,
                                    email address, contact number, and other relevant information when you voluntarily
                                    provide it to us through forms or by contacting us.</span> <br> <br>

                                <p>1.2 Usage Data: We may collect non-personal information about your interaction with
                                    our Website, such as your IP address, browser type, referring/exit pages, and the
                                    date and time of your visit. We may use cookies and similar technologies to collect
                                    this information.</p>
                            </div>
                        </div>




                        <div class="d-flex align-items-center wow slideInUp" data-wow-delay="0.3s">
                            <div class="text-start">
                                <h5 class="mb-0">Use of Information</h5>
                                <span>2.1 Provide Services: We may use the personal information you provide to us to
                                    provide and improve our services, such as facilitating appointments with doctors,
                                    displaying relevant search results, and delivering personalized content.</span>
                                <br>
                                <br>
                                <p>2.2 Communication: We may use your contact information to communicate with you
                                    regarding your inquiries, appointments, service updates, and promotional offers. You
                                    may opt out of receiving promotional communications at any time.</p>

                                <p>2.3 Analytics and Improvements: We may use the non-personal information and usage
                                    data to analyze trends, administer the Website, and improve our services, features,
                                    and user experience.</p>
                            </div>
                        </div>



                        <div class="d-flex align-items-center mb-4 wow slideInUp" data-wow-delay="0.1s">
                            <div class="text-start">
                                <h5 class="mb-0">Data Security</h5>

                                <span>
                                    We take reasonable precautions to protect the personal information we collect from
                                    unauthorized access, use, disclosure, or alteration. However, no method of
                                    transmission over the internet or electronic storage is completely secure.
                                    Therefore, we cannot guarantee absolute security of your personal information.
                                </span>
                            </div>
                        </div>




                        <div class="d-flex align-items-center mb-4 wow slideInUp" data-wow-delay="0.1s">
                            <div class="text-start">
                                <h5 class="mb-0">Links to Third-Party Websites</h5>

                                <span>
                                    Our Website may contain links to third-party websites or services. This Privacy
                                    Policy does not apply to those third-party websites. We recommend reviewing the
                                    privacy policies of those websites for information about their data collection, use,
                                    and disclosure practices.
                                </span>
                            </div>
                        </div>





                        <div class="d-flex align-items-center mb-4 wow slideInUp" data-wow-delay="0.1s">
                            <div class="text-start">
                                <h5 class="mb-0">Children's Privacy</h5>

                                <span>
                                    Our Website is not intended for children under the age of 13. We do not knowingly
                                    collect personal information from children under the age of 13. If you are a parent
                                    or guardian and believe that your child has provided us with personal information,
                                    please contact us, and we will promptly remove the information.
                                </span>
                            </div>
                        </div>




                        <div class="d-flex align-items-center mb-4 wow slideInUp" data-wow-delay="0.1s">
                            <div class="text-start">
                                <h5 class="mb-0">Changes to this Privacy Policy</h5>

                                <span>
                                    We reserve the right to update or modify this Privacy Policy at any time. Any
                                    changes will be effective immediately upon posting the updated Privacy Policy on our
                                    Website. We encourage you to review this Privacy Policy periodically.
                                </span>
                            </div>
                        </div>




                        <div class="d-flex align-items-center wow slideInUp" data-wow-delay="0.1s">
                            <div class="text-start">
                                <h5 class="mb-0">Contact Us</h5>

                                <span>
                                    If you have any questions, concerns, or requests regarding this Privacy Policy or
                                    our privacy practices, please contact us at <strong>admin@doctorwala.info</strong>
                                </span>
                            </div>
                        </div>



                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Privacy Policy End -->
















    <!-- marquee text start -->
    <marquee id="marqueeText"
        style="background: #051225; color: white; padding: 10px; position: fixed; bottom: 0; width: 100%; z-index: 1000;">
        Welcome to <b>Doctorwala.info</b> !! In addition
        to doctors, we also connect you with pathologists and OPDs. If you require diagnostic services or need to visit
        an OPD for consultation, DoctorWala.info is your go-to platform. We collaborate with trusted pathologists and
        OPDs to ensure that you receive accurate and timely medical tests and consultations. for more information feel
        free to call us or write us directly at <b>support@doctorwala.info.</b>
    </marquee>
    <!-- marquee text end -->









    <!-- Footer Start -->
    <div class="container-fluid text-light py-4 footer-content"
        style="background: #051225; position: relative; z-index: 1001;">
        <div class="">
            <div class="footer-content-inner">

                <div class="text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-white border-bottom"
                            href="doctorwala.info">DoctorWala.info</a>. All
                        Rights Reserved.</p>
                </div>

                <!-- <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed by <a class="text-white border-bottom" href="https://htmlcodex.com">HTML
                            Codex</a><br>
                        Distributed by <a class="text-white border-bottom" href="https://themewagon.com">ThemeWagon</a>
                    </p>
                </div> -->

                <div class="">
                    <div class="d-flex">
                        <a class="btn btn-lg btn-dark btn-lg-square rounded me-2 btn-footer" href="#"><i
                                class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-lg btn-dark btn-lg-square rounded me-2 btn-footer" href="#"><i
                                class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-lg btn-dark btn-lg-square rounded me-2 btn-footer" href="#"><i
                                class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-lg btn-dark btn-lg-square rounded btn-footer" href="#"><i
                                class="fab fa-instagram fw-normal"></i></a>
                    </div>
                </div>


                <div class="login-partner">
                    <a href="partner-login.html" class="btn btn-dark btn-lg rounded me-2">Login As Partner</a>
                </div>


            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>




    <!-- PARTNER REGISTER BUTTON -->
    <a href="partner-register.html" class="btn btn-lg btn-dark2 btn-lg-square rounded partner-login">
        <i class="fa fa-plus" aria-hidden="true"></i>
        <span class="showing-text"> Partner Register</span>
    </a>




















    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('../lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('../lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('../lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('../lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('../lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('../lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script src="{{asset('../lib/twentytwenty/jquery.event.move.js')}}"></script>
    <script src="{{asset('../lib/twentytwenty/jquery.twentytwenty.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('../js/main.js')}}"></script>
    <script src="{{asset('../js/cards-scroll.js')}}"></script>
    <script src="{{asset('../js/captcha.js')}}"></script>
    <script src="js/password-update-captcha.js"></script>
</body>

</html>