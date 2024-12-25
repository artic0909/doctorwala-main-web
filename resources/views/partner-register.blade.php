<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Partner Register Page | Doctorwala</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{asset('fav5.png')}}" rel="icon">

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
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="../lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/cards-css.css" rel="stylesheet">
    <link href="../css/partner-btn.css" rel="stylesheet">
    <link href="../responsive/index_responsive.css" rel="stylesheet">
    <link href="../responsive/partner_responsive.css" rel="stylesheet">


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
                    <small class="py-2"><i class="far fa-clock text-primary me-2"></i>Opening Hours: Mon To Sun : 24/7 Available</small>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                    @foreach($aboutDetails as $aboutDetail)
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-envelope-open me-2"></i><a href="mailto:{{$aboutDetail->email}}" class="text-white">{{$aboutDetail->email}}</a></p>
                    </div>
                    <div class="py-2">
                        <p class="m-0"><i class="fa fa-phone me-2"></i><a href="tel:{{$aboutDetail->number}}" class="text-white">+91-{{$aboutDetail->number}}</a></p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->








    @guest
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="/" class="navbar-brand p-0">
            <!-- <h1 class="m-0 text-primary"><i class="fa fa-tooth me-2"></i>DentCare</h1> -->
            <img class="m-0 nav-bar-logo" src="{{asset('img/logo3.png')}}" width="300" alt="DoctorWala">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="/" class="nav-item nav-link ">Home</a>
                <a href="/about" class="nav-item nav-link ">About</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Search</a>
                    <div class="dropdown-menu m-0">
                        <a href="/dw/opd" class="dropdown-item">OPD Details</a>
                        <a href="/dw/doctor" class="dropdown-item">Doctor Details</a>
                        <a href="/dw/pathology" class="dropdown-item">Pathology Details</a>
                        <a href="/coupons" class="dropdown-item">Coupon Details </a>
                    </div>
                </div>
                <a href="/blog" class="nav-item nav-link ">Blogs</a>

                <a href="/contact" class="nav-item nav-link ">Contact</a>
                <a href="/privacy-policy" class="nav-item nav-link">Privacy Policy</a>
            </div>
            <!-- <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#searchModal"><i
                    class="fa fa-search"></i></button> -->


            <a href="/dw/user-auth" class="btn btn-primary py-2 px-4 ms-3">Login</a>



            <!-- <a href="" data-bs-toggle="modal" data-bs-target="#userProfileModal" class="btn btn-primary ms-3"><i
                    class="fa fa-user" aria-hidden="true"></i></a> -->

        </div>
    </nav>
    <!-- Navbar End -->
    @endguest


    @auth
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="/dw" class="navbar-brand p-0">
            <!-- <h1 class="m-0 text-primary"><i class="fa fa-tooth me-2"></i>DentCare</h1> -->
            <img class="m-0 nav-bar-logo" src="{{asset('img/logo3.png')}}" width="300" alt="DoctorWala">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="/dw" class="nav-item nav-link">Home</a>
                <a href="/dw/about" class="nav-item nav-link ">About</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Search</a>
                    <div class="dropdown-menu m-0">
                        <a href="/dw/opd" class="dropdown-item">OPD Details</a>
                        <a href="/dw/doctor" class="dropdown-item">Doctor Details</a>
                        <a href="/dw/pathology" class="dropdown-item">Pathology Details</a>
                        <a href="/dw/coupons" class="dropdown-item">Coupon Details </a>
                    </div>
                </div>
                <a href="/dw/blog" class="nav-item nav-link">Blogs</a>

                <a href="/dw/contact" class="nav-item nav-link">Contact</a>
                <a href="/dw/privacy-policy" class="nav-item nav-link">Privacy Policy</a>
            </div>
            <!-- <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#searchModal"><i
                    class="fa fa-search"></i></button> -->


            <!-- <a href="/dw/user-auth" class="btn btn-primary py-2 px-4 ms-3">Login</a> -->



            <a href="" data-bs-toggle="modal" data-bs-target="#userProfileModal" class="btn btn-primary ms-3"><i
                    class="fa fa-user" aria-hidden="true"></i></a>

        </div>
    </nav>
    <!-- Navbar End -->
    @endauth






    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Partner Register</h1>
                <a href="/" class="h4 text-white" style="text-decoration: underline;">Home</a>
                <i class="fa fa-plus text-dark px-2" style="font-size: 2rem; font-weight: 700;"></i>
                <a href="" class="h4 text-white">Register</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->
















    <!-- Partner Register Start -->
    <div class="container-fluid bg-primary bg-appointment mb-5 wow fadeInUp" data-wow-delay="0.1s"
        style="margin-top: 90px;">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="display-5 text-white mb-4">We Are A Certified and Award Winning Dental Clinic You Can
                            Trust</h1>
                        <p class="text-white mb-0">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd
                            ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt
                            voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr
                            ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn"
                        data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Partner Registration</h1>
                        <form action="{{route('partnerRegForm')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">



                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0"
                                        placeholder="Clinic Name *" style="height: 55px;" name="partner_clinic_name"
                                        id="partner_clinic_name" required>
                                </div>



                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0"
                                        placeholder="Contact Person *" style="height: 55px;" name="partner_contact_person_name"
                                        id="partner_contact_person_name" required>
                                </div>



                                <div class="col-12 col-sm-6">
                                    <input type="number" class="form-control bg-light border-0"
                                        placeholder="Mobile Number *" style="height: 55px;" name="partner_mobile_number"
                                        id="partner_mobile_number" required>
                                </div>




                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Email ID *"
                                        style="height: 55px;" name="partner_email" id="partner_email" required>
                                </div>




                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-light border-0" style="height: 55px;" name="partner_state"
                                        id="partner_state" required>
                                        <option selected>Select State</option>
                                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chandigarh">Chandigarh</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli
                                            and Daman and Diu</option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Ladakh">Ladakh</option>
                                        <option value="Lakshadweep">Lakshadweep</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Odisha">Odisha</option>
                                        <option value="Puducherry">Puducherry</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="West Bengal">West Bengal</option>
                                    </select>
                                </div>





                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0" placeholder="City *" style="height: 55px;" name="partner_city" id="partner_city" required>
                                </div>





                                <div class="col-12 col-sm-6">
                                    <input type="number" class="form-control bg-light border-0" placeholder="Pin Code *"
                                        style="height: 55px;" name="partner_pincode" id="partner_pincode" required>
                                </div>


                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Landmark *"
                                        style="height: 55px;" name="partner_landmark" id="partner_landmark" required>
                                </div>





                                <div class="col-12">
                                    <textarea name="partner_address" class="form-control bg-light border-0" rows="5"
                                        id="partner_address" placeholder="Full Address *" required></textarea>
                                </div>







                                <div class="col-12">
                                    <input type="password" class="form-control bg-light border-0"
                                        placeholder="Password *" style="height: 55px;" name="partner_password"
                                        id="partner_password" required>
                                </div>






                                <div class="col-12 col-sm-6">
                                    <div class="cap-back" style="background: url('../img/captcha.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover; border-radius: 2px;" data-captcha="{{ $captcha }}">
                                        <canvas id="captchaCanvas" width="150" height="49" style="cursor: pointer;"></canvas>
                                    </div>
                                </div>


                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0"
                                        placeholder="Enter Captcha *" style="height: 55px;" name="captcha" id="captcha" required>
                                    @error('captcha')
                                    <small class="text-white">{{ $message }}</small>
                                    @enderror
                                </div>





                                <div class="col-12">
                                    <p class="text-white fw-bold" style="text-align: left;">Registration Type <span
                                            class="text-dark">*</span></p>

                                    <div class="form-check form-check-inline"
                                        style="display: flex;  justify-content: space-between; align-items: center;">

                                        <p>
                                            <label for="opd" class="form-check-label text-white"
                                                style="font-size: 1.3rem; font-weight: 700;">OPD&nbsp;</label>
                                            <input type="checkbox" name="registration_type[]" id="opd" value="OPD" style="transform: scale(1.5); cursor: pointer;">&nbsp;
                                        </p>

                                        <p>
                                            <label for="pathology" class="form-check-label text-white"
                                                style="font-size: 1.3rem; font-weight: 700;">Path&nbsp;</label>
                                            <input type="checkbox" name="registration_type[]" id="pathology" value="Pathology" style="transform: scale(1.5); cursor: pointer;">&nbsp;
                                        </p>

                                        <p>
                                            <label for="doctor" class="form-check-label text-white"
                                                style="font-size: 1.3rem; font-weight: 700;">Doctor&nbsp;</label>
                                            <input type="checkbox" name="registration_type[]" id="doctor" value="Doctor" style="transform: scale(1.5); cursor: pointer;">&nbsp;
                                        </p>

                                    </div>
                                </div>


                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">REGISTER</button>
                                </div>


                                <p>
                                    <a href="#" class="text-white fw-bold" style="text-decoration: none;">Already have
                                        an account ?</a>
                                    <span><a href="/partner-login" class="text-white "
                                            style="text-decoration: underline;">Login</a></span>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Register End -->



    <!-- profile registration success modal start -->
    <div class="modal fade" id="profileRegistrationSuccessModal" tabindex="-1" aria-labelledby="profileRegistrationSuccessModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body d-flex flex-column align-middle justify-center align-items-center">
                    <h2 class="modal-title" id="profileUpdateSuccessModalLabel"><span class="text-primary">+</span> SUCCESS <span class="text-primary">+</span></h2>
                    <h2 class="text-primary">Thank You For Register</h2>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn p-2 btn-primary w-100" data-bs-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
    <!-- profile registration success modal end -->

    <!-- profile registration Unsuccess modal start -->
    <div class="modal fade" id="profileRegistrationUnsuccessModal" tabindex="-1" aria-labelledby="profileRegistrationUnsuccessModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body d-flex flex-column align-middle justify-center align-items-center">
                    <h3 class="modal-title" id="profileUpdateSuccessModalLabel"><span class="text-primary">+</span> ERROR <span class="text-primary">+</span></h3>
                    <h4 class="text-danger">Profile Is Not Registered</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn p-2 btn-primary w-100" data-bs-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
    <!-- profile registration Unsuccess modal end -->







    @if(session('success') == 'success')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const successModal = new bootstrap.Modal(document.getElementById('profileRegistrationSuccessModal'));
            successModal.show();
        });
    </script>
    @elseif(session('unsuccess') == 'unsuccess')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const failureModal = new bootstrap.Modal(document.getElementById('profileRegistrationSuccessModal'));
            failureModal.show();
        });
    </script>
    @endif






    <div id="alertPlaceholder"></div>












    <!-- Testimonial Start -->
    <div class="container-fluid bg-primary bg-testimonial py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel rounded p-5 wow zoomIn" data-wow-delay="0.6s">



                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded mb-4 testi-logo" src="img/testilogo.png" alt="">

                            <p class="testi-text"
                                style="color: white; opacity: 1; font-weight: 700; font-size: 1.3rem;">

                                <i class="fa-solid fa-2x fa-quote-left"></i>&nbsp;Dolores sed duo clita justo
                                dolor et stet
                                lorem kasd dolore lorem ipsum. At
                                lorem lorem magna ut et, nonumy labore diam erat. Erat dolor rebum sit ipsum.&nbsp;
                                <i class="fa-solid fa-2x fa-quote-right"></i>
                            </p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0 testi-text">Client Name</h4>
                        </div>

                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded mb-4 testi-logo" src="img/testilogo.png" alt="">

                            <p class="testi-text"
                                style="color: white; opacity: 1; font-weight: 700; font-size: 1.3rem;">

                                <i class="fa-solid fa-2x fa-quote-left"></i>&nbsp;Dolores sed duo clita justo
                                dolor et stet
                                lorem kasd dolore lorem ipsum. At
                                lorem lorem magna ut et, nonumy labore diam erat. Erat dolor rebum sit ipsum.&nbsp;
                                <i class="fa-solid fa-2x fa-quote-right"></i>
                            </p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0 testi-text">Client Name</h4>
                        </div>








                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
























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
                    <a href="/partner-login" class="btn btn-dark btn-lg rounded me-2">Login As Partner</a>
                </div>


            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>




    <!-- PARTNER REGISTER BUTTON -->
    @guest
    <a href="/partner-register" class="btn btn-lg btn-dark2 btn-lg-square rounded partner-login">
        <i class="fa fa-plus" aria-hidden="true"></i>
        <span class="showing-text"> Partner Register</span>
    </a>
    @endguest
    @auth
    @endauth




















    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/tempusdominus/js/moment.min.js"></script>
    <script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="../lib/twentytwenty/jquery.event.move.js"></script>
    <script src="../lib/twentytwenty/jquery.twentytwenty.js"></script>
    <script src="../js/main.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Form validation
            const form = document.querySelector("form");
            const passwordField = document.getElementById("partner_password");
            const confirmPasswordField = document.querySelector("input[placeholder='Confirm Password *']");
            const opdCheckbox = document.getElementById("opd");
            const pathologyCheckbox = document.getElementById("pathology");
            const doctorCheckbox = document.getElementById("doctor");

            // Validate form before submission
            form.addEventListener("submit", function(e) {
                let valid = true;

                // Check password and confirm password
                if (passwordField.value !== confirmPasswordField.value) {
                    alert("Passwords do not match!");
                    valid = false;
                }

                // If not valid, prevent form submission
                if (!valid) {
                    e.preventDefault();
                }
            });

            // Handle registration type logic
            opdCheckbox.addEventListener("change", function() {
                if (this.checked) {
                    doctorCheckbox.checked = false;
                }
            });

            pathologyCheckbox.addEventListener("change", function() {
                if (this.checked) {
                    doctorCheckbox.checked = false;
                }
            });

            doctorCheckbox.addEventListener("change", function() {
                if (this.checked) {
                    opdCheckbox.checked = false;
                    pathologyCheckbox.checked = false;
                }
            });
        });
    </script>

    <script>
        // Render captcha on canvas
        const captcha = @json($captcha); // Pass captcha value from controller
        const canvas = document.getElementById('captchaCanvas');
        const ctx = canvas.getContext('2d');
        ctx.font = '23px Arial';
        ctx.fillText(captcha, 10, 35);

        // Reload captcha on click
        canvas.addEventListener('click', () => location.reload());
    </script>
</body>

</html>