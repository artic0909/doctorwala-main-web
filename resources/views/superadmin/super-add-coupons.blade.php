<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Super | Add Coupons</title>

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
                                <div class="col-12 mt-5">

                                    <h3 class="font-weight-bold">Add Coupons</h3>



                                    <form class="prof-view" action="{{ route('superadmin.super-coupon.store') }}" method="post" enctype="multipart/form-data">
                                        @csrf


                                        <div class="from-view row  mt-3">


                                            <div class="col-4 form-group">
                                                <label for="coupon_image" style="font-weight: 700;"><i
                                                        class="fa-solid fa-gifts text-primary" aria-hidden="true"></i>
                                                    Coupon Image
                                                    <span class="text-danger">*</span></label>
                                                <input type="file" class="form-control" id="coupon_image" name="coupon_image"
                                                    style="height: 55px;" required>
                                            </div>




                                            <div class="col-4 form-group">
                                                <label for="coupon_code" style="font-weight: 700;"><i
                                                        class="fa-solid fa-gifts text-primary" aria-hidden="true"></i>
                                                    Coupon Code
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="coupon_code" name="coupon_code" placeholder="Enter Coupon Code (e.g- 1, 2, 3)"
                                                    style="height: 55px;" required>
                                            </div>







                                            <div class="col-4 form-group">
                                                <label for="coupon_amount" style="font-weight: 700;"><i
                                                        class="fa fa-indian-rupee text-primary" aria-hidden="true"></i>
                                                    Amount <span class="text-danger">*</span></label>
                                                <input type="number" class="form-control" id="coupon_amount" name="coupon_amount" placeholder="Enter Coupon Amount"
                                                    style="height: 55px;" required>
                                            </div>




                                            <div class="col-6 form-group">
                                                <label for="coupon_start_date" style="font-weight: 700;"><i
                                                        class="fa-solid fa-calendar-days text-primary"></i>
                                                    Opening Date</label>
                                                <input type="date" class="form-control" id="coupon_start_date" name="coupon_start_date"
                                                    style="height: 55px;">
                                                <small class="mt-2 text-danger" style="font-weight: 700;">If not provided then the opening date will be current date</small>
                                            </div>



                                            <div class="col-6 form-group">
                                                <label for="coupon_end_date" style="font-weight: 700;"><i
                                                        class="fa fa-calendar-xmark text-primary"
                                                        aria-hidden="true"></i> Closing
                                                    Date
                                                    <span class="text-danger">*</span></label>
                                                <input type="date" class="form-control" id="coupon_end_date" name="coupon_end_date"
                                                    style="height: 55px;" required>
                                            </div>



                                            <div class="d-flex justify-content-center w-100">
                                                <button type="submit" class="btn btn-danger rounded"
                                                    style="font-weight: 700;">Add Coupon</button>
                                            </div>




                                        </div>



                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>





                </div>






                <!-- profile update success modal start -->
                <div class="modal fade" id="couponAddSuccessModal" tabindex="-1" aria-labelledby="couponAddSuccessModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body d-flex flex-column align-middle justify-center align-items-center">
                                <h2 class="modal-title" id="couponAddSuccessModalLabel"><span class="text-primary">+</span> SUCCESS <span class="text-primary">+</span></h2>
                                <h4 class="text-primary">Coupon Added Successfully</h4>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn p-2 btn-primary w-100" data-dismiss="modal">CLOSE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- profile update success modal end -->

                <!-- profile update Unsuccess modal start -->
                <div class="modal fade" id="couponAddUnsuccessModal" tabindex="-1" aria-labelledby="couponAddUnsuccessModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body d-flex flex-column align-middle justify-center align-items-center">
                                <h3 class="modal-title" id="couponAddUnsuccessModalLabel"><span class="text-primary">+</span> ERROR <span class="text-primary">+</span></h3>
                                <h4 class="text-danger">Coupon Is Not Added!</h4>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn p-2 btn-primary w-100" data-dismiss="modal">CLOSE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- profile update Unsuccess modal end -->




                <!-- Include this script block below your modals -->
                @if(session('success'))
                <script>
                    // Automatically trigger the success modal
                    const successModal = new bootstrap.Modal(document.getElementById('couponAddSuccessModal'));
                    successModal.show();
                </script>
                @endif

                @if(session('error'))
                <script>
                    // Automatically trigger the error modal
                    const errorModal = new bootstrap.Modal(document.getElementById('couponAddUnsuccessModal'));
                    errorModal.show();
                </script>
                @endif


                @if(session('success') || session('error'))
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const modalId = "{{ session('success') ? 'couponAddSuccessModal' : 'couponAddUnsuccessModal' }}";
                        const modal = new bootstrap.Modal(document.getElementById(modalId));
                        modal.show();
                    });
                </script>
                @endif






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

</body>

</html>