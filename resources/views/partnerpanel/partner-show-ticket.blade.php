<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>My Tickets</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../partner-assets">
    <link rel="stylesheet" href="../partner-assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../partner-assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../partner-assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="../partner-assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="../partner-assets/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../partner-assets/css/vertical-layout-light/style.css">
    <!-- endinject -->

    <link href="{{asset('fav5.png')}}" rel="icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>


    <div class="container-scroller">



        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="/partnerpanel/partner-dashboard" style="font-weight: 900;"><img
                        src="{{asset('../img/logo3.png')}}" alt="logo"></a>
                <a class="navbar-brand brand-logo-mini" href="/partnerpanel/partner-dashboard"><img src="{{asset('fav5.png')}}"
                        alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <i class="fa-solid fa-bars"></i>
                </button>

                <ul class="navbar-nav navbar-nav-right">

                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="{{asset('fav5.png')}}" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="partner-profile.html">
                                <i class="ti-settings text-primary"></i>
                                Settings
                            </a>


                            <form method="POST" action="{{ route('partner.logout') }}">
                                @csrf
                                <a class="dropdown-item" :href="route('partner.logout')"
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
                        <a class="nav-link" href="/partnerpanel/partner-dashboard">
                            <i class="fa-solid fa-chart-pie"></i>&nbsp; <span class="menu-title">Dashboard</span>
                        </a>
                    </li>



                    <!-- partner-profile -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <i class="fa fa-user" aria-hidden="true"></i>&nbsp; <span
                                class="menu-title">Profile</span><i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="/partnerpanel/partner-profile">Partner
                                        Profile</a></li>

                                <li class="nav-item"> <a class="nav-link" href="/partnerpanel/partner-opd-contact">OPD
                                        Contact</a></li>

                                <li class="nav-item"> <a class="nav-link"
                                        href="/partnerpanel/partner-pathology-contact">Pathology Contact</a></li>
                            </ul>
                        </div>
                    </li>




                    <!-- partner about clinic -->
                    <li class="nav-item">
                        <a class="nav-link" href="/partnerpanel/partner-about-clinic">
                            <i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp; <span class="menu-title">About
                                Clinic</span>
                        </a>
                    </li>





                    <!-- partner service lists -->
                    <li class="nav-item">
                        <a class="nav-link" href="/partnerpanel/partner-service-lists">
                            <i class="fa fa-ambulance" aria-hidden="true"></i>&nbsp; <span class="menu-title">Service
                                Lists</span>
                        </a>
                    </li>




                    <!-- gallery -->
                    <li class="nav-item">
                        <a class="nav-link" href="/partnerpanel/partner-gallery">
                            <i class="fa-solid fa-image"></i>&nbsp; <span class="menu-title">Gallery</span>
                        </a>
                    </li>






                    <!-- OPD -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic12" aria-expanded="false"
                            aria-controls="ui-basic12">
                            <i class="fa fa-user-doctor" aria-hidden="true"></i>&nbsp; <span
                                class="menu-title">OPD</span><i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic12">
                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link" href="/partnerpanel/partner-opd">Upload OPD</a></li>

                                <li class="nav-item"> <a class="nav-link" href="/partnerpanel/partner-opd-show">Show OPD</a></li>

                            </ul>
                        </div>
                    </li>






                    <!-- Pathology -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic123" aria-expanded="false"
                            aria-controls="ui-basic123">
                            <i class="fa fa-syringe" aria-hidden="true"></i>&nbsp; <span
                                class="menu-title">Pathology</span><i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic123">
                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link" href="/partnerpanel/partner-pathology">Upload Path</a>
                                </li>

                                <li class="nav-item"> <a class="nav-link" href="/partnerpanel/partner-pathology-show">Show
                                        Path</a></li>

                            </ul>
                        </div>
                    </li>





                    <!-- Doctors -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic1234" aria-expanded="false"
                            aria-controls="ui-basic1234">
                            <i class="fa fa-stethoscope" aria-hidden="true"></i>&nbsp; <span
                                class="menu-title">Doctor</span><i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic1234">
                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link" href="/partnerpanel/partner-doctors">Upload Doctor</a>
                                </li>

                                <li class="nav-item"> <a class="nav-link" href="/partnerpanel/partner-doctors-show">Show
                                        Doctor</a></li>

                            </ul>
                        </div>
                    </li>





                    <!-- Inquiry from patients/user -->
                    <li class="nav-item">
                        <a class="nav-link" href="/partnerpanel/partner-inquiry-from-patients">
                            <i class="fa-solid fa-hand-holding-medical"></i>&nbsp; <span
                                class="menu-title">Inquiries</span>
                        </a>
                    </li>








                    <!-- Subsription management -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic11" aria-expanded="false"
                            aria-controls="ui-basic11">
                            <i class="fa-solid fa-indian-rupee-sign"></i>&nbsp; <span
                                class="menu-title">Subsription</span><i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic11">
                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link" href="/partnerpanel/partner-get-subscription">Get
                                        Subsription</a></li>

                                <li class="nav-item"> <a class="nav-link" href="/partnerpanel/partner-show-invoice">Invoice</a>
                                </li>

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

                                <li class="nav-item"> <a class="nav-link" href="/partnerpanel/partner-get-ticket">Get
                                        Ticket</a></li>

                                <li class="nav-item"> <a class="nav-link" href="/partnerpanel/partner-show-ticket">My Tickets</a>
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
                                    <h3 class="font-weight-bold">My Tickets !</h3>
                                    <h6 class="font-weight-normal mb-0"><span><i class="fa fa-stethoscope text-danger"
                                                aria-hidden="true"></i></span>&nbsp;Here is the list of your tickets and
                                        replies from Doctorwala.</b>
                                    </h6>
                                </div>
                            </div>


                            <div class="row m-auto">
                                <div class="col-12 mt-4">


                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Delete</th>
                                                <th scope="col">Ticket ID</th>
                                                <th scope="col">My Problem</th>
                                                <th scope="col">Reply</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>


                                                <td><a href="" data-target="#myDeleteModal" data-toggle="modal"
                                                        class="ed-btn"><i class="fa-solid fa-trash-can text-danger"
                                                            style="font-size: 1.4rem;"></i></a></td>



                                                <td style="font-size: 1.2rem;">
                                                    <p class="m-0"><b>TKT3535</b></p>
                                                </td>
                                                <td style="font-size: 1.2rem;">
                                                    <p class="m-0"><b>Lorem ipsum dolor sit amet, consectetur
                                                            adipisicing elit. Eius, maiores?</b></p>
                                                </td>
                                                <td style="font-size: 1.2rem;">
                                                    <p class="m-0"><b>Lorem ipsum dolor sit amet.</b></p>
                                                </td>



                                            </tr>
                                        </tbody>
                                    </table>


                                </div>


                            </div>
                        </div>
                    </div>








                </div>







                <!-- Delete Modal -->
                <div class="modal fade" id="myDeleteModal" tabindex="-1" role="dialog"
                    aria-labelledby="myDeleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">

                            <form action="" class="modal-body">
                                <div class="form-group d-flex flex-column align-items-center">
                                    <i class="fa-solid fa-trash-can fa-2x text-danger"></i>

                                    <h3 class="mt-3">Are You Sure ?</h3>

                                    <p class="mt-2 text-center">Do you really want to delete these record? This Process
                                        cannot be undone.</p>

                                    <div class="btnss d-flex justify-content-around align-items-center w-100 mt-3">
                                        <button type="button" class="btn btn-primary rounded w-50 mr-3"
                                            data-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-danger rounded w-50">Confirm</button>
                                    </div>
                                </div>
                            </form>

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
    <script src="../partner-assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../partner-assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../partner-assets/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="../partner-assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="../partner-assets/js/dataTables.select.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../partner-assets/js/off-canvas.js"></script>
    <script src="../partner-assets/js/hoverable-collapse.js"></script>
    <script src="../partner-assets/js/template.js"></script>
    <script src="../partner-assets/js/settings.js"></script>
    <script src="../partner-assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../partner-assets/js/dashboard.js"></script>
    <script src="../partner-assets/js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
</body>

</html>