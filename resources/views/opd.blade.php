<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>All OPD | Doctorwala</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">



    @foreach ($opds as $opd)
    <!-- SEO Meta Tags for OPD Page -->
    <meta name="description" content="Find {{ ucfirst($opd->clinic_name) }} at {{ ucfirst($opd->clinic_address) }}. Book your consultation today at a trusted OPD. Doctorwala.info is your one-stop destination for finding the best OPDs in India.">
    <meta name="keywords" content="{{ ucfirst($opd->clinic_name) }}, OPD, clinic, healthcare, {{ ucfirst($opd->clinic_address) }}, outpatient, {{ ucfirst($opd->clinic_registration_type) }}, {{ ucfirst($opd->clinic_clinic_contact_person_name) }}, {{ ucfirst($opd->clinic_mobile_number) }}, {{ ucfirst($opd->clinic_email) }}, {{ ucfirst($opd->clinic_landmark) }}, {{ ucfirst($opd->clinic_state) }}, {{ ucfirst($opd->clinic_pincode) }}, {{ ucfirst($opd->clinic_google_map_link) }}, {{ ucfirst($opd->clinic_) }}, {{ ucfirst($opd->clinic_address) }}, consultation, doctorwala.info, doctorwala">

    <!-- Open Graph Tags -->
    <meta property="og:title" content="{{ ucfirst($opd->clinic_name) }} - Find OPDs | Doctorwala">
    <meta property="og:description" content="Find {{ ucfirst($opd->clinic_name) }} at {{ ucfirst($opd->clinic_address) }}. Book your consultation today at a trusted OPD.">
    <meta property="og:image" content="{{ asset('storage/' . ($opd->banner->opdbanner ?? 'default_image.jpg')) }}">
    <meta property="og:url" content="{{ url('/dw/opd/' . $opd->id) }}">

    <!-- Twitter Card Tags -->
    <meta name="twitter:title" content="{{ ucfirst($opd->clinic_name) }} - Find OPDs | Doctorwala">
    <meta name="twitter:description" content="Find {{ ucfirst($opd->clinic_name) }} at {{ ucfirst($opd->clinic_address) }}. Book your consultation today at a trusted OPD.">
    <meta name="twitter:image" content="{{ asset('storage/' . ($opd->banner->opdbanner ?? 'default_image.jpg')) }}">
    @endforeach


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
    <link href="{{asset('responsive/service_responsive.css')}}" rel="stylesheet">


    <style>
        .my-search-bar {
            position: sticky;
            top: 20px;
            z-index: 10;
        }

        .my-search-bar2 {
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
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
                <h1 class="display-3 text-white animated zoomIn">OPD Details</h1>
                @guest
                <a href="/" class="h4 text-white" style="text-decoration: underline;">Home</a>
                @endguest

                @auth
                <a href="/dw" class="h4 text-white" style="text-decoration: underline;">Home</a>
                @endauth
                <i class="fa fa-plus text-dark px-2" style="font-size: 2rem; font-weight: 700;"></i>
                <a href="" class="h4 text-white">OPD</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->








    <!-- Searchbar Start -->
    <div class="container-fluid banner mb-5 mt-4 my-search-bar">
        <div class="container">
            <div class="row gx-2">






                <div class="col-lg-12 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-primary my-search-bar2 d-flex flex-column p-5" style="height: 200px;">
                        <h3 class="text-white mb-3">SORT RESULTS BY</h3>

                        <form action="{{ route('opd.filter.search') }}" method="GET">
                            <div class="row g-3">
                                <!-- State Dropdown -->
                                <div class="col-md-4">
                                    <select name="state" class="form-select my-select bg-light border-0 mb-3" style="height: 40px;">
                                        <option selected>Select State</option>
                                        @foreach($states as $state)
                                        <option style="text-transform: capitalize;" value="{{ $state }}">{{ $state }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- City Dropdown -->
                                <div class="col-md-4">
                                    <select name="city" class="form-select my-select bg-light border-0 mb-3" style="height: 40px;">
                                        <option selected>Select City</option>
                                        @foreach($cities as $city)
                                        <option style="text-transform: capitalize;" value="{{ $city }}">{{ $city }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Search Button -->
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-dark my-search-button">Search OPD</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>







            </div>


        </div>
    </div>
    </div>
    <!-- Searchbar End -->





    <!-- OPD Cards Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">


                @foreach ($opds as $opd)
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            @if($opd->banner && $opd->banner->opdbanner)
                            <img class="img-fluid rounded-top w-100" src="{{ asset('storage/' . $opd->banner->opdbanner) }}" alt="" style="border: 1px solid #ddd;">
                            @else
                            <img src="https://media.istockphoto.com/id/1222357475/vector/image-preview-icon-picture-placeholder-for-website-or-ui-ux-design-vector-illustration.jpg?s=612x612&w=0&k=20&c=KuCo-dRBYV7nz2gbk4J9w1WtTAgpTdznHu55W9FjimE=" class="card-img-top" alt="Default Image">
                            @endif
                            <div
                                class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                <a class="btn btn-primary btn-square m-1" href="#"><i
                                        class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i
                                        class="fa-solid fa-location-dot"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i
                                        class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="team-text position-relative bg-light text-start rounded-bottom p-4 pt-5">
                            <h4 class="mb-2"><a href="{{url('/dw/opd/'.$opd->id)}}"
                                    style="text-decoration: none; text-transform: capitalize;"
                                    class="text-dark">{{$opd->clinic_name}}</a></h4>


                            <p class="text-primary mb-2"><a href="{{url('/dw/opd/'.$opd->id)}}"
                                    style="text-decoration: none; text-transform: capitalize;"
                                    class="text-primary">{{$opd->clinic_address}}</a></p>



                            <a href="{{url('/dw/opd/'.$opd->id)}}" class="btn btn-primary p-2 w-100"
                                style="text-decoration: none;">OPEN NOW</a>

                        </div>


                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- OPD Cards End -->









    <div class="d-flex justify-content-center">
        <nav aria-label="Page navigation">
            <ul class="pagination">
                {{-- Previous Page Link --}}
                @if ($opds->onFirstPage())
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Prev</a>
                </li>
                @else
                <li class="page-item">
                    <a class="page-link" href="{{ $opds->previousPageUrl() }}" tabindex="-1">Prev</a>
                </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($opds->links()->elements[0] as $page => $url)
                @if ($page == $opds->currentPage())
                <li class="page-item active">
                    <a class="page-link" href="#">{{ $page }} <span class="sr-only">(current)</span></a>
                </li>
                @else
                <li class="page-item">
                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                </li>
                @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($opds->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $opds->nextPageUrl() }}">Next</a>
                </li>
                @else
                <li class="page-item disabled">
                    <a class="page-link" href="#">Next</a>
                </li>
                @endif
            </ul>
        </nav>
    </div>











    <!-- marquee text start -->
    <marquee id="marqueeText"
        style="background: #051225; color: white; padding: 10px; position: fixed; bottom: 0; width: 100%; z-index: 1000;">
        Welcome to <b>Doctorwala.info</b> !! In addition
        to doctors, we also connect you with pathologists and OPDs. If you require diagnostic services or need to
        visit
        an OPD for consultation, DoctorWala.info is your go-to platform. We collaborate with trusted pathologists
        and
        OPDs to ensure that you receive accurate and timely medical tests and consultations. for more information
        feel
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









    @if(session('password_update_status') == 'success')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const successModal = new bootstrap.Modal(document.getElementById('passwordUpdateSuccessModal'));
            successModal.show();
        });
    </script>
    @elseif(session('password_update_status') == 'failure')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const failureModal = new bootstrap.Modal(document.getElementById('passwordUpdateUnsuccessModal'));
            failureModal.show();
        });
    </script>
    @endif

    @if(session('profile_update_status') == 'success')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const successModal = new bootstrap.Modal(document.getElementById('profileUpdateSuccessModal'));
            successModal.show();
        });
    </script>
    @elseif(session('profile_update_status') == 'failure')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const failureModal = new bootstrap.Modal(document.getElementById('profileUpdateUnsuccessModal'));
            failureModal.show();
        });
    </script>
    @endif










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
</body>

</html>