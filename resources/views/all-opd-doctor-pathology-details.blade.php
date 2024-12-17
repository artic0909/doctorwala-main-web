<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Details | Doctorwala</title>
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
    <link href="{{asset('../css/all-opd-pathology-doctor-details.css')}}" rel="stylesheet">
    <link href="{{asset('../responsive/index_responsive.css')}}" rel="stylesheet">
    <link href="{{asset('../responsive/service_responsive.css')}}" rel="stylesheet">
    <link href="{{asset('../responsive/allopdpathdoc_responsive.css')}}" rel="stylesheet">


    <style>
        .a-not {
            color: #6b6a75;

            &:hover {
                color: red;
            }
        }

        .btn-primaryy {
            background: linear-gradient(135deg, #3bc7fe, #006eff);
            color: white;
            border: none;
            transition: all 100ms ease-in;

            &:hover {
                color: white;
                scale: 1.05;
            }
        }

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
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Search</a>
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
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Search</a>
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







    @auth
    <!-- User Profile & Password Edit Modal -->
    <div class="modal fade" id="userProfileModal" tabindex="-1" aria-labelledby="userProfileModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body position-relative">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>



                    <form class="text-center" method="POST" action="{{ route('user.profile.update') }}">
                        @csrf
                        <h4 class="modal-title" id="userProfileModalLabel">User Profile</h4>
                        <p class="mb-4">Update your profile details</p>
                        <div class="row">


                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="user_name" name="user_name"
                                        value="{{ $user->user_name }}">
                                    <label for="user_name">Name</label>
                                </div>
                            </div>



                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="user_email" name="user_email"
                                        value="{{ $user->user_email }}">
                                    <label for="user_email">Email</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="user_mobile" name="user_mobile"
                                        value="{{ $user->user_mobile }}">
                                    <label for="user_mobile">Mobile</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="user_city" name="user_city"
                                        value="{{ $user->user_city }}">
                                    <label for="user_city">City</label>
                                </div>
                            </div>



                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <button type="submit" class="btn btn-primary py-3 col-md-12">Update Profile</button>
                                </div>
                            </div>



                        </div>
                    </form>



                    <form class="text-center form password-update" method="POST" action="{{ route('user.password.update') }}">
                        @csrf
                        <h4 class="modal-title" id="userProfileModalLabel">Security Privacy</h4>
                        <p class="mb-4">Update your account password</p>
                        <div class="row">


                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="user_old_password"
                                        value="*************">
                                    <label for="user_old_password">Existing Password</label>
                                </div>
                            </div>



                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="user_password"
                                        name="user_password" placeholder="New Password">
                                    <label for="user_password">New Password</label>
                                </div>
                            </div>



                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
                                    <label for="user_password">Confirm Password</label>
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






                </div>

            </div>
        </div>
    </div>
    @endauth







    <!-- profile update success modal start -->
    <div class="modal fade" id="profileUpdateSuccessModal" tabindex="-1" aria-labelledby="profileUpdateSuccessModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body d-flex flex-column align-middle justify-center align-items-center">
                    <h2 class="modal-title" id="profileUpdateSuccessModalLabel"><span class="text-primary">+</span> SUCCESS <span class="text-primary">+</span></h2>
                    <h2 class="text-primary">Profile Updated Successfully</h2>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn p-2 btn-primary w-100" data-bs-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
    <!-- profile update success modal end -->

    <!-- profile update Unsuccess modal start -->
    <div class="modal fade" id="profileUpdateUnsuccessModal" tabindex="-1" aria-labelledby="profileUpdateUnsuccessModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body d-flex flex-column align-middle justify-center align-items-center">
                    <h3 class="modal-title" id="profileUpdateSuccessModalLabel"><span class="text-primary">+</span> ERROR <span class="text-primary">+</span></h3>
                    <h4 class="text-danger">Profile Is Not Updated</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn p-2 btn-primary w-100" data-bs-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
    <!-- profile update Unsuccess modal end -->


    <!-- password update success modal start -->
    <div class="modal fade" id="passwordUpdateSuccessModal" tabindex="-1" aria-labelledby="passwordUpdateSuccessModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body d-flex flex-column align-middle justify-center align-items-center">
                    <h3 class="modal-title" id="profileUpdateSuccessModalLabel"><span class="text-primary">+</span> SUCCESS <span class="text-primary">+</span></h3>
                    <h4 class="text-primary">Password Updated Successfully</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn p-2 btn-primary w-100" data-bs-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
    <!-- password update success modal end -->

    <!-- password update Unsuccess modal start -->
    <div class="modal fade" id="passwordUpdateUnsuccessModal" tabindex="-1" aria-labelledby="passwordUpdateUnsuccessModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body d-flex flex-column align-middle justify-center align-items-center">
                    <h3 class="modal-title" id="profileUpdateSuccessModalLabel"><span class="text-primary">+</span> ERROR <span class="text-primary">+</span></h3>
                    <h4 class="text-danger">Password Is Not Updated</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn p-2 btn-primary w-100" data-bs-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
    <!-- password update Unsuccess modal end -->






    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">{{$opd->clinic_name}}</h1>
                <a href="/dw" class="h4 text-white" style="text-decoration: underline;">Home</a>
                <i class="fa fa-plus text-dark px-2" style="font-size: 2rem; font-weight: 700;"></i>
                <a href="#" class="h4 text-white">Details</a>
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
                            @if($opd->banner && $opd->banner->opdbanner)
                            <img class="img-fluid rounded-top w-100" src="{{ asset('storage/' . $opd->banner->opdbanner) }}" alt="">
                            @else
                            <img src="https://media.istockphoto.com/id/1222357475/vector/image-preview-icon-picture-placeholder-for-website-or-ui-ux-design-vector-illustration.jpg?s=612x612&w=0&k=20&c=KuCo-dRBYV7nz2gbk4J9w1WtTAgpTdznHu55W9FjimE=" class="card-img-top" alt="Default Image">
                            @endif
                            <div
                                class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                <img src="{{asset('img/logo.png')}}" width="80" alt="">
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
                        <h2 class="display-6 mb-4">{{$opd->clinic_name}}</h2>


                        <div class="d-details">
                            <p class="location_d d-texts">
                                <strong><i class="fa fa-map-marker-alt me-2"></i>Address: {{$opd->clinic_address}}</strong>
                            </p>

                            <p class="landmark_d d-texts">
                                <strong><i class="fa fa-map-marker-alt me-2"></i>Landmark: {{$opd->clinic_landmark}}</strong>
                            </p>

                            <p class="contact_d d-texts">
                                <strong><i class="fa fa-phone me-2"></i>Phone: +91-<a href="mailto:{{$opd->clinic_mobile_number}}" class="a-not">{{$opd->clinic_mobile_number}}</a></strong>
                            </p>

                            <p class="email_d d-texts">
                                <strong><i class="fa fa-envelope me-2"></i>Email: <a href="mailto:{{$opd->clinic_email}}" class="a-not">{{$opd->clinic_email}}</a></strong>
                            </p>


                            <p class="contact_person_d d-texts">
                                <strong><i class="fa fa-user me-2"></i>Contact Person: {{$opd->clinic_contact_person_name}}</strong>
                            </p>


                            <p class="ratings d-flex d-texts gap-3 mt-3 align-items-center flex-wrap"
                                style="list-style-type: none;">
                                <span><strong><i class="fa-solid fa-star me-2"></i>Rating :</strong></span>
                                <a href="" class="rating-a"><img src="{{asset('img/1.png')}}" width="35" alt=""></a>
                                <a href="" class="rating-a"><img src="{{asset('img/2.png')}}" width="35" alt=""></a>
                                <a href="" class="rating-a"><img src="{{asset('img/3.png')}}" width="35" alt=""></a>
                                <a href="" class="rating-a"><img src="{{asset('img/5.png')}}" width="35" alt=""></a>
                                <a href="" class="rating-a"><img src="{{asset('img/4.png')}}" width="35" alt=""></a>
                            </p>

                        </div>







                        <div class="d-buttons">
                            <a href="" data-bs-toggle="modal" data-bs-target="#myInquirySendModal"
                                class="btn btn-dark btn-darkk py-md-3 px-md-5 me-3 mb-2 animated slideInLeft">Send
                                Inquiry</a>

                            <a href="{{$opd->clinic_google_map_link}}" class="btn btn-secondary py-md-3 px-md-5 me-3 mb-2 animated slideInRight">See
                                Location</a>

                            <a href="" data-bs-toggle="modal" data-bs-target="#myFeedBackModal"
                                class="btn btn-primary py-md-3 px-md-5 mb-2 animated slideInRight">Feedback</a>
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





                <!-- Nav tabs -->
                <div class="col-md-12 bg-primaryy p-3 mb-5 my-tab-lists">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-tabs-justified d-flex justify-content-between TABLIST row" id="myTab"
                        role="tablist" style="border: none;">
                        <li class="nav-item col-md-2 text-center">
                            <a class="nav-link text-dark bg-white active" id="opd-tab" data-toggle="tab" href="#opd"
                                role="tab" aria-controls="opd" aria-selected="true" style="font-weight: 900;">OPD</a>
                        </li>

                        <li class="nav-item col-md-2 text-center">
                            <a class="nav-link text-dark bg-white" id="pathology-tab" data-toggle="tab"
                                href="#pathology" role="tab" aria-controls="pathology" aria-selected="false"
                                style="font-weight: 900;">Pathology</a>
                        </li>



                        <li class="nav-item col-md-2 text-center">
                            <a class="nav-link text-dark bg-white" id="service-tab" data-toggle="tab" href="#service"
                                role="tab" aria-controls="service" aria-selected="false"
                                style="font-weight: 900;">Service
                                Lists</a>
                        </li>

                        <li class="nav-item col-md-2 text-center">
                            <a class="nav-link text-dark bg-white" id="photos-tab" data-toggle="tab" href="#photos"
                                role="tab" aria-controls="photos" aria-selected="false"
                                style="font-weight: 900;">Photos</a>
                        </li>

                        <li class="nav-item col-md-2 text-center">
                            <a class="nav-link text-dark bg-white" id="about-tab" data-toggle="tab" href="#about"
                                role="tab" aria-controls="about" aria-selected="false"
                                style="font-weight: 900;">About</a>
                        </li>
                    </ul>

                </div>






                <!-- Tab panes for OPD -->
                <div class="tab-content p-0" id="myTabContent">



                    <!-- OPD Tab -->
                    <div class="tab-pane fade show active" id="opd" role="tabpanel" aria-labelledby="opd-tab">




                        <div class="section-title bg-light rounded h-100 p-5">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">opd details</h5>



                            <div class="pricing pricing-palden">

                                @foreach($doctors as $doctor)
                                <div class="pricing-item features-item ja-animate mx-4"
                                    data-animation="move-from-bottom" data-delay="item-0" style="min-height: 497px;">
                                    <div class="pricing-deco">
                                        <svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px"
                                            id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100"
                                            width="300px" x="0px" xml:space="preserve" y="0px">
                                            <path class="deco-layer deco-layer--1"
                                                d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z"
                                                fill="#FFFFFF" opacity="0.6"></path>
                                            <path class="deco-layer deco-layer--2"
                                                d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z"
                                                fill="#FFFFFF" opacity="0.6"></path>
                                            <path class="deco-layer deco-layer--3"
                                                d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716H42.401L43.415,98.342z"
                                                fill="#FFFFFF" opacity="0.7"></path>
                                            <path class="deco-layer deco-layer--4"
                                                d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z"
                                                fill="#FFFFFF"></path>
                                        </svg>


                                        <div class="pricing-price">
                                            <img src="img/doctor.png" width="80" alt=""
                                                style="filter: drop-shadow(1px 1px 1px rgba(0, 0, 0, 0.411));">
                                        </div>
                                        <h3 class="pricing-title">{{$doctor->doctor_name}}</h3>
                                    </div>
                                    <p>
                                    <ul class="list-group list-group-flush text-start" style="margin-top: -60px;">
                                        <li class="list-group-item"><strong style="text-transform: capitalize;">Designation : {{$doctor->doctor_designation}}</strong></li>
                                        <li class="list-group-item"><strong style="text-transform: capitalize;">Specialist : {{$doctor->doctor_specialist}}</strong></li>
                                        <li class="list-group-item"><strong>Fees : ₹ {{$doctor->doctor_fees}}</strong></li>
                                    </ul>
                                    </p>
                                    <div class="p-4">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#myOPDViewModal{{$doctor->id}}"
                                            class="btn btn-primaryy w-100">View Details</a>
                                    </div>
                                </div>
                                @endforeach

                            </div>


                        </div>

                    </div>



                </div>








                <!-- Tab panes for Pathology -->
                <div class="tab-content p-0 mt-4" id="myTabContent">



                    <!-- Pathology Tab -->
                    <div class="tab-pane fade show active" id="pathology" role="tabpanel"
                        aria-labelledby="pathology-tab">




                        <div class="section-title bg-light rounded h-100 p-5">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">pathology details
                            </h5>



                            <div class="pricing pricing-palden">



                                <div class="pricing-item features-item ja-animate mx-4"
                                    data-animation="move-from-bottom" data-delay="item-0" style="min-height: 297px;">
                                    <div class="pricing-deco">
                                        <svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px"
                                            id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100"
                                            width="300px" x="0px" xml:space="preserve" y="0px">
                                            <path class="deco-layer deco-layer--1"
                                                d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z"
                                                fill="#FFFFFF" opacity="0.6"></path>
                                            <path class="deco-layer deco-layer--2"
                                                d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z"
                                                fill="#FFFFFF" opacity="0.6"></path>
                                            <path class="deco-layer deco-layer--3"
                                                d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716H42.401L43.415,98.342z"
                                                fill="#FFFFFF" opacity="0.7"></path>
                                            <path class="deco-layer deco-layer--4"
                                                d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z"
                                                fill="#FFFFFF"></path>
                                        </svg>


                                        <div class="pricing-price">
                                            <img src="img/path.png" width="80" alt=""
                                                style="filter: drop-shadow(1px 1px 1px rgba(0, 0, 0, 0.411));">
                                        </div>
                                        <h3 class="pricing-title">Test Name</h3>
                                    </div>
                                    <p>
                                    <ul class="list-group list-group-flush text-start" style="margin-top: -60px;">
                                        <li class="list-group-item" style="text-transform: capitalize;"><strong>Test
                                                Type : Blood Test</strong></li>
                                        <li class="list-group-item" style="text-transform: capitalize;"><strong>Clinic
                                                Name : Clinic XYZ</strong></li>
                                    </ul>
                                    </p>
                                    <div class="p-4">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#myPathologyViewModal"
                                            class="btn btn-primaryy w-100">View Days</a>
                                    </div>
                                </div>



                                <div class="pricing-item features-item ja-animate mx-4"
                                    data-animation="move-from-bottom" data-delay="item-0" style="min-height: 297px;">
                                    <div class="pricing-deco">
                                        <svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px"
                                            id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100"
                                            width="300px" x="0px" xml:space="preserve" y="0px">
                                            <path class="deco-layer deco-layer--1"
                                                d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z"
                                                fill="#FFFFFF" opacity="0.6"></path>
                                            <path class="deco-layer deco-layer--2"
                                                d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z"
                                                fill="#FFFFFF" opacity="0.6"></path>
                                            <path class="deco-layer deco-layer--3"
                                                d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716H42.401L43.415,98.342z"
                                                fill="#FFFFFF" opacity="0.7"></path>
                                            <path class="deco-layer deco-layer--4"
                                                d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z"
                                                fill="#FFFFFF"></path>
                                        </svg>


                                        <div class="pricing-price">
                                            <img src="img/path.png" width="80" alt=""
                                                style="filter: drop-shadow(1px 1px 1px rgba(0, 0, 0, 0.411));">
                                        </div>
                                        <h3 class="pricing-title">Test Name</h3>
                                    </div>
                                    <p>
                                    <ul class="list-group list-group-flush text-start" style="margin-top: -60px;">
                                        <li class="list-group-item" style="text-transform: capitalize;"><strong>Test
                                                Type : Blood Test</strong></li>
                                        <li class="list-group-item" style="text-transform: capitalize;"><strong>Clinic
                                                Name : Clinic XYZ</strong></li>
                                    </ul>
                                    </p>
                                    <div class="p-4">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#myPathologyViewModal"
                                            class="btn btn-primaryy w-100">View Days</a>
                                    </div>
                                </div>





                                <div class="pricing-item features-item ja-animate mx-4"
                                    data-animation="move-from-bottom" data-delay="item-0" style="min-height: 297px;">
                                    <div class="pricing-deco">
                                        <svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px"
                                            id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100"
                                            width="300px" x="0px" xml:space="preserve" y="0px">
                                            <path class="deco-layer deco-layer--1"
                                                d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z"
                                                fill="#FFFFFF" opacity="0.6"></path>
                                            <path class="deco-layer deco-layer--2"
                                                d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z"
                                                fill="#FFFFFF" opacity="0.6"></path>
                                            <path class="deco-layer deco-layer--3"
                                                d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716H42.401L43.415,98.342z"
                                                fill="#FFFFFF" opacity="0.7"></path>
                                            <path class="deco-layer deco-layer--4"
                                                d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z"
                                                fill="#FFFFFF"></path>
                                        </svg>


                                        <div class="pricing-price">
                                            <img src="img/path.png" width="80" alt=""
                                                style="filter: drop-shadow(1px 1px 1px rgba(0, 0, 0, 0.411));">
                                        </div>
                                        <h3 class="pricing-title">Test Name</h3>
                                    </div>
                                    <p>
                                    <ul class="list-group list-group-flush text-start" style="margin-top: -60px;">
                                        <li class="list-group-item" style="text-transform: capitalize;"><strong>Test
                                                Type : Blood Test</strong></li>
                                        <li class="list-group-item" style="text-transform: capitalize;"><strong>Clinic
                                                Name : Clinic XYZ</strong></li>
                                    </ul>
                                    </p>
                                    <div class="p-4">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#myPathologyViewModal"
                                            class="btn btn-primaryy w-100">View Days</a>
                                    </div>
                                </div>





                                <div class="pricing-item features-item ja-animate mx-4"
                                    data-animation="move-from-bottom" data-delay="item-0" style="min-height: 297px;">
                                    <div class="pricing-deco">
                                        <svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px"
                                            id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100"
                                            width="300px" x="0px" xml:space="preserve" y="0px">
                                            <path class="deco-layer deco-layer--1"
                                                d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z"
                                                fill="#FFFFFF" opacity="0.6"></path>
                                            <path class="deco-layer deco-layer--2"
                                                d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z"
                                                fill="#FFFFFF" opacity="0.6"></path>
                                            <path class="deco-layer deco-layer--3"
                                                d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716H42.401L43.415,98.342z"
                                                fill="#FFFFFF" opacity="0.7"></path>
                                            <path class="deco-layer deco-layer--4"
                                                d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z"
                                                fill="#FFFFFF"></path>
                                        </svg>


                                        <div class="pricing-price">
                                            <img src="img/path.png" width="80" alt=""
                                                style="filter: drop-shadow(1px 1px 1px rgba(0, 0, 0, 0.411));">
                                        </div>
                                        <h3 class="pricing-title">Test Name</h3>
                                    </div>
                                    <p>
                                    <ul class="list-group list-group-flush text-start" style="margin-top: -60px;">
                                        <li class="list-group-item" style="text-transform: capitalize;"><strong>Test
                                                Type : Blood Test</strong></li>
                                        <li class="list-group-item" style="text-transform: capitalize;"><strong>Clinic
                                                Name : Clinic XYZ</strong></li>
                                    </ul>
                                    </p>
                                    <div class="p-4">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#myPathologyViewModal"
                                            class="btn btn-primaryy w-100">View Days</a>
                                    </div>
                                </div>





                                <div class="pricing-item features-item ja-animate mx-4"
                                    data-animation="move-from-bottom" data-delay="item-0" style="min-height: 297px;">
                                    <div class="pricing-deco">
                                        <svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px"
                                            id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100"
                                            width="300px" x="0px" xml:space="preserve" y="0px">
                                            <path class="deco-layer deco-layer--1"
                                                d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z"
                                                fill="#FFFFFF" opacity="0.6"></path>
                                            <path class="deco-layer deco-layer--2"
                                                d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z"
                                                fill="#FFFFFF" opacity="0.6"></path>
                                            <path class="deco-layer deco-layer--3"
                                                d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716H42.401L43.415,98.342z"
                                                fill="#FFFFFF" opacity="0.7"></path>
                                            <path class="deco-layer deco-layer--4"
                                                d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z"
                                                fill="#FFFFFF"></path>
                                        </svg>


                                        <div class="pricing-price">
                                            <img src="img/path.png" width="80" alt=""
                                                style="filter: drop-shadow(1px 1px 1px rgba(0, 0, 0, 0.411));">
                                        </div>
                                        <h3 class="pricing-title">Test Name</h3>
                                    </div>
                                    <p>
                                    <ul class="list-group list-group-flush text-start" style="margin-top: -60px;">
                                        <li class="list-group-item" style="text-transform: capitalize;"><strong>Test
                                                Type : Blood Test</strong></li>
                                        <li class="list-group-item" style="text-transform: capitalize;"><strong>Clinic
                                                Name : Clinic XYZ</strong></li>
                                    </ul>
                                    </p>
                                    <div class="p-4">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#myPathologyViewModal"
                                            class="btn btn-primaryy w-100">View Days</a>
                                    </div>
                                </div>




                                <div class="pricing-item features-item ja-animate mx-4"
                                    data-animation="move-from-bottom" data-delay="item-0" style="min-height: 297px;">
                                    <div class="pricing-deco">
                                        <svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px"
                                            id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100"
                                            width="300px" x="0px" xml:space="preserve" y="0px">
                                            <path class="deco-layer deco-layer--1"
                                                d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z"
                                                fill="#FFFFFF" opacity="0.6"></path>
                                            <path class="deco-layer deco-layer--2"
                                                d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z"
                                                fill="#FFFFFF" opacity="0.6"></path>
                                            <path class="deco-layer deco-layer--3"
                                                d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716H42.401L43.415,98.342z"
                                                fill="#FFFFFF" opacity="0.7"></path>
                                            <path class="deco-layer deco-layer--4"
                                                d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z"
                                                fill="#FFFFFF"></path>
                                        </svg>


                                        <div class="pricing-price">
                                            <img src="img/path.png" width="80" alt=""
                                                style="filter: drop-shadow(1px 1px 1px rgba(0, 0, 0, 0.411));">
                                        </div>
                                        <h3 class="pricing-title">Test Name</h3>
                                    </div>
                                    <p>
                                    <ul class="list-group list-group-flush text-start" style="margin-top: -60px;">
                                        <li class="list-group-item" style="text-transform: capitalize;"><strong>Test
                                                Type : Blood Test</strong></li>
                                        <li class="list-group-item" style="text-transform: capitalize;"><strong>Clinic
                                                Name : Clinic XYZ</strong></li>
                                    </ul>
                                    </p>
                                    <div class="p-4">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#myPathologyViewModal"
                                            class="btn btn-primaryy w-100">View Days</a>
                                    </div>
                                </div>



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











    <!-- opd view modal -->
    @foreach($doctors as $doctor)
    <div class="modal fade" id="myOPDViewModal{{$doctor->id}}" tabindex="-1" aria-labelledby="myOPDViewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title text-primary" id="exampleModalLabel"><img src="img/doctor.png" width="40"
                            alt="" style="text-transform: capitalize;"> {{$doctor->doctor_name}}</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="color:#051225;">
                    <p class="sp" style="text-transform: capitalize;"><strong>Specialization: </strong>{{$doctor->doctor_specialist}}</p>
                    <p class="fees"><strong>Fees: </strong>₹ {{$doctor->doctor_fees}}</p>


                    <div class="time">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Day</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($doctor->visit_day_time) && is_array($doctor->visit_day_time))
                                @foreach($doctor->visit_day_time as $visit)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{ $visit['day'] }}</td>
                                    <td>
                                        @if(!empty($visit['start_time']) && !empty($visit['end_time']))
                                        {{ \Carbon\Carbon::parse($visit['start_time'])->format('h:i A') }} - {{ \Carbon\Carbon::parse($visit['end_time'])->format('h:i A') }}
                                        @else
                                        No time available
                                        @endif
                                    </td>

                                    <td>
                                        @if($doctor->status == 'Available')
                                        <span class="badge bg-success">{{ $doctor->status }}</span>
                                        @elseif($doctor->status == 'Unavailable')
                                        <span class="badge bg-danger">{{ $doctor->status }}</span>
                                        @else
                                        <span class="badge bg-secondary">{{ $doctor->status }}</span> <!-- Default for other statuses -->
                                        @endif
                                    </td>

                                </tr>

                                @endforeach
                                @else
                                <tr class="text-muted">
                                    <td colspan="3">No data found</td>
                                </tr>
                                @endif


                            </tbody>
                        </table>
                    </div>



                    <button type="button" class="btn btn-primaryy w-100" data-bs-dismiss="modal">Close It</button>



                </div>
            </div>
        </div>
    </div>
    @endforeach



    <!-- pathology view modal -->
    <div class="modal fade" id="myPathologyViewModal" tabindex="-1" aria-labelledby="myPathologyViewModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title text-primary" id="exampleModalLabel"><img src="img/path.png" width="40"
                            alt=""> Test Name
                    </h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="color: #051225;">

                    <p class="sp" style="margin: 0;"><strong>Clinic Name: </strong>Clinic XYZ</p>
                    <p class="sp mt-2" style="margin: 0;"><strong>Test Type: </strong>Blood Test</p>


                    <div class="time mt-2">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Day</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <th scope="row">1</th>
                                    <td>Monday</td>
                                    <td>10:00 AM - 11:00 AM</td>
                                    <td>₹ 1000</td>
                                </tr>

                                <tr>
                                    <th scope="row">2</th>
                                    <td>Wednesday</td>
                                    <td>11:00 AM - 01:00 PM</td>
                                    <td>₹ 900</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>



                    <button type="button" class="btn btn-primaryy w-100" data-bs-dismiss="modal">Close It</button>



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



    <!-- feedback send modal -->
    <div class="modal fade" id="myFeedBackModal" tabindex="-1" aria-labelledby="myFeedBackModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <h3 class="text-center mb-2 text-primary">Give Your Valuable Feedback </h3>

                    <form class="mt-3">
                        <div class="row g-3">

                            <div class="col-12">
                                <label for="user_feedback" class="form-label fw-bold"><span class="text-danger"><i
                                            class="fa fa-stethoscope" aria-hidden="true"></i></span> Your
                                    Feedback</label>
                                <textarea class="form-control border-0 bg-light px-4 py-3" rows="5"
                                    placeholder="Feedback" name="user_feedback" id="user_feedback"></textarea>
                            </div>


                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Feedback</button>
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
</body>

</html>