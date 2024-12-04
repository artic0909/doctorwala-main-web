<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>All Doctor Details Page | Doctorwala</title>
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
    <link href="{{asset('../responsive/service_responsive.css')}}" rel="stylesheet">
    <link href="{{asset('../responsive/allopdpathdoc_responsive.css')}}" rel="stylesheet">


    <style>
        .rating-a {
            img {
                transition: all 150ms ease-in-out;
            }

            &:hover {
                img {
                    scale: 1.3;
                }
            }

        }


        @media (max-width:496px) {
            .d-texts {
                font-size: 0.82rem !important;

                img {
                    width: 20px;
                }
            }
        }
    </style>



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
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Search</a>
                    <div class="dropdown-menu m-0">
                        <a href="/opd" class="dropdown-item">OPD Details</a>
                        <a href="/doctor" class="dropdown-item">Doctor Details</a>
                        <a href="/pathology" class="dropdown-item">Pathology Details</a>
                        <a href="/coupon" class="dropdown-item">Coupon Details </a>
                    </div>
                </div>
                <a href="/blog" class="nav-item nav-link">Blogs</a>

                <a href="/contact" class="nav-item nav-link">Contact</a>
                <a href="/privacy-policy" class="nav-item nav-link">Privacy Policy</a>
            </div>
            <!-- <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#searchModal"><i
                    class="fa fa-search"></i></button> -->
            <a href="/dw/user-auth" class="btn btn-primary py-2 px-4 ms-3">Login</a>
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









    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Doctor Name</h1>
                <a href="/" class="h4 text-white" style="text-decoration: underline;">Home</a>
                <i class="fa fa-plus text-dark px-2" style="font-size: 2rem; font-weight: 700;"></i>
                <a href="" class="h4 text-white">Details</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->












    <!-- Details Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">

                <div class="col-lg-4">
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img class="img-fluid rounded-top w-100" src="img/newlife.png" alt="">
                            <div
                                class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                <img src="img/logo.png" width="80" alt="">
                            </div>
                        </div>
                        <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                            <h4 class="mb-2">Doctorwala.info</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="section-title bg-light rounded h-100 p-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">jio ji bharka</h5>
                        <h2 class="display-6 mb-4">Doctor Title</h2>


                        <div class="d-details">
                            <p class="location_d d-texts">
                                <strong><i class="fa fa-map-marker-alt me-2"></i>Address: Ranihati, Kolkata,
                                    700126</strong>
                            </p>

                            <p class="landmark_d d-texts">
                                <strong><i class="fa fa-map-marker-alt me-2"></i>Landmark: Ranihati</strong>
                            </p>

                            <p class="contact_d d-texts">
                                <strong><i class="fa fa-phone me-2"></i>Phone: +91 123 456 789</strong>
                            </p>

                            <p class="email_d d-texts">
                                <strong><i class="fa fa-envelope me-2"></i>Email: doctorwala@gmail.com</strong>
                            </p>


                            <p class="contact_person_d d-texts">
                                <strong><i class="fa fa-user me-2"></i>Doctor Name: Saklin Mustak</strong>
                            </p>

                        </div>




                        <p class="ratings d-flex d-texts gap-3 mt-3 align-items-center flex-wrap" style="list-style-type: none;">
                            <span><strong><i class="fa-solid fa-star me-2"></i>Rating :</strong></span>
                            <a href="" class="rating-a"><img src="img/1.png" width="35" alt=""></a>
                            <a href="" class="rating-a"><img src="img/2.png" width="35" alt=""></a>
                            <a href="" class="rating-a"><img src="img/3.png" width="35" alt=""></a>
                            <a href="" class="rating-a"><img src="img/5.png" width="35" alt=""></a>
                            <a href="" class="rating-a"><img src="img/4.png" width="35" alt=""></a>
                        </p>






                        <div class="d-buttons">
                            <a href="" data-bs-toggle="modal" data-bs-target="#myInquirySendModal"
                                class="btn btn-dark btn-darkk py-md-3 px-md-5 me-3 mb-2 animated slideInLeft">Send
                                Inquiry</a>

                            <a href="" class="btn btn-secondary py-md-3 px-md-5 me-3 mb-2 animated slideInRight">See
                                Location</a>

                            <a href="" data-bs-toggle="modal" data-bs-target="#myDoctorViewModal"
                                class="btn btn-primary py-md-3 px-md-5 mb-2 animated slideInRight">Day & Time</a>
                        </div>


                    </div>
                </div>



            </div>
        </div>
    </div>
    <!-- Details End -->










    <!-- Tab bar Start -->
    <div class="d_tab_bar">
        <div class="container">
            <div class="row">










                <!-- Tab panes for Photos -->
                <div class="tab-content p-0 mt-4" id="myTabContent">



                    <!-- Pathology Tab -->
                    <div class="tab-pane fade show active" id="photos" role="tabpanel" aria-labelledby="photos-tab">




                        <div class="section-title bg-light rounded h-100 p-5">
                            <h5 class="position-relative d-inline-block text-dark text-uppercase">Photos
                            </h5>



                            <div
                                class="clinic_photos mt-4 d-flex gap-4 flex-wrap justify-content-start align-items-center">


                                <a href="" data-bs-toggle="modal" data-bs-target="#myPhotosViewModal"><img
                                        src="img/lifeline.png" width="160" alt=""></a>
                                <a href="" data-bs-toggle="modal" data-bs-target="#myPhotosViewModal"><img
                                        src="img/lifeline.png" width="160" alt=""></a>
                                <a href="" data-bs-toggle="modal" data-bs-target="#myPhotosViewModal"><img
                                        src="img/lifeline.png" width="160" alt=""></a>
                                <a href="" data-bs-toggle="modal" data-bs-target="#myPhotosViewModal"><img
                                        src="img/lifeline.png" width="160" alt=""></a>
                                <a href="" data-bs-toggle="modal" data-bs-target="#myPhotosViewModal"><img
                                        src="img/lifeline.png" width="160" alt=""></a>
                                <a href="" data-bs-toggle="modal" data-bs-target="#myPhotosViewModal"><img
                                        src="img/lifeline.png" width="160" alt=""></a>
                                <a href="" data-bs-toggle="modal" data-bs-target="#myPhotosViewModal"><img
                                        src="img/lifeline.png" width="160" alt=""></a>
                                <a href="" data-bs-toggle="modal" data-bs-target="#myPhotosViewModal"><img
                                        src="img/lifeline.png" width="160" alt=""></a>


                            </div>




                        </div>



                    </div>
                </div>




                <!-- Tab panes for Service Lists -->
                <div class="tab-content p-0 mt-4" id="myTabContent">



                    <!-- Pathology Tab -->
                    <div class="tab-pane fade show active" id="service" role="tabpanel" aria-labelledby="service-tab">




                        <div class="section-title bg-light rounded h-100 p-5">
                            <h5 class="position-relative d-inline-block text-dark text-uppercase">Service Lists
                            </h5>



                            <ul class="service-lists" style="list-style: number;">
                                <li>
                                    <p class="fs-8 fw-bold"><i class="fa fa-stethoscope"></i> <span
                                            class="text-primary text-capital">Ambulance Service</span></p>

                                </li>

                                <li>
                                    <p class="fs-8 fw-bold"><i class="fa fa-stethoscope"></i> <span
                                            class="text-primary text-capital">Parking Service</span></p>
                                </li>

                                <li>
                                    <p class="fs-8 fw-bold"><i class="fa fa-stethoscope"></i> <span
                                            class="text-primary text-capital">Parking Service</span></p>
                                </li>


                                <li>
                                    <p class="fs-8 fw-bold"><i class="fa fa-stethoscope"></i> <span
                                            class="text-primary text-capital">Parking Service</span></p>
                                </li>


                                <li>
                                    <p class="fs-8 fw-bold"><i class="fa fa-stethoscope"></i> <span
                                            class="text-primary text-capital">Parking Service</span></p>
                                </li>
                            </ul>




                        </div>
                    </div>
                </div>





                <!-- Tab panes for About -->
                <div class="tab-content p-0 mt-4" id="myTabContent">



                    <!-- Pathology Tab -->
                    <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab">




                        <div class="section-title bg-light rounded h-100 p-5">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">About Clinic
                            </h5>



                            <div class="about_clinic">
                                <p class="p-3 bg-white" style="text-align: justify;">
                                    Lorem Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam dolor
                                    architecto corporis itaque provident eum cum ratione fugit fugiat voluptate, unde
                                    enim sed quo molestiae, excepturi adipisci repudiandae eos ipsum expedita illum,
                                    nesciunt accusantium ipsam. Necessitatibus officia atque quibusdam corrupti. ipsum
                                    dolor sit amet consectetur adipisicing elit. Temporibus aperiam molestias aliquid,
                                    aliquam enim odit quasi commodi unde tenetur, perspiciatis quam. Veniam, dignissimos
                                    soluta accusamus asperiores quo et recusandae vero dicta laborum illum, libero esse
                                    molestias harum quos sed aspernatur.
                                </p>
                            </div>



                            <h5 class="position-relative d-inline-block text-primary text-uppercase mt-3">Mission
                            </h5>



                            <div class="about_clinic">
                                <p class="p-3 bg-white" style="text-align: justify;">
                                    Lorem Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam dolor
                                    architecto corporis itaque provident eum cum ratione fugit fugiat voluptate, unde
                                    enim sed quo molestiae, excepturi adipisci repudiandae eos ipsum expedita illum,
                                    nesciunt accusantium ipsam. Necessitatibus officia atque quibusdam corrupti. ipsum
                                    dolor sit amet consectetur adipisicing elit. Temporibus aperiam molestias aliquid,
                                    aliquam enim odit quasi commodi unde tenetur, perspiciatis quam. Veniam, dignissimos
                                    soluta accusamus asperiores quo et recusandae vero dicta laborum illum, libero esse
                                    molestias harum quos sed aspernatur.
                                </p>
                            </div>





                            <h5 class="position-relative d-inline-block text-primary text-uppercase mt-3">Vision
                            </h5>



                            <div class="about_clinic">
                                <p class="p-3 bg-white" style="text-align: justify;">
                                    Lorem Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam dolor
                                    architecto corporis itaque provident eum cum ratione fugit fugiat voluptate, unde
                                    enim sed quo molestiae, excepturi adipisci repudiandae eos ipsum expedita illum,
                                    nesciunt accusantium ipsam. Necessitatibus officia atque quibusdam corrupti. ipsum
                                    dolor sit amet consectetur adipisicing elit. Temporibus aperiam molestias aliquid,
                                    aliquam enim odit quasi commodi unde tenetur, perspiciatis quam. Veniam, dignissimos
                                    soluta accusamus asperiores quo et recusandae vero dicta laborum illum, libero esse
                                    molestias harum quos sed aspernatur.
                                </p>
                            </div>



                        </div>





                    </div>
                </div>








            </div>


            <br><br><br><br><br>
        </div>
    </div>
    <!-- Tab bar End -->











    <!-- doctor view modal -->
    <div class="modal fade" id="myDoctorViewModal" tabindex="-1" aria-labelledby="myDoctorViewModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title text-primary" id="exampleModalLabel"><img src="img/doctor.png" width="40"
                            alt=""> Dr.
                        Doctor Name</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="sp"><strong>Specialization: </strong>GASTROLENTEROLOGY</p>
                    <p class="fees"><strong>Fees: </strong>₹ 900</p>


                    <div class="time">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Day</th>
                                    <th scope="col">Time</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <th scope="row">1</th>
                                    <td>Monday</td>
                                    <td>10:00 AM - 11:00 AM</td>
                                </tr>

                                <tr>
                                    <th scope="row">2</th>
                                    <td>Wednesday</td>
                                    <td>11:00 AM - 01:00 PM</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>



                    <button type="button" class="btn btn-primary w-100" data-bs-dismiss="modal">CLOSE IT</button>



                </div>
            </div>
        </div>
    </div>





    <!-- photos view modal -->
    <div class="modal fade" id="myPhotosViewModal" tabindex="-1" aria-labelledby="myPhotosViewModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <img src="img/lifeline.png" width="100%" alt="">
                </div>
            </div>
        </div>
    </div>



    <!-- inquiry send modal -->
    <div class="modal fade" id="myInquirySendModal" tabindex="-1" aria-labelledby="myInquirySendModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <h3 class="text-center mb-2 text-primary">Fill this form and get best deals from Doctorwala </h3>

                    <form>
                        <div class="row g-3">


                            <div class="col-12">
                                <label for="clinic_name" class="form-label fw-bold"><span class="text-danger"><i
                                            class="fa fa-stethoscope" aria-hidden="true"></i></span> Inquiry
                                    About</label>
                                <input type="text" class="form-control border-0 bg-light px-4" id="clinic_name"
                                    name="clinic_name" value="clinic_name" style="height: 55px;">
                            </div>


                            <div class="col-6">
                                <label for="user_name" class="form-label fw-bold"><span class="text-danger"><i
                                            class="fa fa-stethoscope" aria-hidden="true"></i></span> Your Name</label>
                                <input type="text" class="form-control border-0 bg-light px-4" value="user_name"
                                    name="user_name" id="user_name" style="height: 55px;">
                            </div>

                            <div class="col-6">
                                <label for="user_mobile" class="form-label fw-bold"><span class="text-danger"><i
                                            class="fa fa-stethoscope" aria-hidden="true"></i></span> Your Mobile</label>
                                <input type="text" class="form-control border-0 bg-light px-4" value="user_mobile"
                                    name="user_mobile" id="user_mobile" style="height: 55px;">
                            </div>

                            <div class="col-12">
                                <label for="user_email" class="form-label fw-bold"><span class="text-danger"><i
                                            class="fa fa-stethoscope" aria-hidden="true"></i></span> Your Email</label>
                                <input type="text" class="form-control border-0 bg-light px-4"
                                    value="useremail@gmail.com" name="user_email" id="user_email" style="height: 55px;">
                            </div>


                            <div class="col-12">
                                <label for="user_inquiry" class="form-label fw-bold"><span class="text-danger"><i
                                            class="fa fa-stethoscope" aria-hidden="true"></i></span> Your
                                    Inquiry</label>
                                <textarea class="form-control border-0 bg-light px-4 py-3" rows="5"
                                    placeholder="Message" name="user_inquiry" id="user_inquiry"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Inquiry</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
























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
    <!-- <script src="js/captcha.js"></script> -->
    <script src="{{asset('../js/password-update-captcha.js')}}"></script>
    <script src="js/password-update-captcha.js"></script>
</body>

</html>