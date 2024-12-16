<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Super Admin Dashboard</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('../partner-assets')}}">
    <link rel="stylesheet" href="{{asset('../partner-assets/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('../partner-assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('../partner-assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('../partner-assets/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('../partner-assets/js/select.dataTables.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('../partner-assets/css/vertical-layout-light/style.css')}}">
    <!-- endinject -->

    <link href="{{asset('fav5.png')}}" rel="icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
        .card_green {
            background-color: #0d7c34;
            color: white;
            cursor: pointer;
            transition: all 200ms ease-in-out;

            img {
                transition: all 160ms ease-in-out;
            }

            &:hover {
                color: white;
                background-color: #0d662b;

                img {
                    scale: 1.08;
                }
            }
        }


        .card_blue {
            background-color: #2697d8;
            color: white;
            cursor: pointer;
            transition: all 200ms ease-in-out;

            img {
                transition: all 160ms ease-in-out;
            }

            &:hover {
                color: white;
                background-color: #246bad;

                img {
                    scale: 1.08;
                }
            }
        }


        .card_red {
            background-color: #dd2923;
            color: white;
            cursor: pointer;
            transition: all 200ms ease-in-out;

            img {
                transition: all 160ms ease-in-out;
            }

            &:hover {
                color: white;
                background-color: #bb211b;

                img {
                    scale: 1.08;
                }
            }
        }


        .card_orange {
            background-color: #f07934;
            color: white;
            cursor: pointer;
            transition: all 200ms ease-in-out;

            img {
                transition: all 160ms ease-in-out;
            }

            &:hover {
                color: white;
                background-color: #e76519;

                img {
                    scale: 1.08;
                }
            }
        }



        .card_purple {
            background-color: #6757fc;
            color: white;
            cursor: pointer;
            transition: all 200ms ease-in-out;

            img {
                transition: all 160ms ease-in-out;
            }

            &:hover {
                color: white;
                background-color: #4b38f1;

                img {
                    scale: 1.08;
                }
            }
        }

        .card_dark_blue {
            background-color: #24378f;
            color: white;
            cursor: pointer;
            transition: all 200ms ease-in-out;

            img {
                transition: all 160ms ease-in-out;
            }

            &:hover {
                color: white;
                background-color: #13277e;

                img {
                    scale: 1.08;
                }
            }
        }

        .card_ash_tyran {
            background-color: #8d1b4e;
            color: white;
            cursor: pointer;
            transition: all 200ms ease-in-out;

            img {
                transition: all 160ms ease-in-out;
            }

            &:hover {
                color: white;
                background-color: #5f082f;

                img {
                    scale: 1.08;
                }
            }
        }

        .card_dim_blue {
            background-color: #0FA3B1;
            color: white;
            cursor: pointer;
            transition: all 200ms ease-in-out;

            img {
                transition: all 160ms ease-in-out;
            }

            &:hover {
                color: white;
                background-color: #00565e;

                img {
                    scale: 1.08;
                }
            }
        }
    </style>
</head>

