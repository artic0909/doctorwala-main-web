<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home Page | Doctorwala</title>
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
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/cards-css.css" rel="stylesheet">
    <link href="css/partner-btn.css" rel="stylesheet">
    <link href="responsive/index_responsive.css" rel="stylesheet">

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
                <a href="/" class="nav-item nav-link active">Home</a>
                <a href="/about" class="nav-item nav-link ">About</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Search</a>
                    <div class="dropdown-menu m-0">
                        <a href="/dw/opd" class="dropdown-item">OPD Details</a>
                        <a href="/dw/doctor" class="dropdown-item">Doctor Details</a>
                        <a href="/dw/pathology" class="dropdown-item">Pathology Details</a>
                        <a href="/partnerpanel/coupon" class="dropdown-item">Coupon Details </a>
                    </div>
                </div>
                <a href="/blog" class="nav-item nav-link">Blogs</a>

                <a href="/contact" class="nav-item nav-link">Contact</a>
                <a href="/privacy-policy" class="nav-item nav-link">Privacy Policy</a>
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


                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <form method="POST" action="{{ route('user.logout') }}">
                                @csrf
                                <a class="btn btn-danger py-3 col-md-12" :href="route('user.logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    Logout
                                </a>
                            </form>

                        </div>
                    </div>


                    <!-- <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <button type="submit" class="btn btn-danger py-3 col-md-12">Logout</button>
                        </div>
                    </div> -->



                </div>

            </div>
        </div>
    </div>




    <!-- Profile Update Alerts -->
    <!-- <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>


    <div class="alert alert-success d-flex align-items-center w-50" role="alert" id="profileUpdateSuccessAlert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
            <use xlink:href="#check-circle-fill" />
        </svg>
        <div class="d-flex justify-content-between w-100">
            <p style="margin:  0;">Your Profile is <b>Updated Successfully</b></p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>


    <div class="alert alert-danger d-flex align-items-center w-50" role="alert" id="profileUpdateUnsuccessAlert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
            <use xlink:href="#exclamation-triangle-fill" />
        </svg>
        <div class="d-flex justify-content-between w-100">
            <p style="margin:  0;">Your Profile is <b>Not Updated</b></p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div> -->


















    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Keep Your Teeth Healthy</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Take The Best Quality Dental
                                Treatment</h1>
                            <a href="opd.html" class="btn btn-dark py-md-3 px-md-5 me-3 animated slideInLeft">OPD
                                Details</a>
                            <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Keep Your Teeth Healthy</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Take The Best Quality Dental
                                Treatment</h1>
                            <a href="pathology.html"
                                class="btn btn-dark py-md-3 px-md-5 me-3 animated slideInLeft">Pathology</a>
                            <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Banner Start -->
    <div class="container-fluid banner mb-5">
        <div class="container">
            <div class="row gx-2">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary d-flex flex-column p-5 searchBanner searchBanner1" style="height: 230px;">
                        <h3 class="text-white mb-3">Search For ALL</h3>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <input type="text" class="form-control border-0" placeholder="Search for Doctor/Path/OPD">
                        </div>
                        <a class="btn btn-light" href="">Search Now</a>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-dark2 d-flex flex-column p-5 searchBanner searchBanner2" style="height: 230px;">
                        <h3 class="text-white mb-3">Search For OPD</h3>
                        <select class="form-select bg-light border-0 mb-3" style="height: 40px;">
                            <option selected>Select</option>
                            <option value="1">OPD 1</option>
                            <option value="2">OPD 2</option>
                            <option value="3">OPD 3</option>
                        </select>
                        <a class="btn btn-light" href="">Search OPD</a>
                    </div>
                </div>


                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-primary d-flex flex-column p-5 searchBanner searchBanner3" style="height: 230px;">
                        <h3 class="text-white mb-3">Search For Pathology</h3>
                        <select class="form-select bg-light border-0 mb-3" style="height: 40px;">
                            <option selected>Select</option>
                            <option value="1">Pathology 1</option>
                            <option value="2">Pathology 2</option>
                            <option value="3">Pathology 3</option>
                        </select>
                        <a class="btn btn-light" href="">Search Pathology</a>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <!-- Banner Start -->









    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Jio Ji Bharka</h5>
                        <h1 class="display-5 mb-0">One of The Local Search Engine for Medical Services</h1>
                    </div>
                    <h4 class="text-body fst-italic mb-4">Welcome to DoctorWala.info, your trusted source for finding
                        the right doctors, pathologists, and OPDs in your local area.</h4>
                    <p class="mb-4">DoctorWala.info is a leading local search engine dedicated to helping individuals in
                        India find the right doctors, pathologists, and OPDs in their local areas. Our platform is
                        designed to simplify the process of locating and connecting with healthcare professionals,
                        ensuring that you receive the best possible care.</p>
                    <div class="row g-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Find Best Doctors</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Find Best Pathologists
                            </h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Find Best Clinics</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Single Call</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>24/7 Opened</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Fair Prices</h5>
                        </div>
                    </div>
                    <a href="partner-register.html" class="btn btn-primary py-3 px-5 mt-4 wow zoomIn"
                        data-wow-delay="0.6s">Join As Partners</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="img/about1.png" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


















    <!-- OPD Cards Start -->
    <div class="container-fluid bg-primary bg-appointment my-5 wow fadeInUp p-3" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-title mb-4">
                <h5 class="position-relative d-inline-block text-white text-uppercase">Available OPD</h5>
                <h1 class="display-5 mb-0 text-white">Take The Best Doctors For Best Treatments</h1>
            </div>
            <div class="buttons"
                style="margin-bottom: 15px; display: flex; justify-content: end; align-items: center; gap: 1.5%;">
                <button class="btn btn-primary btn-prev" aria-label="Previous">
                    <i class="bi bi-arrow-left"></i>
                </button>
                <button class="btn btn-primary btn-next" aria-label="Next">
                    <i class="bi bi-arrow-right"></i>
                </button>
            </div>

            <div class="row gx-5 overflow-hidden position-relative">
                <div class="col-12">
                    <div class="scrolling-wrapper d-flex">
                        <!-- Card 1 -->

                        <div class="card mx-2" style="min-width: 300px;">
                            <img src="img/lifeline.png" class="card-img-top" alt="Service">
                            <div class="card-body">
                                <a href="all-opd-doctor-pathology-details.html" class="text-decoration-none my-dd">
                                    <h3 class="card-title">Title 1</h3>
                                    <p class="card-text text-primary ppp" style="font-weight: 700;">Location 1.</p>
                                </a>
                            </div>
                        </div>



                        <div class="card mx-2" style="min-width: 300px;">
                            <img src="img/lifeline.png" class="card-img-top" alt="Service">
                            <div class="card-body">
                                <a href="all-opd-doctor-pathology-details.html" class="text-decoration-none my-dd">
                                    <h5 class="card-title">Title 1</h5>
                                    <p class="card-text text-primary ppp" style="font-weight: 700;">Location 1.</p>
                                </a>
                            </div>
                        </div>



                        <div class="card mx-2" style="min-width: 300px;">
                            <img src="img/lifeline.png" class="card-img-top" alt="Service">
                            <div class="card-body">
                                <a href="all-opd-doctor-pathology-details.html" class="text-decoration-none my-dd">
                                    <h5 class="card-title">Title 1</h5>
                                    <p class="card-text text-primary ppp" style="font-weight: 700;">Location 1.</p>
                                </a>
                            </div>
                        </div>



                        <div class="card mx-2" style="min-width: 300px;">
                            <img src="img/lifeline.png" class="card-img-top" alt="Service">
                            <div class="card-body">
                                <a href="all-opd-doctor-pathology-details.html" class="text-decoration-none my-dd">
                                    <h5 class="card-title">Title 1</h5>
                                    <p class="card-text text-primary ppp" style="font-weight: 700;">Location 1.</p>
                                </a>
                            </div>
                        </div>



                        <div class="card mx-2" style="min-width: 300px;">
                            <img src="img/lifeline.png" class="card-img-top" alt="Service">
                            <div class="card-body">
                                <a href="all-opd-doctor-pathology-details.html" class="text-decoration-none my-dd">
                                    <h5 class="card-title">Title 1</h5>
                                    <p class="card-text text-primary ppp" style="font-weight: 700;">Location 1.</p>
                                </a>
                            </div>
                        </div>



                        <div class="card mx-2" style="min-width: 300px;">
                            <img src="img/lifeline.png" class="card-img-top" alt="Service">
                            <div class="card-body">
                                <a href="all-opd-doctor-pathology-details.html" class="text-decoration-none my-dd">
                                    <h5 class="card-title">Title 1</h5>
                                    <p class="card-text text-primary ppp" style="font-weight: 700;">Location 1.</p>
                                </a>
                            </div>
                        </div>



                        <!-- Card 2 -->
                        <!-- Add more cards as needed -->
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- OPD Cards End -->

















    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 mb-5">
                <div class="col-lg-5 wow zoomIn" data-wow-delay="0.3s" style="min-height: 400px;">
                    <div class="twentytwenty-container position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="img/af.jpg" style="object-fit: cover;">
                        <img class="position-absolute w-100 h-100" src="img/be.jpg" style="object-fit: cover;">
                    </div>
                </div>



                <div class="col-lg-7">
                    <div class="section-title mb-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Services</h5>
                        <h1 class="display-5 mb-0">We Offer The Best Doctors, OPD & Pathology Services</h1>
                    </div>




                    <div class="row g-5">
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="img/himatology.jpg" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Hematology Tests</h5>
                            </div>
                        </div>
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.9s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="img/biochemic.jpg" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Biochemistry Tests</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-7">
                    <div class="row g-5">
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.3s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="img/microbiology.jpg" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Microbiology Tests</h5>
                            </div>
                        </div>
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="img/cytology.jpg" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Cytology and More...</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 service-item wow zoomIn" data-wow-delay="0.9s">
                    <div class="position-relative rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-4"
                        style="background: url(img/eyee.jpeg); background-position: center; background-repeat: no-repeat; background-size: cover;">
                        <div class="textss" style="background-color: rgba(48, 46, 46, 0.26); padding: 5px;">
                            <h3 class="text-white mb-3">We Offer</h3>
                            <p class="text-white mb-3" style="font-weight: 700;">Our search engine features a wide range
                                of healthcare providers, in- cluding doctors from various specialties such as
                                cardiology, ortho- pedics, dermatology, gynecology, pediatrics, and more.</p>
                            <h2 class="text-white mb-0">+012 345 6789</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->













    <!-- Pathology Cards Start -->
    <div class="container-fluid bg-primary bg-appointment my-5 wow fadeInUp p-3" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-title mb-4">
                <h5 class="position-relative d-inline-block text-white text-uppercase">Available Pathology</h5>
                <h1 class="display-5 mb-0 text-white">Get Accurate Pathology Tests for Reliable Results</h1>
            </div>
            <div class="buttons"
                style="margin-bottom: 15px; display: flex; justify-content: end; align-items: center; gap: 1.5%;">
                <button class="btn btn-primary btn-prev2" aria-label="Previous">
                    <i class="bi bi-arrow-left"></i>
                </button>
                <button class="btn btn-primary btn-next2" aria-label="Next">
                    <i class="bi bi-arrow-right"></i>
                </button>
            </div>

            <div class="row gx-5 overflow-hidden position-relative">
                <div class="col-12">
                    <div class="scrolling-wrapper2 d-flex">
                        <!-- Card 1 -->
                        <div class="card mx-2" style="min-width: 300px;">
                            <img src="img/newlife.png" class="card-img-top" alt="Service">
                            <div class="card-body">
                                <a href="all-opd-doctor-pathology-details.html" class="text-decoration-none my-dd">
                                    <h5 class="card-title">Title 1</h5>
                                    <p class="card-text text-primary ppp" style="font-weight: 700;">Location 1.</p>
                                </a>
                            </div>
                        </div>


                        <div class="card mx-2" style="min-width: 300px;">
                            <img src="img/newlife.png" class="card-img-top" alt="Service">
                            <div class="card-body">
                                <a href="all-opd-doctor-pathology-details.html" class="text-decoration-none my-dd">
                                    <h5 class="card-title">Title 1</h5>
                                    <p class="card-text text-primary ppp" style="font-weight: 700;">Location 1.</p>
                                </a>
                            </div>
                        </div>



                        <div class="card mx-2" style="min-width: 300px;">
                            <img src="img/newlife.png" class="card-img-top" alt="Service">
                            <div class="card-body">
                                <a href="all-opd-doctor-pathology-details.html" class="text-decoration-none my-dd">
                                    <h5 class="card-title">Title 1</h5>
                                    <p class="card-text text-primary ppp" style="font-weight: 700;">Location 1.</p>
                                </a>
                            </div>
                        </div>



                        <div class="card mx-2" style="min-width: 300px;">
                            <img src="img/newlife.png" class="card-img-top" alt="Service">
                            <div class="card-body">
                                <a href="all-opd-doctor-pathology-details.html" class="text-decoration-none my-dd">
                                    <h5 class="card-title">Title 1</h5>
                                    <p class="card-text text-primary ppp" style="font-weight: 700;">Location 1.</p>
                                </a>
                            </div>
                        </div>

                        <div class="card mx-2" style="min-width: 300px;">
                            <img src="img/newlife.png" class="card-img-top" alt="Service">
                            <div class="card-body">
                                <a href="all-opd-doctor-pathology-details.html" class="text-decoration-none my-dd">
                                    <h5 class="card-title">Title 1</h5>
                                    <p class="card-text text-primary ppp" style="font-weight: 700;">Location 1.</p>
                                </a>
                            </div>
                        </div>






                        <div class="card mx-2" style="min-width: 300px;">
                            <img src="img/newlife.png" class="card-img-top" alt="Service">
                            <div class="card-body">
                                <a href="all-opd-doctor-pathology-details.html" class="text-decoration-none my-dd">
                                    <h5 class="card-title">Title 1</h5>
                                    <p class="card-text text-primary ppp" style="font-weight: 700;">Location 1.</p>
                                </a>
                            </div>
                        </div>





                        <div class="card mx-2" style="min-width: 300px;">
                            <img src="img/newlife.png" class="card-img-top" alt="Service">
                            <div class="card-body">
                                <a href="all-opd-doctor-pathology-details.html" class="text-decoration-none my-dd">
                                    <h5 class="card-title">Title 1</h5>
                                    <p class="card-text text-primary ppp" style="font-weight: 700;">Location 1.</p>
                                </a>
                            </div>
                        </div>



                        <div class="card mx-2" style="min-width: 300px;">
                            <img src="img/newlife.png" class="card-img-top" alt="Service">
                            <div class="card-body">
                                <a href="all-opd-doctor-pathology-details.html" class="text-decoration-none my-dd">
                                    <h5 class="card-title">Title 1</h5>
                                    <p class="card-text text-primary ppp" style="font-weight: 700;">Location 1.</p>
                                </a>
                            </div>
                        </div>
                        <!-- Add more cards as needed -->
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Pathology Cards End -->














    <!-- Join As Partner Start -->
    <div class="container-fluid bg-offer my-4 py-4 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 wow zoomIn" data-wow-delay="0.6s">
                    <div class="offer-text text-center rounded p-5">
                        <h1 class="display-5 text-white off-texts">Partner with Doctorwala.info to Expand Your OPD &
                            Pathology
                            Services Nationwide</h1>
                        <div class="d-flex g-3 flex-wrap justify-content-center ">
                            <a href="partner-register.html" class="btn btn-dark py-3 px-5 me-3 mb-2">Join As Partner</a>
                            <a href="contact.html" class="btn btn-light py-3 px-5 mb-2">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Join As Partner End -->















    <!-- Doctors Cards Start -->
    <div class="container-fluid bg-primary bg-appointment my-5 wow fadeInUp p-3" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-title mb-4">
                <h5 class="position-relative d-inline-block text-white text-uppercase">Available Doctors</h5>
                <h1 class="display-5 mb-0 text-white">Take The Best Doctors For Best Treatments</h1>
            </div>
            <div class="buttons"
                style="margin-bottom: 15px; display: flex; justify-content: end; align-items: center; gap: 1.5%;">
                <button class="btn btn-primary btn-prev3" aria-label="Previous">
                    <i class="bi bi-arrow-left"></i>
                </button>
                <button class="btn btn-primary btn-next3" aria-label="Next">
                    <i class="bi bi-arrow-right"></i>
                </button>
            </div>

            <div class="row gx-5 overflow-hidden position-relative">
                <div class="col-12">
                    <div class="scrolling-wrapper3 d-flex">
                        <!-- Card 1 -->
                        <div class="card mx-2" style="min-width: 300px;">
                            <img src="img/Global.png" class="card-img-top" alt="Service">
                            <div class="card-body">
                                <a href="all-doctor-details.html" class="text-decoration-none my-dd">
                                    <h5 class="card-title">Title 1</h5>
                                    <p class="card-text text-primary ppp" style="font-weight: 700;">Location 1.</p>
                                </a>
                            </div>
                        </div>



                        <div class="card mx-2" style="min-width: 300px;">
                            <img src="img/Global.png" class="card-img-top" alt="Service">
                            <div class="card-body">
                                <a href="all-doctor-details.html" class="text-decoration-none my-dd">
                                    <h5 class="card-title">Title 1</h5>
                                    <p class="card-text text-primary ppp" style="font-weight: 700;">Location 1.</p>
                                </a>
                            </div>
                        </div>



                        <div class="card mx-2" style="min-width: 300px;">
                            <img src="img/Global.png" class="card-img-top" alt="Service">
                            <div class="card-body">
                                <a href="all-doctor-details.html" class="text-decoration-none my-dd">
                                    <h5 class="card-title">Title 1</h5>
                                    <p class="card-text text-primary ppp" style="font-weight: 700;">Location 1.</p>
                                </a>
                            </div>
                        </div>



                        <div class="card mx-2" style="min-width: 300px;">
                            <img src="img/Global.png" class="card-img-top" alt="Service">
                            <div class="card-body">
                                <a href="all-doctor-details.html" class="text-decoration-none my-dd">
                                    <h5 class="card-title">Title 1</h5>
                                    <p class="card-text text-primary ppp" style="font-weight: 700;">Location 1.</p>
                                </a>
                            </div>
                        </div>



                        <div class="card mx-2" style="min-width: 300px;">
                            <img src="img/Global.png" class="card-img-top" alt="Service">
                            <div class="card-body">
                                <a href="all-doctor-details.html" class="text-decoration-none my-dd">
                                    <h5 class="card-title">Title 1</h5>
                                    <p class="card-text text-primary ppp" style="font-weight: 700;">Location 1.</p>
                                </a>
                            </div>
                        </div>



                        <div class="card mx-2" style="min-width: 300px;">
                            <img src="img/Global.png" class="card-img-top" alt="Service">
                            <div class="card-body">
                                <a href="all-doctor-details.html" class="text-decoration-none my-dd">
                                    <h5 class="card-title">Title 1</h5>
                                    <p class="card-text text-primary ppp" style="font-weight: 700;">Location 1.</p>
                                </a>
                            </div>
                        </div>



                        <div class="card mx-2" style="min-width: 300px;">
                            <img src="img/Global.png" class="card-img-top" alt="Service">
                            <div class="card-body">
                                <a href="all-doctor-details.html" class="text-decoration-none my-dd">
                                    <h5 class="card-title">Title 1</h5>
                                    <p class="card-text text-primary ppp" style="font-weight: 700;">Location 1.</p>
                                </a>
                            </div>
                        </div>
                        <!-- Add more cards as needed -->
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Doctors Cards End -->



























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
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="lib/twentytwenty/jquery.event.move.js"></script>
    <script src="lib/twentytwenty/jquery.twentytwenty.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/cards-scroll.js"></script>
    <script src="js/password-update-captcha.js"></script>
</body>

</html>