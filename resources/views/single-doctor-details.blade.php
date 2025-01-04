<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- <title>Doctor Details | Doctorwala</title> -->
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <title>Dr. {{$doc->partner_doctor_name}} - {{$doc->partner_doctor_designation}} | Specialist in {{$doc->partner_doctor_specialist}} | Doctorwala</title>

    <!-- Meta Description -->
    <meta name="description" content="Learn more about Dr. {{$doc->partner_doctor_name}}, a {{$doc->partner_doctor_designation}} specializing in {{$doc->partner_doctor_specialist}}. Consultation fees: ₹{{$doc->partner_doctor_fees}}. Check availability and schedule an appointment.">

    <!-- Keywords -->
    <meta name="keywords" content="Dr. {{$doc->partner_doctor_name}}, {{$doc->partner_doctor_specialist}}, {{$doc->partner_doctor_designation}}, Doctor Details, Appointment, Fees, Availability">

    <!-- Author -->
    <meta name="author" content="Your Clinic Name">

    <!-- Open Graph Tags -->
    <meta property="og:title" content="Dr. {{$doc->partner_doctor_name}} - {{$doc->partner_doctor_designation}}">
    <meta property="og:description" content="Get detailed information about Dr. {{$doc->partner_doctor_name}}, a {{$doc->partner_doctor_designation}} specializing in {{$doc->partner_doctor_specialist}}. Book your appointment now.">
    <meta property="og:image" content="{{ asset('img/doctor.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="profile">

    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Dr. {{$doc->partner_doctor_name}} - {{$doc->partner_doctor_designation}}">
    <meta name="twitter:description" content="Learn about Dr. {{$doc->partner_doctor_name}}, a {{$doc->partner_doctor_specialist}}. Book your consultation today.">
    <meta name="twitter:image" content="{{ asset('img/doctor.png') }}">

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

        .txt-cap {
            text-transform: capitalize !important;
        }

        .rating-a.selected img {
            scale: 1.1;
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
                        <!-- <a href="/coupons" class="dropdown-item">Coupon Details </a> -->
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
                        <!-- <a href="/dw/coupons" class="dropdown-item">Coupon Details </a> -->
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
                <h1 class="display-3 text-white animated zoomIn txt-cap">{{$doc->partner_doctor_name}}</h1>
                <a href="/dw" class="h4 text-white" style="text-decoration: underline;">Home</a>
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
                            @if($doc->banner && $doc->banner->doctorbanner)
                            <img class="img-fluid rounded-top w-100" src="{{ asset('storage/' . $doc->banner->doctorbanner) }}" alt="">
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
                        <h2 class="display-6 mb-4 txt-cap" style="font-size: 1.8rem;">
                            <p class="m-0">{{$doc->partner_doctor_name}}</p>
                            <p class="m-0">Specialist: {{$doc->partner_doctor_specialist}}</p>
                        </h2>


                        <div class="d-details">
                            <p class="location_d d-texts txt-cap">
                                <strong><i class="fa fa-map-marker-alt me-2"></i>Address: {{$doc->partner_doctor_address}}</strong>
                            </p>

                            <p class="landmark_d d-texts txt-cap">
                                <strong><i class="fa fa-map-pin me-2"></i>Landmark: {{$doc->partner_doctor_landmark}}</strong>
                            </p>

                            <p class="landmark_d d-texts txt-cap">
                                <strong><i class="fa fa-globe me-2"></i>State/City: {{$doc->partner_doctor_state}}-{{$doc->partner_doctor_city}}</strong>
                            </p>

                            <p class="contact_d d-texts">
                                <strong><i class="fa fa-phone me-2"></i>Phone: +91-{{$doc->partner_doctor_mobile}}</strong>
                            </p>

                            <p class="email_d d-texts">
                                <strong><i class="fa fa-envelope me-2"></i>Email: {{$doc->partner_doctor_email}}</strong>
                            </p>


                            <p class="contact_person_d d-texts txt-cap">
                                <strong><i class="fa fa-user me-2"></i>Doctor Name: {{$doc->partner_doctor_name}}</strong>
                            </p>

                        </div>







                        <div class="d-buttons mt-5">
                            <a href="" data-bs-toggle="modal" data-bs-target="#myInquirySendModal{{$doc->id}}"
                                class="btn btn-dark btn-darkk py-md-3 px-md-5 me-3 mb-2 animated slideInLeft">Send
                                Inquiry</a>

                            <a href="{{$doc->partner_doctor_google_map_link}}" target="_blank" class="btn btn-secondary py-md-3 px-md-5 me-3 mb-2 animated slideInRight">See
                                Location</a>

                            <a href="" data-bs-toggle="modal" data-bs-target="#myDoctorViewModal{{$doc->id}}"
                                class="btn btn-primary py-md-3 px-md-5 me-3 mb-2 animated slideInRight">Day & Time</a>


                            <a href="" data-bs-toggle="modal" data-bs-target="#myFeedBackModal{{$doc->id}}"
                                class="btn btn-secondary py-md-3 px-md-5 mb-2 animated slideInRight"><i class="fa fa-star" aria-hidden="true"></i></a>
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



                    <!-- Photos Tab -->
                    <div class="tab-pane fade show active" id="photos" role="tabpanel" aria-labelledby="photos-tab">




                        <div class="section-title bg-light rounded h-100 p-5">
                            <h5 class="position-relative d-inline-block text-dark text-uppercase">Photos
                            </h5>



                            <div
                                class="clinic_photos mt-4 d-flex gap-4 flex-wrap justify-content-start align-items-center">

                                @if($photos->isEmpty())
                                <div class="alert alert-primary w-100 mt-2 text-center mx-4">
                                    No photos found. Please try again later.
                                </div>
                                @else
                                @foreach($photos as $photo)
                                @php

                                $decodedImages = is_string($photo->images) ? json_decode($photo->images, true) : $photo->images;
                                @endphp

                                @if(!empty($decodedImages) && is_array($decodedImages))
                                @foreach($decodedImages as $key => $item)
                                <!-- Trigger for Modal -->
                                <a href="#" data-bs-toggle="modal" data-bs-target="#photoModal{{ $photo->id }}{{ $key }}">
                                    <img src="{{ asset('storage/' . $item) }}" width="160" alt="Photo">
                                </a>

                                <!-- Dynamic Modal -->
                                <div class="modal fade" id="photoModal{{ $photo->id }}{{ $key }}" tabindex="-1"
                                    aria-labelledby="photoModalLabel{{ $photo->id }}{{ $key }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="photoModalLabel{{ $photo->id }}{{ $key }}">
                                                    Photo View
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{{ asset('storage/' . $item) }}" width="100%" alt="Photo">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @else
                                <p>No images available for this entry.</p>
                                @endif
                                @endforeach
                                @endif



                            </div>




                        </div>



                    </div>
                </div>



                <!-- Tab panes for Service Lists -->
                <div class="tab-content p-0 mt-4" id="myTabContent">



                    <!-- Service Tab -->
                    <div class="tab-pane fade show active" id="service" role="tabpanel" aria-labelledby="service-tab">




                        <div class="section-title bg-light rounded h-100 p-5">
                            <h5 class="position-relative d-inline-block text-dark text-uppercase">Service Lists
                            </h5>



                            <ul class="service-lists" style="list-style: number;">


                                @if($services->isEmpty())
                                <div class="alert alert-primary w-100 mt-2 text-center mx-4">
                                    No Service Lists found. Please try again later.
                                </div>
                                @else
                                @foreach($services as $service)
                                @if(!empty($service->service_lists) && is_array($service->service_lists))
                                @foreach($service->service_lists as $list)
                                <li>
                                    <p class="fs-8 fw-bold"><i class="fa fa-stethoscope"></i>
                                        <span class="text-primary text-capitalize">{{ $list }}</span>
                                    </p>
                                </li>
                                @endforeach
                                @else
                                <li>
                                    <p class="fs-8 fw-bold text-muted">No services available for this entry.</p>
                                </li>
                                @endif
                                @endforeach
                                @endif



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

                            @if($aboutClinics->isEmpty())

                            <div class="alert alert-primary w-100 mt-2 text-center mx-4">
                                No About Details found. Please try again later.
                            </div>

                            @else

                            @foreach($aboutClinics as $ac)
                            <div class="about_clinic">
                                <p class="p-3 bg-white" style="text-align: justify;">
                                    {{$ac->about_details}}
                                </p>
                            </div>



                            <h5 class="position-relative d-inline-block text-primary text-uppercase mt-3">Mission
                            </h5>



                            <div class="about_clinic">
                                <p class="p-3 bg-white" style="text-align: justify;">
                                    {{$ac->mission_details}}
                                </p>
                            </div>





                            <h5 class="position-relative d-inline-block text-primary text-uppercase mt-3">Vision
                            </h5>



                            <div class="about_clinic">
                                <p class="p-3 bg-white" style="text-align: justify;">
                                    {{$ac->vision_details}}
                                </p>
                            </div>
                            @endforeach
                            @endif


                        </div>





                    </div>
                </div>








            </div>


            <br><br><br><br><br>
        </div>
    </div>
    <!-- Tab bar End -->











    <!-- doctor view modal -->
    <div class="modal fade" id="myDoctorViewModal{{$doc->id}}" tabindex="-1" aria-labelledby="myDoctorViewModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title text-primary txt-cap" id="exampleModalLabel"><img src="{{ asset('img/doctor.png') }}" width="40"
                            alt=""> {{$doc->partner_doctor_designation}} {{$doc->partner_doctor_name}}</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="sp txt-cap"><strong class="d-flex align-items-center gap-2"><img src="{{asset('img/surgeon.png')}}" alt="" width="27"> Specialization: {{$doc->partner_doctor_specialist}}</strong></p>
                    <p class="fees"><strong class="d-flex align-items-center gap-2"><img src="{{asset('img/pay.png')}}" alt="" width="27"> Fees: ₹ {{$doc->partner_doctor_fees}}</strong></p>


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
                                @if(!empty($doc->visit_day_time) && is_array($doc->visit_day_time))
                                @foreach($doc->visit_day_time as $index => $visit)
                                <tr>
                                    <!-- Row number -->
                                    <th scope="row">{{ $index + 1 }}</th>

                                    <!-- Day -->
                                    <td>{{ $visit['day'] ?? 'N/A' }}</td>

                                    <!-- Start and End Time -->
                                    <td>
                                        @if(!empty($visit['start_time']) && !empty($visit['end_time']))
                                        {{ \Carbon\Carbon::parse($visit['start_time'])->format('h:i A') }} - {{ \Carbon\Carbon::parse($visit['end_time'])->format('h:i A') }}
                                        @else
                                        No time available
                                        @endif
                                    </td>

                                    <!-- Status -->
                                    <td>
                                        @if($doc->status == 'Available')
                                        <span class="badge bg-success">{{ $doc->status }}</span>
                                        @elseif($doc->status == 'Unavailable')
                                        <span class="badge bg-danger">{{ $doc->status }}</span>
                                        @else
                                        <span class="badge bg-secondary">{{ $doc->status }}</span> <!-- Default for other statuses -->
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <!-- No data found -->
                                <tr class="text-muted">
                                    <td colspan="4">No data found</td>
                                </tr>
                                @endif
                            </tbody>


                        </table>
                    </div>



                    <button type="button" class="btn btn-primary w-100" data-bs-dismiss="modal">CLOSE IT</button>



                </div>
            </div>
        </div>
    </div>



    <!-- inquiry send modal -->
    <div class="modal fade" id="myInquirySendModal{{$doc->id}}" tabindex="-1" aria-labelledby="myInquirySendModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <h3 class="text-center mb-2 text-primary">Fill this form and get best deals from Doctorwala </h3>

                    <form action="{{route('dw.doctor.inquiry.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row g-3">


                            <div class="col-12" style="display: none;">
                                <label for="currently_loggedin_partner_id" class="form-label fw-bold"><span class="text-danger"><i
                                            class="fa fa-stethoscope" aria-hidden="true"></i></span> Partner ID</label>
                                <input type="text" class="form-control border-0 bg-light px-4" id="currently_loggedin_partner_id"
                                    name="currently_loggedin_partner_id" value="{{ $doc->currently_loggedin_partner_id}}" style="height: 55px;" readonly>
                            </div>

                            <div class="col-12" style="display: none;">
                                <label for="clinic_type" class="form-label fw-bold"><span class="text-danger"><i
                                            class="fa fa-stethoscope" aria-hidden="true"></i></span> Clinic Type</label>
                                <input type="text" class="form-control border-0 bg-light px-4" id="clinic_type"
                                    name="clinic_type" value="Doctor" style="height: 55px;" readonly>
                            </div>


                            <div class="col-12 mt-2">
                                <label for="clinic_name" class="form-label fw-bold"><span class="text-danger"><i
                                            class="fa fa-stethoscope" aria-hidden="true"></i></span> Inquiry
                                    About</label>
                                <input type="text" class="form-control border-0 bg-light px-4" id="clinic_name"
                                    name="clinic_name" value="{{ $doc->partner_doctor_name}}" style="height: 55px;" readonly>
                            </div>


                            <div class="col-6">
                                <label for="user_name" class="form-label fw-bold"><span class="text-danger"><i
                                            class="fa fa-stethoscope" aria-hidden="true"></i></span> Your Name</label>
                                <input type="text" class="form-control border-0 bg-light px-4" value="{{ $user->user_name }}"
                                    name="user_name" id="user_name" style="height: 55px;" readonly>
                            </div>

                            <div class="col-6">
                                <label for="user_mobile" class="form-label fw-bold"><span class="text-danger"><i
                                            class="fa fa-stethoscope" aria-hidden="true"></i></span> Your Mobile</label>
                                <input type="text" class="form-control border-0 bg-light px-4" value="{{ $user->user_mobile }}"
                                    name="user_mobile" id="user_mobile" style="height: 55px;" readonly>
                            </div>

                            <div class="col-12">
                                <label for="user_email" class="form-label fw-bold"><span class="text-danger"><i
                                            class="fa fa-stethoscope" aria-hidden="true"></i></span> Your Email</label>
                                <input type="text" class="form-control border-0 bg-light px-4"
                                    value="{{ $user->user_email }}" name="user_email" id="user_email" style="height: 55px;" readonly>
                            </div>


                            <div class="col-12">
                                <label for="user_inquiry" class="form-label fw-bold"><span class="text-danger"><i
                                            class="fa fa-stethoscope" aria-hidden="true"></i></span> Your
                                    Inquiry</label>
                                <textarea class="form-control border-0 bg-light px-4 py-3" rows="5"
                                    placeholder="Message" name="user_inquiry" id="user_inquiry" required></textarea>
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


    @if(session('success'))
    <script>
        const successModal = new bootstrap.Modal(document.getElementById('inqurySendSuccessModal'));
        successModal.show();
    </script>
    @endif

    @if(session('error'))
    <script>
        const errorModal = new bootstrap.Modal(document.getElementById('inqurySendUnsuccessModal'));
        errorModal.show();
    </script>
    @endif

    @if(session('success') || session('error'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modalId = "{{ session('success') ? 'inqurySendSuccessModal' : 'inqurySendUnsuccessModal' }}";
            const modal = new bootstrap.Modal(document.getElementById(modalId));
            modal.show();
        });
    </script>
    @endif

    <!-- inqury send success modal start -->
    <div class="modal fade" id="inqurySendSuccessModal" tabindex="-1" aria-labelledby="inqurySendSuccessModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body d-flex flex-column align-middle justify-center align-items-center">
                    <h2 class="modal-title" id="profileUpdateSuccessModalLabel"><span class="text-primary">+</span> SUCCESS <span class="text-primary">+</span></h2>
                    <h2 class="text-primary text-center">Hello {{ $user->user_name }}, Your Inquiry Is Sent Successfully</h2>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn p-2 btn-primary w-100" data-bs-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
    <!-- inqury send success modal end -->

    <!-- inqury send Unsuccess modal start -->
    <div class="modal fade" id="inqurySendUnsuccessModal" tabindex="-1" aria-labelledby="inqurySendUnsuccessModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body d-flex flex-column align-middle justify-center align-items-center">
                    <h3 class="modal-title" id="profileUpdateSuccessModalLabel"><span class="text-primary">+</span> ERROR <span class="text-primary">+</span></h3>
                    <h4 class="text-danger text-center">Hello {{ $user->user_name }}, Your Inquiry Is Not Sent !!</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn p-2 btn-primary w-100" data-bs-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
    <!-- inqury send Unsuccess modal end -->










    <!-- feedback send modal -->
    <div class="modal fade" id="myFeedBackModal{{ $doc->id }}" tabindex="-1" aria-labelledby="myFeedBackModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <h3 class="text-center mb-2 text-primary">Give Your Valuable Feedback </h3>

                    <form class="mt-3" action="{{ route('dw.doctor.rating.save') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <p class="ratings d-flex  gap-3 mt-3 align-items-center flex-wrap" style="list-style-type: none;">
                            <span><strong><i class="fa-solid fa-stethoscope text-danger me-2"></i>Rating :</strong></span>
                            <a href="javascript:void(0);" class="rating-a" data-rating="1"><img src="{{asset('img/1.png')}}" width="35" alt="1"></a>
                            <a href="javascript:void(0);" class="rating-a" data-rating="2"><img src="{{asset('img/2.png')}}" width="35" alt="2"></a>
                            <a href="javascript:void(0);" class="rating-a" data-rating="3"><img src="{{asset('img/3.png')}}" width="35" alt="3"></a>
                            <a href="javascript:void(0);" class="rating-a" data-rating="4"><img src="{{asset('img/5.png')}}" width="35" alt="4"></a>
                            <a href="javascript:void(0);" class="rating-a" data-rating="5"><img src="{{asset('img/4.png')}}" width="35" alt="5"></a>
                        </p>

                        <input type="hidden" id="rating" name="rating" value="0" required>
                        <p><i class="fa fa-star text-warning" aria-hidden="true"></i> Your Rating is: <b><span id="user-rating" class="text-danger">0</span> out of 5</b></p>


                        <div class="row g-3">

                            <div class="col-12" style="display: none;">
                                <label for="currently_loggedin_partner_id" class="form-label fw-bold"><span class="text-danger"><i
                                            class="fa fa-stethoscope" aria-hidden="true"></i></span> Partner ID</label>
                                <input type="text" class="form-control border-0 bg-light px-4" id="currently_loggedin_partner_id"
                                    name="currently_loggedin_partner_id" value="{{ $doc->currently_loggedin_partner_id}}" style="height: 55px;" readonly>
                            </div>

                            <div class="col-12" style="display: none;">
                                <label for="clinic_type" class="form-label fw-bold"><span class="text-danger"><i
                                            class="fa fa-stethoscope" aria-hidden="true"></i></span> Clinic Type</label>
                                <input type="text" class="form-control border-0 bg-light px-4" id="clinic_type"
                                    name="clinic_type" value="Doctor" style="height: 55px;" readonly>
                            </div>


                            <div class="col-12 mt-2" style="display: none;">
                                <label for="clinic_name" class="form-label fw-bold"><span class="text-danger"><i
                                            class="fa fa-stethoscope" aria-hidden="true"></i></span> Inquiry
                                    About</label>
                                <input type="text" class="form-control border-0 bg-light px-4" id="clinic_name"
                                    name="clinic_name" value="{{ $doc->partner_doctor_name}}" style="height: 55px;" readonly>
                            </div>

                            <div class="col-6">
                                <label for="user_name" class="form-label fw-bold"><span class="text-danger"><i
                                            class="fa fa-stethoscope" aria-hidden="true"></i></span> Your Name</label>
                                <input type="text" class="form-control border-0 bg-light px-4" value="{{ $user->user_name }}"
                                    name="user_name" id="user_name" style="height: 55px;" readonly>
                            </div>

                            <div class="col-6">
                                <label for="user_email" class="form-label fw-bold"><span class="text-danger"><i
                                            class="fa fa-stethoscope" aria-hidden="true"></i></span> Your Email</label>
                                <input type="text" class="form-control border-0 bg-light px-4"
                                    value="{{ $user->user_email }}" name="user_email" id="user_email" style="height: 55px;" readonly>
                            </div>

                            <div class="col-12">
                                <label for="feedback" class="form-label fw-bold"><span class="text-danger"><i
                                            class="fa fa-stethoscope" aria-hidden="true"></i></span> Your
                                    Feedback</label>
                                <textarea class="form-control border-0 bg-light px-4 py-3" rows="5"
                                    placeholder="Feedback" name="feedback" id="feedback" required></textarea>
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



    @if(session('successFeed'))
    <script>
        const successModalFeed = new bootstrap.Modal(document.getElementById('feedSendSuccessModal'));
        successModal.show();
    </script>
    @endif

    @if(session('errorFeed'))
    <script>
        const errorModalFeed = new bootstrap.Modal(document.getElementById('feedSendUnsuccessModal'));
        errorModal.show();
    </script>
    @endif

    @if(session('successFeed') || session('errorFeed'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modalId = "{{ session('successFeed') ? 'feedSendSuccessModal' : 'feedSendUnsuccessModal' }}";
            const modal = new bootstrap.Modal(document.getElementById(modalId));
            modal.show();
        });
    </script>
    @endif

    <!-- feed send success modal start -->
    <div class="modal fade" id="feedSendSuccessModal" tabindex="-1" aria-labelledby="feedSendSuccessModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body d-flex flex-column align-middle justify-center align-items-center">
                    <h2 class="modal-title" id="profileUpdateSuccessModalLabel"><span class="text-primary">+</span> SUCCESS <span class="text-primary">+</span></h2>
                    <h2 class="text-primary text-center">Hello {{ $user->user_name }}, Thanks for Your Feedback</h2>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn p-2 btn-primary w-100" data-bs-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
    <!-- feed send success modal end -->

    <!-- feed send Unsuccess modal start -->
    <div class="modal fade" id="feedSendUnsuccessModal" tabindex="-1" aria-labelledby="feedSendUnsuccessModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body d-flex flex-column align-middle justify-center align-items-center">
                    <h3 class="modal-title" id="profileUpdateSuccessModalLabel"><span class="text-primary">+</span> ERROR <span class="text-primary">+</span></h3>
                    <h4 class="text-danger text-center">Hello {{ $user->user_name }}, There was an error in sending your feedback, Please try again!</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn p-2 btn-primary w-100" data-bs-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
    <!-- feed send Unsuccess modal end -->
























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
                    @guest
                    <a href="/partner-login" class="btn btn-dark btn-lg rounded me-2">Login As Partner</a>
                    @endguest

                    @auth
                    <form method="POST" action="{{ route('user.logout') }}">
                        @csrf
                        <a class="btn btn-dark btn-lg rounded me-2" :href="route('user.logout')"
                            onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            Logout
                        </a>
                    </form>
                    @endauth
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
    <script src="{{asset('../lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('../lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('../lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('../lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('../lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('../lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script src="{{asset('../lib/twentytwenty/jquery.event.move.js')}}"></script>
    <script src="{{asset('../lib/twentytwenty/jquery.twentytwenty.js')}}"></script>

    <script src="{{asset('../js/main.js')}}"></script>


    <script>
        document.querySelectorAll('.rating-a').forEach(function(ratingLink) {
            ratingLink.addEventListener('click', function() {

                const rating = this.getAttribute('data-rating');


                document.querySelectorAll('.rating-a').forEach(function(link) {
                    link.classList.remove('selected');
                });

                this.classList.add('selected');

                document.getElementById('user-rating').textContent = rating;

                document.getElementById('rating').value = rating;
            });
        });
    </script>
</body>

</html>