<body>


    <div class="container-scroller">



        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="/superadmin/super-dashboard" style="font-weight: 900;"><img
                        src="{{asset('../img/logo3.png')}}" alt="logo"></a>
                <a class="navbar-brand brand-logo-mini" href="/superadmin/super-dashboard"><img src="{{asset('fav5.png')}}"
                        alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <i class="fa-solid fa-bars"></i>
                </button>

                <input type="search" id="search" placeholder="Search Here ........" name="search"
                    class="form-control mx-4 w-100">

                <ul class="navbar-nav navbar-nav-right">

                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="{{asset('fav5.png')}}" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item" :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    <i class="ti-power-off text-primary"></i>
                                    Logout
                                </a>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>














        <!-- partial -->
        <div class="container-fluid page-body-wrapper">




            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">



                    <!-- dasboard -->
                    <li class="nav-item">
                        <a class="nav-link" href="/superadmin/super-dashboard">
                            <i class="fa-solid fa-chart-pie"></i>&nbsp; <span class="menu-title">Dashboard</span>
                        </a>
                    </li>



                    <!-- banners -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <i class="fa fa-image" aria-hidden="true"></i>&nbsp; <span
                                class="menu-title">Banners</span><i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link"
                                        href="/superadmin/super-home-banner">Home Banner</a></li>

                                <li class="nav-item"> <a class="nav-link"
                                        href="/superadmin/super-others-banner">Others Banner</a></li>


                            </ul>
                        </div>
                    </li>





                    <!-- all user lists -->
                    <li class="nav-item">
                        <a class="nav-link" href="/superadmin/super-all-user">
                            <i class="fa fa-user" aria-hidden="true"></i>&nbsp; <span class="menu-title">All User</span>
                        </a>
                    </li>



                    <!-- all partners lists -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic12t" aria-expanded="false"
                            aria-controls="ui-basic12t">
                            <i class="fa fa-users" aria-hidden="true"></i>&nbsp; <span
                                class="menu-title">Partners</span><i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic12t">
                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link"
                                        href="/superadmin/super-add-partners">Add Partners</a></li>

                                <li class="nav-item"> <a class="nav-link"
                                        href="/superadmin/super-all-partner">All Partners</a></li>

                            </ul>
                        </div>
                    </li>






                    <!-- all OPD lists -->
                    <li class="nav-item">
                        <a class="nav-link" href="/superadmin/super-all-opd">
                            <i class="fa fa-user-doctor" aria-hidden="true"></i>&nbsp; <span class="menu-title">All
                                OPD</span>
                        </a>
                    </li>


                    <!-- all pathology lists -->
                    <li class="nav-item">
                        <a class="nav-link" href="/superadmin/super-all-pathology">
                            <i class="fa fa-syringe" aria-hidden="true"></i>&nbsp; <span class="menu-title">All
                                Pathology</span>
                        </a>
                    </li>


                    <!-- all doctor lists -->
                    <li class="nav-item">
                        <a class="nav-link" href="/superadmin/super-all-doctors">
                            <i class="fa fa-stethoscope" aria-hidden="true"></i>&nbsp; <span class="menu-title">All
                                Doctors</span>
                        </a>
                    </li>



                    <!-- about us -->
                    <li class="nav-item">
                        <a class="nav-link" href="/superadmin/super-aboutus">
                            <i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp; <span class="menu-title">About
                                Us</span>
                        </a>
                    </li>



                    <!-- blogs -->
                    <li class="nav-item">
                        <a class="nav-link" href="/superadmin/super-blogs">
                            <i class="fa fa-blog" aria-hidden="true"></i>&nbsp; <span class="menu-title">Add
                                Blogs</span>
                        </a>
                    </li>




                    <!-- user inquiry -->
                    <li class="nav-item">
                        <a class="nav-link" href="/superadmin/super-user-inquiry">
                            <i class="fa-solid fa-comment"></i>&nbsp; <span class="menu-title">User Inquiry</span>
                        </a>
                    </li>






                    <!-- coupon -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic12" aria-expanded="false"
                            aria-controls="ui-basic12">
                            <i class="fa fa-gifts" aria-hidden="true"></i>&nbsp; <span
                                class="menu-title">Coupons</span><i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic12">
                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link"
                                        href="/superadmin/super-add-coupons">Add Coupons</a></li>

                                <li class="nav-item"> <a class="nav-link"
                                        href="/superadmin/super-show-coupons">Show Coupons</a></li>

                            </ul>
                        </div>
                    </li>






                    <!-- subscription -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic123" aria-expanded="false"
                            aria-controls="ui-basic123">
                            <i class="fa fa-coins" aria-hidden="true"></i>&nbsp; <span
                                class="menu-title">Subscription</span><i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic123">
                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link"
                                        href="/superadmin/super-add-subscriptions">Add Subscriptions</a>
                                </li>

                                <li class="nav-item"> <a class="nav-link"
                                        href="/superadmin/super-show-subscription">Show
                                        Subscriptions</a></li>

                            </ul>
                        </div>
                    </li>





                    <!-- Inquiry from patients/user -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic132" aria-expanded="false"
                            aria-controls="ui-basic132">
                            <i class="fa fa-hand-holding-medical" aria-hidden="true"></i>&nbsp; <span
                                class="menu-title">Inquiries</span><i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic132">
                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link"
                                        href="/superadmin/super-opd-inquiry">All OPD Inq</a></li>

                                <li class="nav-item"> <a class="nav-link"
                                        href="/superadmin/super-path-inquiry">All Path Inq</a></li>


                                <li class="nav-item"> <a class="nav-link"
                                        href="/superadmin/super-doc-inquiry">All Doc Inq</a></li>


                            </ul>
                        </div>
                    </li>





                    <!-- Ticket management -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic111" aria-expanded="false"
                            aria-controls="ui-basic111">
                            <i class="fa-solid fa-ticket"></i>&nbsp; <span class="menu-title">Tickets</span><i
                                class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic111">
                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link"
                                        href="/superadmin/super-all-tickets">All
                                        Tickets</a></li>

                                <li class="nav-item"> <a class="nav-link"
                                        href="/superadmin/super-ticket-replies">Replies</a>
                                </li>

                            </ul>
                        </div>
                    </li>




                </ul>


            </nav>




            <!-- partial -->
            <div class="main-panel">






                <div class="content-wrapper">



                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="row">
                                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                                    <h3 class="font-weight-bold">Welcome Back Super Admin</h3>

                                    <h6 class="font-weight-normal mb-0"><i
                                            class="fa-solid fa-heart text-danger"></i>&nbsp;It's Your Place sir! Manage
                                        everything you want.</h6>

                                </div>
                                <div class="col-12 col-xl-4">
                                    <div class="justify-content-end d-flex">
                                        <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                            <button class="btn btn-sm btn-light bg-white" type="button">
                                                <i class="fa-solid fa-calendar-days"></i> Today ( <span id="currentDate"></span> )
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-4 grid-margin stretch-card">
                            <div class="card tale-bg">
                                <div class="card-people mt-auto">
                                    <img src="{{asset('../img/doc.jpg')}}" alt="people">
                                </div>
                            </div>
                        </div>


                        <div class="col-md-7 grid-margin transparent">

                            <div class="row">


                                <div class="col-md-4 mb-4 stretch-card transparent">
                                    <a href="/superadmin/super-add-partners" class="card card_green"
                                        style="cursor: pointer; text-decoration: none;">
                                        <div class="card-body">
                                            <div class="prof d-flex align-items-center">
                                                <img src="{{asset('../img/gif/add-user.gif')}}" class="rounded" width="50" alt="">
                                                <p class="fs-30 m-0 p-0 ml-2 text-uppercase"
                                                    style="font-weight: 700; cursor: pointer; font-size: 1.1rem;">Add
                                                    Partners</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                                <div class="col-md-4 mb-4 stretch-card transparent">
                                    <a href="/superadmin/super-add-coupons" class="card card_blue"
                                        style="cursor: pointer; text-decoration: none;">
                                        <div class="card-body">
                                            <div class="prof d-flex align-items-center">
                                                <img src="{{asset('../img/gif/add-coupon.gif')}}" class="rounded" width="50" alt="">
                                                <p class="fs-30 m-0 p-0 ml-2 text-uppercase"
                                                    style="font-weight: 700; cursor: pointer; font-size: 1.1rem;">Add
                                                    Coupons</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-4 mb-4 stretch-card transparent">
                                    <a href="/superadmin/super-add-subscriptions" class="card card_orange"
                                        style="cursor: pointer; text-decoration: none;">
                                        <div class="card-body">
                                            <div class="prof d-flex align-items-center">
                                                <img src="{{asset('../img/gif/pay.gif')}}" class="rounded" width="50" alt="">
                                                <p class="fs-30 m-0 p-0 ml-2 text-uppercase"
                                                    style="font-weight: 700; cursor: pointer; font-size: 1.1rem;">Add
                                                    Subscription</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-4 mb-4 stretch-card transparent">
                                    <a href="/superadmin/super-all-tickets" class="card card_red"
                                        style="cursor: pointer; text-decoration: none;">
                                        <div class="card-body">
                                            <div class="prof d-flex align-items-center">
                                                <img src="{{asset('../img/gif/ticket.gif')}}" class="rounded" width="50" alt="">
                                                <p class="fs-30 m-0 p-0 ml-2 text-uppercase"
                                                    style="font-weight: 700; cursor: pointer; font-size: 1.1rem;">Ticket
                                                    Manage</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-4 mb-4 stretch-card transparent">
                                    <a href="/superadmin/super-all-doctors" class="card card_dim_blue"
                                        style="cursor: pointer; text-decoration: none;">
                                        <div class="card-body">
                                            <div class="prof d-flex align-items-center">
                                                <img src="{{asset('../img/gif/doctors.gif')}}" class="rounded" width="50" alt="">
                                                <p class="fs-30 m-0 p-0 ml-2 text-uppercase"
                                                    style="font-weight: 700; cursor: pointer; font-size: 1.1rem;">
                                                    All Doctor</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>



                                <div class="col-md-4 mb-4 stretch-card transparent">
                                    <a href="/superadmin/super-all-pathology" class="card card_purple"
                                        style="cursor: pointer; text-decoration: none;">
                                        <div class="card-body">
                                            <div class="prof d-flex align-items-center">
                                                <img src="{{asset('../img/gif/tests.gif')}}" class="rounded" width="50" alt="">
                                                <p class="fs-30 m-0 p-0 ml-2 text-uppercase"
                                                    style="font-weight: 700; cursor: pointer; font-size: 1.1rem;">
                                                    All Pathology</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-4 mb-4 stretch-card transparent">
                                    <a href="/superadmin/super-all-opd" class="card card_dim_blue"
                                        style="cursor: pointer; text-decoration: none;">
                                        <div class="card-body">
                                            <div class="prof d-flex align-items-center">
                                                <img src="{{asset('../img/gif/5.gif')}}" class="rounded" width="50" alt="">
                                                <p class="fs-30 m-0 p-0 ml-2 text-uppercase"
                                                    style="font-weight: 700; cursor: pointer; font-size: 1.1rem;">
                                                    All OPD</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                                <div class="col-md-4 mb-4 stretch-card transparent">
                                    <a href="partner-pathology-show.html" class="card card_purple"
                                        style="cursor: pointer; text-decoration: none;">
                                        <div class="card-body">
                                            <div class="prof d-flex align-items-center">
                                                <img src="{{asset('../img/gif/2.gif')}}" class="rounded" width="50" alt="">
                                                <p class="fs-30 m-0 p-0 ml-2 text-uppercase"
                                                    style="font-weight: 700; cursor: pointer; font-size: 1.1rem;">
                                                    All Users</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>




                                <div class="col-md-4 mb-4 stretch-card transparent">
                                    <a href="" class="card card_dark_blue"
                                        style="cursor: pointer; text-decoration: none;">
                                        <div class="card-body">
                                            <div class="prof d-flex align-items-center">
                                                <img src="{{asset('../img/gif/3.gif')}}" class="rounded" width="50" alt="">
                                                <p class="fs-30 m-0 p-0 ml-2 text-uppercase"
                                                    style="font-weight: 700; cursor: pointer; font-size: 1.1rem;">
                                                    User Inquiries</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                                <div class="col-md-4 mb-4 stretch-card transparent">
                                    <a href="/superadmin/super-blogs" class="card card_ash_tyran"
                                        style="cursor: pointer; text-decoration: none;">
                                        <div class="card-body">
                                            <div class="prof d-flex align-items-center">
                                                <img src="{{asset('../img/gif/blog-post.gif')}}" class="rounded" width="50" alt="">
                                                <p class="fs-30 m-0 p-0 ml-2 text-uppercase"
                                                    style="font-weight: 700; cursor: pointer; font-size: 1.1rem;">
                                                    Blogs</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                                <div class="col-md-4 mb-4 stretch-card transparent">
                                    <a href="partner-pathology-show.html" class="card card_orange"
                                        style="cursor: pointer; text-decoration: none;">
                                        <div class="card-body">
                                            <div class="prof d-flex align-items-center">
                                                <img src="{{asset('../img/gif/4.gif')}}" class="rounded" width="50" alt="">
                                                <p class="fs-30 m-0 p-0 ml-2 text-uppercase"
                                                    style="font-weight: 700; cursor: pointer; font-size: 1.1rem;">
                                                    OPD Inquiries</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>



                                <div class="col-md-4 mb-4 stretch-card transparent">
                                    <a href="partner-pathology-show.html" class="card card_green"
                                        style="cursor: pointer; text-decoration: none;">
                                        <div class="card-body">
                                            <div class="prof d-flex align-items-center">
                                                <img src="{{asset('../img/gif/6.gif')}}" class="rounded" width="50" alt="">
                                                <p class="fs-30 m-0 p-0 ml-2 text-uppercase"
                                                    style="font-weight: 700; cursor: pointer; font-size: 1.1rem;">
                                                    Path Inquiries</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-4 mb-4 stretch-card transparent">
                                    <a href="partner-pathology-show.html" class="card card_purple"
                                        style="cursor: pointer; text-decoration: none;">
                                        <div class="card-body">
                                            <div class="prof d-flex align-items-center">
                                                <img src="{{asset('../img/gif/1.gif')}}" class="rounded" width="50" alt="">
                                                <p class="fs-30 m-0 p-0 ml-2 text-uppercase"
                                                    style="font-weight: 700; cursor: pointer; font-size: 1.1rem;">
                                                    Doc Inquiries</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                                <div class="col-md-4 mb-4 stretch-card transparent">
                                    <a href="/superadmin/super-aboutus" class="card card_red"
                                        style="cursor: pointer; text-decoration: none;">
                                        <div class="card-body">
                                            <div class="prof d-flex align-items-center">
                                                <img src="{{asset('../img/gif/about.gif')}}" class="rounded" width="50" alt="">
                                                <p class="fs-30 m-0 p-0 ml-2 text-uppercase"
                                                    style="font-weight: 700; cursor: pointer; font-size: 1.1rem;">About Us</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>





                                <div class="col-md-4 mb-4 stretch-card transparent">
                                    <a href="/superadmin/super-aboutus" class="card card_blue"
                                        style="cursor: pointer; text-decoration: none;">
                                        <div class="card-body">
                                            <div class="prof d-flex align-items-center">
                                                <img src="{{asset('../img/gif/feed.gif')}}" class="rounded" width="50" alt="">
                                                <p class="fs-30 m-0 p-0 ml-2 text-uppercase"
                                                    style="font-weight: 700; cursor: pointer; font-size: 1.1rem;">All Feedbacks</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>




                            </div>





                        </div>
                    </div>




                </div>

















                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024. <a
                                href="https://doctorwala.info/" target="_blank">Doctorwala.info</a> -
                            All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Easy-To-Use & made with
                            <i class="ti-heart text-danger ml-1"></i></span>
                    </div>
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Developed by <a
                                href="https://github.com/artic0909" target="_blank">SaklinMustak</a></span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->













    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{asset('../partner-assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('../partner-assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('../partner-assets/vendors/datatables.net/jquery.dataTables.js')}}"></script>
    <script src="{{asset('../partner-assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('../partner-assets/js/dataTables.select.min.js')}}"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('../partner-assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('../partner-assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('../partner-assets/js/template.js')}}"></script>
    <script src="{{asset('../partner-assets/js/settings.js')}}"></script>
    <script src="{{asset('../partner-assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('../partner-assets/js/dashboard.js')}}"></script>
    <script src="{{asset('../partner-assets/js/Chart.roundedBarCharts.js')}}"></script>
    <!-- End custom js for this page-->


    <script>
        
        function updateCurrentDate() {
            const today = new Date(); 
            const options = {
                year: 'numeric',
                month: 'short',
                day: '2-digit'
            }; 
            const formattedDate = today.toLocaleDateString('en-US', options); 

            
            document.getElementById('currentDate').textContent = formattedDate;
        }

        
        updateCurrentDate();
    </script>
</body>

</html>